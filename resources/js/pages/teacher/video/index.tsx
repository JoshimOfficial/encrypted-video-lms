import { useState, useEffect } from "react";
import { Button } from "@/components/ui/button";
import { PlusCircle } from "lucide-react";
import { DataTable } from "@/components/DataTable/DataTable";
import VideosData from "./data/videos.json";
import { Video, FilterOption } from "./types";
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

const VideoManagementPage = () => {
  const { toast } = useToast();
  const [videos, setVideos] = useState<Video[]>([]);
  const [loading, setLoading] = useState(true);
  const [selectedCourse, setSelectedCourse] = useState("");
  const [selectedBatch, setSelectedBatch] = useState("");
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [videoToDelete, setVideoToDelete] = useState<Video | null>(null);
  
  // Get unique courses and batches
  const courses = Array.from(new Set(videos.map(video => video.course)));
  const batches = Array.from(
    new Set(
      selectedCourse 
        ? videos
            .filter(video => video.course === selectedCourse)
            .map(video => video.batchNo)
        : videos.map(video => video.batchNo)
    )
  );

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

  // Column definitions
  const columns: ColumnDef<Video>[] = [
    {
      accessorKey: "title",
      header: "Title",
      cell: ({ row }) => <div className="font-medium">{row.getValue("title")}</div>,
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "course",
      header: "Course",
      cell: ({ row }) => row.getValue("course"),
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "batchNo",
      header: "Batch",
      cell: ({ row }) => <Badge variant="secondary">{row.getValue("batchNo")}</Badge>,
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
      accessorKey: "watchCount",
      header: "Views",
      cell: ({ row }) => {
        const count = row.getValue("watchCount") as number;
        return <div>{count?.toLocaleString() || '0'}</div>;
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "security",
      header: "Security",
      cell: ({ row }) => {
        const security = row.getValue("security") as string;
        return (
          <Badge variant={security === "encrypted" ? "default" : "outline"}>
            {security}
          </Badge>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "size",
      header: "Size",
      cell: ({ row }) => row.getValue("size"),
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "createdAt",
      header: "Created",
      cell: ({ row }) => {
        const date = row.getValue("createdAt") as string;
        return (
          <div className="text-muted-foreground">
            {formatDate(date)}
          </div>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "updatedAt",
      header: "Updated",
      cell: ({ row }) => {
        const date = row.getValue("updatedAt") as string;
        return (
          <div className="text-muted-foreground">
            {formatDate(date)}
          </div>
        );
      },
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "uploadedTeacher",
      header: "Uploaded By",
      cell: ({ row }) => (
        <div className="text-sm text-muted-foreground">
          {row.getValue("uploadedTeacher")}
        </div>
      ),
      enableSorting: true,
      enableHiding: true,
    },
    {
      accessorKey: "editedTeacher",
      header: "Edited By",
      cell: ({ row }) => (
        <div className="text-sm text-muted-foreground">
          {row.getValue("editedTeacher")}
        </div>
      ),
      enableSorting: true,
      enableHiding: true,
    },
    {
      id: "actions",
      header: "Actions",
      cell: ({ row }) => {
        const video = row.original;
        return (
          <div className="flex space-x-2">
            <Button 
              variant="outline" 
              size="sm"
              onClick={() => handleEdit(video)}
            >
              Edit
            </Button>
            <Button 
              variant="destructive" 
              size="sm"
              onClick={() => handleDelete(video)}
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
      id: "course",
      label: "Course",
      type: "select",
      options: [{ value: "all", label: "All Courses" }, ...courses.map(c => ({ value: c, label: c }))]
    },
    {
      id: "batchNo",
      label: "Batch",
      type: "select",
      options: [{ value: "all", label: "All Batches" }, ...batches.map(b => ({ value: b, label: b }))]
    },
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
    },
    {
      id: "security",
      label: "Security",
      type: "select",
      options: [
        { value: "all", label: "All Types" },
        { value: "encrypted", label: "Encrypted" },
        { value: "shareable", label: "Shareable" }
      ]
    }
  ];

  // Handle filter changes
  const handleFilterChange = (id: string, value: string) => {
    if (id === "course") {
      setSelectedCourse(value === "all" ? "" : value);
      setSelectedBatch("");
    } else if (id === "batchNo") {
      setSelectedBatch(value === "all" ? "" : value);
    }
  };

  // Handle search
  const handleSearch = (term: string) => {
    // Global search is handled by the DataTable component
    console.log("Search term:", term);
  };

  // Handle edit button click
  const handleEdit = (video: Video) => {
    router.visit(route('teacher-video-edit', { id: video.id }));
  };

  // Handle delete button click
  const handleDelete = (video: Video) => {
    setVideoToDelete(video);
    setDeleteModalOpen(true);
  };

  // Handle delete confirmation
  const handleDeleteConfirm = async () => {
    if (!videoToDelete) return;
    
    try {
      // Call the delete API route
      // await router.delete(route('teacher-video-delete', { id: videoToDelete.id }));
      
      // Remove video from state
      // setVideos(prev => prev.filter(video => video.id !== videoToDelete.id));
      
      toast({
        title: "Success",
        description: "Video deleted successfully!",
      });
    } catch (error) {
      toast({
        title: "Error",
        description: "Failed to delete video. Please try again.",
        variant: "destructive",
      });
    } finally {
      setDeleteModalOpen(false);
      setVideoToDelete(null);
    }
  };

  // Handle delete cancellation
  const handleDeleteCancel = () => {
    setDeleteModalOpen(false);
    setVideoToDelete(null);
  };

  // Fetch data
  useEffect(() => {
    const fetchData = async () => {
      setLoading(true);
      // Simulate API call
      setTimeout(() => {
        console.log("Loading videos:", VideosData.length);
        setVideos(VideosData as unknown as Video[]);
        setLoading(false);
      }, 1500);
    };

    fetchData();
  }, []);

  // Debug: Log when videos change
  useEffect(() => {
    console.log("Videos updated:", videos.length);
  }, [videos]);

  return (
    <TeacherLayout>

    <div className="container mx-auto py-8">
      <div className="flex justify-between items-center mb-6">
        <h1 className="text-2xl font-bold">Video Management</h1>
        <Button className="gap-2" onClick={() => router.visit(route('teacher-video-create'))}>
          <PlusCircle className="h-4 w-4" />
          Add New Video
        </Button>
      </div>

      <DataTable<Video>
        columns={columns}
        data={videos}
        loading={loading}
        filterOptions={filterOptions}
        onFilterChange={handleFilterChange}
        onSearch={handleSearch}
        actionButton={<Button variant="outline">Export</Button>}
      />

      {/* Delete Confirmation Modal */}
      <Dialog open={deleteModalOpen} onOpenChange={setDeleteModalOpen}>
        <DialogContent>
          <DialogHeader>
            <DialogTitle>Delete Video</DialogTitle>
            <DialogDescription>
              Are you sure you want to delete "{videoToDelete?.title}"? This action cannot be undone.
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

export default VideoManagementPage;