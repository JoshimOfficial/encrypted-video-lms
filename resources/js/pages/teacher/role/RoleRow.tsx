// components/role/RoleRow.tsx
import { useState } from 'react';
import { Role, Permission } from './type/role';
import { Switch } from '@/components/ui/switch';
import { Button } from '@/components/ui/button';
import { format } from 'date-fns';
import { PencilIcon, TrashIcon, CheckIcon, XIcon } from 'lucide-react';

const RoleRow = ({ 
  role, 
  onEdit, 
  onDelete,
  onUpdate
}: { 
  role: Role; 
  onEdit: (role: Role) => void; 
  onDelete: (id: string) => void;
  onUpdate: (role: Role) => void;
}) => {
  const [isEditing, setIsEditing] = useState(false);
  const [editedName, setEditedName] = useState(role.name);
  const [editedPermissions, setEditedPermissions] = useState<Permission[]>(role.permissions);

  const togglePermission = (id: string) => {
    setEditedPermissions(prev => 
      prev.map(p => p.id === id ? { ...p, checked: !p.checked } : p)
    );
  };

  const handleSave = () => {
    onUpdate({
      ...role,
      name: editedName,
      permissions: editedPermissions
    });
    setIsEditing(false);
  };

  const handleCancel = () => {
    setEditedName(role.name);
    setEditedPermissions(role.permissions);
    setIsEditing(false);
  };

  return (
    <div className="grid grid-cols-12 items-center px-4 py-3 text-sm text-gray-300">
      {isEditing ? (
        <>
          <div className="col-span-3">
            <input
              type="text"
              value={editedName}
              onChange={(e) => setEditedName(e.target.value)}
              className="w-full bg-gray-800 border border-gray-700 rounded px-3 py-1 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"
            />
          </div>
          <div className="col-span-2">
            <Switch checked={role.isActive} className="data-[state=checked]:bg-indigo-500" />
          </div>
          <div className="col-span-3">{format(new Date(role.createdAt), 'dd MMM yyyy')}</div>
          <div className="col-span-3 flex flex-wrap gap-2">
            {editedPermissions.map(permission => (
              <div key={permission.id} className="flex items-center">
                <Switch 
                  id={permission.id}
                  checked={permission.checked}
                  onCheckedChange={() => togglePermission(permission.id)}
                  className="mr-2 data-[state=checked]:bg-indigo-500"
                />
                <label htmlFor={permission.id} className="text-xs">
                  {permission.name}
                </label>
              </div>
            ))}
          </div>
          <div className="col-span-1 flex space-x-2">
            <Button size="icon" variant="ghost" onClick={handleSave}>
              <CheckIcon className="h-4 w-4 text-green-500" />
            </Button>
            <Button size="icon" variant="ghost" onClick={handleCancel}>
              <XIcon className="h-4 w-4 text-red-500" />
            </Button>
          </div>
        </>
      ) : (
        <>
          <div className="col-span-3 font-medium text-gray-100">{role.name}</div>
          <div className="col-span-2">
            <span className={`px-2 py-1 rounded-full text-xs ${
              role.isActive ? 'bg-green-900 text-green-300' : 'bg-red-900 text-red-300'
            }`}>
              {role.isActive ? 'Active' : 'Inactive'}
            </span>
          </div>
          <div className="col-span-3">{format(new Date(role.createdAt), 'dd MMM yyyy')}</div>
          <div className="col-span-3">
            <div className="flex flex-wrap gap-1">
              {role.permissions
                .filter(p => p.checked)
                .map(p => (
                  <span key={p.id} className="bg-gray-800 px-2 py-1 rounded text-xs">
                    {p.name}
                  </span>
                ))}
            </div>
          </div>
          <div className="col-span-1 flex space-x-2">
            <Button 
              size="icon" 
              variant="ghost"
              onClick={() => {
                setEditedName(role.name);
                setEditedPermissions(role.permissions);
                setIsEditing(true);
              }}
            >
              <PencilIcon className="h-4 w-4 text-gray-400 hover:text-indigo-400" />
            </Button>
            <Button 
              size="icon" 
              variant="ghost"
              onClick={() => onDelete(role.id)}
            >
              <TrashIcon className="h-4 w-4 text-gray-400 hover:text-red-500" />
            </Button>
          </div>
        </>
      )}
    </div>
  );
};

export default RoleRow;