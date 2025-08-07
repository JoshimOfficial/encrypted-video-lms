import * as React from "react";
import {
  useReactTable,
  getCoreRowModel,
  getFilteredRowModel,
  getPaginationRowModel,
  getSortedRowModel,
  ColumnFiltersState,
  SortingState,
  VisibilityState,
} from "@tanstack/react-table";
import { Skeleton } from "@/components/ui/skeleton";
import { DataTableHeader } from "./DataTableHeader";
import { DataTableBody } from "./DataTableBody";
import { DataTablePagination } from "./DataTablePagination";
import { FilterOption } from "@/pages/teacher/video/types";
import { flexRender } from "@tanstack/react-table";

interface DataTableProps<T> {
  columns: any[];
  data: T[];
  loading: boolean;
  filterOptions?: FilterOption[];
  onFilterChange?: (id: string, value: string) => void;
  onSearch?: (term: string) => void;
  actionButton?: React.ReactNode;
}

export function DataTable<T>({
  columns,
  data,
  loading,
  filterOptions = [],
  onFilterChange,
  onSearch,
  actionButton,
}: DataTableProps<T>) {
  // Error handling for invalid data
  if (!Array.isArray(data)) {
    console.error("DataTable: data is not an array", data);
    return (
      <div className="w-full p-4 md:p-6">
        <div className="rounded-md border p-4">
          <p className="text-red-600">Error: Invalid data format</p>
        </div>
      </div>
    );
  }

  const [sorting, setSorting] = React.useState<SortingState>([]);
  const [columnFilters, setColumnFilters] = React.useState<ColumnFiltersState>([]);
  const [columnVisibility, setColumnVisibility] = React.useState<VisibilityState>({});
  const [globalFilter, setGlobalFilter] = React.useState("");

  const table = useReactTable({
    data,
    columns,
    state: {
      sorting,
      columnFilters,
      columnVisibility,
      globalFilter,
    },
    onSortingChange: setSorting,
    onColumnFiltersChange: setColumnFilters,
    onColumnVisibilityChange: setColumnVisibility,
    onGlobalFilterChange: setGlobalFilter,
    getCoreRowModel: getCoreRowModel(),
    getFilteredRowModel: getFilteredRowModel(),
    getPaginationRowModel: getPaginationRowModel(),
    getSortedRowModel: getSortedRowModel(),
  });

  // Handle filter changes
  const handleFilterChange = (id: string, value: string) => {
    if (value === "all" || value === "") {
      table.getColumn(id)?.setFilterValue(undefined);
    } else {
      table.getColumn(id)?.setFilterValue(value);
    }
    onFilterChange?.(id, value);
  };

  // Handle global search
  const handleSearch = (term: string) => {
    setGlobalFilter(term);
    onSearch?.(term);
  };

  return (
    <div className="w-full space-y-4">
      <DataTableHeader 
        table={table}
        filterOptions={filterOptions}
        onFilterChange={handleFilterChange}
        onSearch={handleSearch}
        actionButton={actionButton}
      />
      
      <div className="rounded-md border ">
        <div className="overflow-x-auto">
          <table className="w-full">
            <thead className="">
              {table.getHeaderGroups().map(headerGroup => (
                <tr key={headerGroup.id} className="border-b">
                  {headerGroup.headers.map(header => (
                    <th key={header.id} className="text-left p-4 font-medium ">
                      {flexRender(header.column.columnDef.header, header.getContext())}
                    </th>
                  ))}
                </tr>
              ))}
            </thead>
            <DataTableBody 
              table={table} 
              loading={loading} 
            />
          </table>
        </div>
      </div>

      <DataTablePagination table={table} />
    </div>
  );
}