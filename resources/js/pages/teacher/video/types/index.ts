export type Video = {
    id: string;
    title: string;
    course: string;
    batchNo: string;
    status: "draft" | "published" | "archived";
    watchCount: number;
    security: "encrypted" | "shareable";
    createdAt: string;
    updatedAt: string;
    size: string;
    uploadedTeacher: string;
    editedTeacher: string;
  };
  
  export type ColumnDef<T> = {
    id: string;
    header: string | React.ReactNode;
    cell: (row: T) => React.ReactNode;
    enableSorting?: boolean;
    enableHiding?: boolean;
  };
  
  export type FilterOption = {
    id: string;
    label: string;
    type: "select" | "text" | "date";
    options?: { value: string; label: string }[];
  };