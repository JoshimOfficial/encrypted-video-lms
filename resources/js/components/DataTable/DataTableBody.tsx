import { flexRender, Table } from "@tanstack/react-table";
import { Skeleton } from "@/components/ui/skeleton";

interface DataTableBodyProps<T> {
  table: Table<T>;
  loading: boolean;
}

export function DataTableBody<T>({ table, loading }: DataTableBodyProps<T>) {
  try {
    const visibleColumns = table.getAllColumns().filter(column => column.getIsVisible());
    
    return (
      <tbody>
        {loading ? (
          Array.from({ length: 10 }).map((_, rowIndex) => (
            <tr key={rowIndex} className="border-b">
              {visibleColumns.map((column, colIndex) => (
                <td key={colIndex} className="p-4">
                  <Skeleton className="h-4 w-full" />
                </td>
              ))}
            </tr>
          ))
        ) : table.getRowModel().rows?.length ? (
          table.getRowModel().rows.map(row => (
            <tr key={row.id} className="border-b  transition-colors">
              {row.getVisibleCells().map(cell => (
                <td key={cell.id} className="p-4">
                  {flexRender(cell.column.columnDef.cell, cell.getContext())}
                </td>
              ))}
            </tr>
          ))
        ) : (
          <tr>
            <td colSpan={visibleColumns.length} className="h-24 text-center p-8 text-gray-500">
              No results found.
            </td>
          </tr>
        )}
      </tbody>
    );
  } catch (error) {
    console.error("DataTableBody error:", error);
    return (
      <tbody>
        <tr>
          <td colSpan={table.getAllColumns().filter(column => column.getIsVisible()).length} className="h-24 text-center p-8 text-red-500">
            Error loading data
          </td>
        </tr>
      </tbody>
    );
  }
}