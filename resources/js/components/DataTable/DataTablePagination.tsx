import { Table } from "@tanstack/react-table";
import { Button } from "@/components/ui/button";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { ChevronLeft, ChevronRight } from "lucide-react";

interface DataTablePaginationProps<T> {
  table: Table<T>;
}

export function DataTablePagination<T>({ table }: DataTablePaginationProps<T>) {
  return (
    <div className="flex flex-col md:flex-row items-center justify-between gap-4 p-4  rounded-lg border">
      <div className="text-sm text-gray-600">
        Showing {table.getState().pagination.pageIndex * table.getState().pagination.pageSize + 1} -{" "}
        {Math.min(
          (table.getState().pagination.pageIndex + 1) * table.getState().pagination.pageSize,
          table.getFilteredRowModel().rows.length
        )} of {table.getFilteredRowModel().rows.length} items
      </div>
      
      <div className="flex items-center space-x-2">
        <Button
          variant="outline"
          size="sm"
          onClick={() => table.previousPage()}
          disabled={!table.getCanPreviousPage()}
          className=""
        >
          <ChevronLeft className="h-4 w-4 mr-1" />
          Previous
        </Button>
        <span className="text-sm font-medium text-gray-700">
          Page {table.getState().pagination.pageIndex + 1} of {table.getPageCount()}
        </span>
        <Button
          variant="outline"
          size="sm"
          onClick={() => table.nextPage()}
          disabled={!table.getCanNextPage()}
          className=""
        >
          Next
          <ChevronRight className="h-4 w-4 ml-1" />
        </Button>
      </div>
      
      <div className="flex items-center space-x-2">
        <span className="text-sm text-gray-600">Rows per page</span>
        <Select
          value={`${table.getState().pagination.pageSize}`}
          onValueChange={value => table.setPageSize(Number(value))}
        >
          <SelectTrigger className="w-[80px] ">
            <SelectValue placeholder={table.getState().pagination.pageSize} />
          </SelectTrigger>
          <SelectContent>
            {[10, 20, 30, 40, 50].map(pageSize => (
              <SelectItem key={pageSize} value={`${pageSize}`}>
                {pageSize}
              </SelectItem>
            ))}
          </SelectContent>
        </Select>
      </div>
    </div>
  );
}