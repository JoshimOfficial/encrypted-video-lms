// components/role/RoleTable.tsx
import { Role } from './type/role';
import RoleRow from './RoleRow';
import { Skeleton } from '@/components/ui/skeleton';

const RoleTable = ({ 
  roles, 
  onEdit, 
  onDelete,
  onUpdate 
}: { 
  roles: Role[]; 
  onEdit: (role: Role) => void; 
  onDelete: (id: string) => void;
  onUpdate: (role: Role) => void;
}) => {
  return (
    <div className="rounded-lg border border-gray-700 overflow-hidden">
      <div className="grid grid-cols-12 bg-gray-800 px-4 py-3 text-sm font-medium text-gray-300">
        <div className="col-span-3">Role Name</div>
        <div className="col-span-2">Status</div>
        <div className="col-span-3">Created Date</div>
        <div className="col-span-3">Permissions</div>
        <div className="col-span-1">Actions</div>
      </div>

      <div className="bg-gray-900 divide-y divide-gray-800">
        {roles.length > 0 ? (
          roles.map(role => (
            <RoleRow 
              key={role.id} 
              role={role} 
              onEdit={onEdit}
              onDelete={onDelete}
              onUpdate={onUpdate}
            />
          ))
        ) : (
          <div className="text-center py-12 text-gray-500">
            <p>No roles created yet</p>
          </div>
        )}
      </div>
    </div>
  );
};

export default RoleTable;