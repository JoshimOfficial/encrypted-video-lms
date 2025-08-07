// components/role/CreateRoleModal.tsx
import { useState, useEffect } from 'react';
import { Role, Permission } from './type/role';
import { Dialog, DialogContent, DialogHeader, DialogTitle, DialogDescription } from '@/components/ui/dialog';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Switch } from '@/components/ui/switch';
import { Label } from '@/components/ui/label';

const PERMISSIONS_LIST = [
  'Student Management',
  'Course Management',
  'Batch Management',
  'Video Management',
  'Teacher Management',
  'Service Management',
  'Package Management'
];

const CreateRoleModal = ({ 
  isOpen, 
  onClose, 
  onCreate,
  onUpdate,
  existingRole 
}: { 
  isOpen: boolean; 
  onClose: () => void; 
  onCreate: (role: Role) => void;
  onUpdate: (role: Role) => void;
  existingRole: Role | null;
}) => {
  const isEditing = !!existingRole;
  const [name, setName] = useState('');
  const [permissions, setPermissions] = useState<Permission[]>([]);

  useEffect(() => {
    if (existingRole) {
      setName(existingRole.name);
      setPermissions(existingRole.permissions);
    } else {
      setName('');
      setPermissions(PERMISSIONS_LIST.map(name => ({
        id: name.toLowerCase().replace(/\s+/g, '-'),
        name,
        checked: false
      })));
    }
  }, [existingRole, isOpen]);

  const togglePermission = (id: string) => {
    setPermissions(prev => 
      prev.map(p => p.id === id ? { ...p, checked: !p.checked } : p)
    );
  };

  const handleSubmit = () => {
    const newRole: Role = {
      id: existingRole?.id || `role-${Date.now()}`,
      name,
      createdAt: existingRole?.createdAt || new Date().toISOString(),
      isActive: existingRole?.isActive ?? true,
      permissions
    };

    if (isEditing) {
      onUpdate(newRole);
    } else {
      onCreate(newRole);
    }
    onClose();
  };

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-2xl bg-gray-900 border border-gray-700">
        <DialogHeader>
          <DialogTitle className="text-gray-100">
            {isEditing ? 'Edit Role' : 'Create New Role'}
          </DialogTitle>
          <DialogDescription className="text-gray-400">
            {isEditing 
              ? 'Modify role details and permissions' 
              : 'Define a new role with specific permissions'}
          </DialogDescription>
        </DialogHeader>

        <div className="space-y-6 py-4">
          <div>
            <Label htmlFor="name" className="block mb-2 text-gray-300">
              Role Name
            </Label>
            <Input
              id="name"
              value={name}
              onChange={(e) => setName(e.target.value)}
              className="bg-gray-800 border-gray-700 text-gray-100"
              placeholder="Enter role name"
            />
          </div>

          <div>
            <h3 className="text-gray-300 mb-3">Permissions</h3>
            <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
              {permissions.map((permission) => (
                <div key={permission.id} className="flex items-center space-x-2">
                  <Switch
                    id={permission.id}
                    checked={permission.checked}
                    onCheckedChange={() => togglePermission(permission.id)}
                    className="data-[state=checked]:bg-indigo-500"
                  />
                  <Label 
                    htmlFor={permission.id} 
                    className="text-sm font-normal text-gray-400"
                  >
                    {permission.name}
                  </Label>
                </div>
              ))}
            </div>
          </div>
        </div>

        <div className="flex justify-end space-x-3 mt-4">
          <Button variant="outline" onClick={onClose} className="border-gray-700">
            Cancel
          </Button>
          <Button 
            onClick={handleSubmit}
            className="bg-indigo-600 hover:bg-indigo-700"
          >
            {isEditing ? 'Update Role' : 'Create Role'}
          </Button>
        </div>
      </DialogContent>
    </Dialog>
  );
};

export default CreateRoleModal;