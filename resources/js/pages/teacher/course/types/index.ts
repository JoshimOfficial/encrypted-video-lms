export type Course = {
  id: string;
  name: string;
  slug: string;
  description: string;
  price: number;
  timeDuration: string; // e.g., "3 months", "6 weeks", "40 hours"
  startDate: string;
  status: "draft" | "published" | "archived";
  createdAt: string;
  updatedAt: string;
  createdBy: string;
  updatedBy: string;
  studentCount: number;
  batchCount: number;
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
