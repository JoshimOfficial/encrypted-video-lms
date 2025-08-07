import { Table } from "@tanstack/react-table";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { ChevronDown, Search } from "lucide-react";
import { DropdownMenu, DropdownMenuCheckboxItem, DropdownMenuContent, DropdownMenuTrigger } from "@/components/ui/dropdown-menu";
import { FilterOption } from "@/pages/teacher/video/types";

interface DataTableHeaderProps<T> {
  table: Table<T>;
  filterOptions: FilterOption[];
  onFilterChange?: (id: string, value: string) => void;
  onSearch?: (term: string) => void;
  actionButton?: React.ReactNode;
}

export function DataTableHeader<T>({
  table,
  filterOptions,
  onFilterChange,
  onSearch,
  actionButton,
}: DataTableHeaderProps<T>) {
  return (
    <div className="flex flex-col md:flex-row md:items-center justify-between gap-4 p-4 rounded-lg border">
      <div className="flex flex-wrap gap-3">
        {filterOptions.map(filter => (
          filter.type === "select" ? (
            <Select
              key={filter.id}
              onValueChange={value => onFilterChange?.(filter.id, value)}
            >
              <SelectTrigger className="w-[180px] ">
                <SelectValue placeholder={`Filter by ${filter.label}`} />
              </SelectTrigger>
              <SelectContent>
                {filter.options?.map(option => (
                  <SelectItem key={option.value} value={option.value}>
                    {option.label}
                  </SelectItem>
                ))}
              </SelectContent>
            </Select>
          ) : (
            <Input
              key={filter.id}
              placeholder={`Search ${filter.label}...`}
              onChange={e => onFilterChange?.(filter.id, e.target.value)}
              className="max-w-sm "
            />
          )
        ))}
      </div>

      <div className="flex gap-3">
        {onSearch && (
          <div className="relative">
            <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 " />
            <Input
              placeholder="Global search..."
              onChange={e => onSearch(e.target.value)}
              className="pl-10 max-w-sm "
            />
          </div>
        )}

        <DropdownMenu>
          <DropdownMenuTrigger asChild>
            <Button variant="outline" className="">
              Columns <ChevronDown className="ml-2 h-4 w-4" />
            </Button>
          </DropdownMenuTrigger>
          <DropdownMenuContent align="end">
            {table
              .getAllColumns()
              .filter(column => column.getCanHide())
              .map(column => (
                <DropdownMenuCheckboxItem
                  key={column.id}
                  checked={column.getIsVisible()}
                  onCheckedChange={value => column.toggleVisibility(!!value)}
                >
                  {column.id}
                </DropdownMenuCheckboxItem>
              ))}
          </DropdownMenuContent>
        </DropdownMenu>

        {actionButton}
      </div>
    </div>
  );
}