import { useState, useEffect } from "react";
import { Button } from "@/components/ui/button";
import { PlusCircle } from "lucide-react";
import { DataTable } from "@/components/DataTable/DataTable";
import CoursesData from "./data/courses.json";
import { Course, FilterOption } from "./types";
import { Badge } from "@/components/ui/badge";
import { ColumnDef } from "@tanstack/react-table";
import TeacherLayout from "@/layouts/teacher-layout";
import { router } from "@inertiajs/react";
import { useToast } from "@/components/ui/use-toast";
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/components/ui/dialog";

const CourseManagementPage = () => {
  const { toast } = useToast();
  const [courses, setCourses] = useState<Course[]>([]);
  const [loading, setLoading] = useState(true);
  const [selectedStatus, setSelectedStatus] = useState("");
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [courseToDelete, setCourseToDelete] = useState<Course | null>(null);
  
  // Get unique statuses for filtering
  const statuses = Array.from(new Set(courses.map(course => course.status)));

  // Helper function to format date
  const formatDate = (dateString: string) => {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'short',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit'
    });
  };

  // Helper function to format price
  const formatPrice = (price: number) => {
    return new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    }).format(price);
  };

  // Column definitions
  const columns: ColumnDef<Course>[] = [
    {
      accessorKey: "name",
      header: "Course Name",
      cell: ({ row }) => (
        <div className="font-medium max-w-[200px] truncate" title={row.getValue("name")}>
          {row.getValue("name")}
        </div>
      ),
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "slug",
      header: "Slug",
      cell: ({ row }) => (
        <div className="text-sm text-muted-foreground font-mono max-w-[150px] truncate" title={row.getValue("slug")}>
          {row.getValue("slug")}
        </div>
      ),
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "description",
      header: "Description",
      cell: ({ row }) => {
        const description = row.getValue("description") as string;
        const strippedDescription = description.replace(/<[^>]*>/g, ''); // Remove HTML tags
        return (
          <div className="max-w-[300px] truncate text-sm text-muted-foreground" title={strippedDescription}>
            {strippedDescription}
          </div>
        );
      },
      enableSorting: false,
      enableHiding: true,
    },
    {
      accessorKey: "price",
      header: "Price",
      cell: ({ row }) => {
        const price = row.getValue("price") as number;
        return (
          <div className="font-medium">
            {formatPrice(price)}
          </div>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "timeDuration",
      header: "Duration",
      cell: ({ row }) => (
        <Badge variant="secondary">{row.getValue("timeDuration")}</Badge>
      ),
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "startDate",
      header: "Start Date",
      cell: ({ row }) => {
        const date = row.getValue("startDate") as string;
        return (
          <div className="text-sm">
            {new Date(date).toLocaleDateString('en-US', {
              year: 'numeric',
              month: 'short',
              day: 'numeric'
            })}
          </div>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "status",
      header: "Status",
      cell: ({ row }) => {
        const status = row.getValue("status") as string;
        return (
          <Badge
            variant={
              status === "published"
                ? "default"
                : status === "draft"
                ? "outline"
                : "destructive"
            }
          >
            {status}
          </Badge>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "studentCount",
      header: "Students",
      cell: ({ row }) => {
        const count = row.getValue("studentCount") as number;
        return <div className="text-center">{count?.toLocaleString() || '0'}</div>;
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "batchCount",
      header: "Batches",
      cell: ({ row }) => {
        const count = row.getValue("batchCount") as number;
        return <div className="text-center">{count?.toLocaleString() || '0'}</div>;
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "createdAt",
      header: "Created",
      cell: ({ row }) => {
        const date = row.getValue("createdAt") as string;
        return (
          <div className="text-muted-foreground text-sm">
            {formatDate(date)}
          </div>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "createdBy",
      header: "Created By",
      cell: ({ row }) => (
        <div className="text-sm text-muted-foreground">
          {row.getValue("createdBy")}
        </div>
      ),
      enableSorting: true,
      enableHiding: true,
    },
    {
      id: "actions",
      header: "Actions",
      cell: ({ row }) => {
        const course = row.original;
        return (
          <div className="flex space-x-2">
            <Button 
              variant="outline" 
              size="sm"
              onClick={() => handleEdit(course)}
              className="text-xs"
            >
              Edit
            </Button>
            <Button 
              variant="destructive" 
              size="sm"
              onClick={() => handleDelete(course)}
              className="text-xs"
            >
              Delete
            </Button>
          </div>
        );
      },
      enableSorting: false,
      enableHiding: false,
    },
  ];

  // Filter options
  const filterOptions: FilterOption[] = [
    {
      id: "status",
      label: "Status",
      type: "select",
      options: [
        { value: "all", label: "All Status" },
        { value: "draft", label: "Draft" },
        { value: "published", label: "Published" },
        { value: "archived", label: "Archived" }
      ]
    }
  ];

  // Handle filter changes
  const handleFilterChange = (id: string, value: string) => {
    if (id === "status") {
      setSelectedStatus(value === "all" ? "" : value);
    }
  };

  // Handle search
  const handleSearch = (term: string) => {
    // Global search is handled by the DataTable component
    console.log("Search term:", term);
  };

  // Handle edit button click
  const handleEdit = (course: Course) => {
    router.visit(route('teacher-course-edit', { id: course.id }));
  };

  // Handle delete button click
  const handleDelete = (course: Course) => {
    setCourseToDelete(course);
    setDeleteModalOpen(true);
  };

  // Handle delete confirmation
  const handleDeleteConfirm = async () => {
    if (!courseToDelete) return;
    
    try {
      // Call the delete API route
      // await router.delete(route('teacher-course-delete', { id: courseToDelete.id }));
      
      // Remove course from state
      // setCourses(prev => prev.filter(course => course.id !== courseToDelete.id));
      
      toast({
        title: "Success",
        description: "Course deleted successfully!",
      });
    } catch (error) {
      toast({
        title: "Error",
        description: "Failed to delete course. Please try again.",
        variant: "destructive",
      });
    } finally {
      setDeleteModalOpen(false);
      setCourseToDelete(null);
    }
  };

  // Handle delete cancellation
  const handleDeleteCancel = () => {
    setDeleteModalOpen(false);
    setCourseToDelete(null);
  };

  // Fetch data
  useEffect(() => {
    const fetchData = async () => {
      setLoading(true);
      // Simulate API call
      setTimeout(() => {
        console.log("Loading courses:", CoursesData.length);
        setCourses(CoursesData as unknown as Course[]);
        setLoading(false);
      }, 1500);
    };

    fetchData();
  }, []);

  // Debug: Log when courses change
  useEffect(() => {
    console.log("Courses updated:", courses.length);
  }, [courses]);

  return (
    <TeacherLayout>
      <div className="container mx-auto py-8">
        <div className="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6 gap-4">
          <h1 className="text-2xl font-bold">Course Management</h1>
          <Button className="gap-2 w-full sm:w-auto" onClick={() => router.visit(route('teacher-course-create'))}>
            <PlusCircle className="h-4 w-4" />
            Add New Course
          </Button>
        </div>

        <div className="w-full overflow-x-auto">
          <DataTable<Course>
            columns={columns}
            data={courses}
            loading={loading}
            filterOptions={filterOptions}
            onFilterChange={handleFilterChange}
            onSearch={handleSearch}
            actionButton={<Button variant="outline" className="w-full sm:w-auto">Export</Button>}
          />
        </div>

        {/* Delete Confirmation Modal */}
        <Dialog open={deleteModalOpen} onOpenChange={setDeleteModalOpen}>
          <DialogContent>
            <DialogHeader>
              <DialogTitle>Delete Course</DialogTitle>
              <DialogDescription>
                Are you sure you want to delete "{courseToDelete?.name}"? This action cannot be undone.
              </DialogDescription>
            </DialogHeader>
            <DialogFooter>
              <Button variant="outline" onClick={handleDeleteCancel}>
                Cancel
              </Button>
              <Button variant="destructive" onClick={handleDeleteConfirm}>
                Delete
              </Button>
            </DialogFooter>
          </DialogContent>
        </Dialog>
      </div>
    </TeacherLayout>
  );
};

export default CourseManagementPage;
