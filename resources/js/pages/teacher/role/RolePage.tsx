// components/role/RolePage.tsx
import { useState } from 'react';
import RoleTable from './RoleTable';
import CreateRoleModal from './CreateRoleModal';
import { Button } from '@/components/ui/button';
import { Role } from './type/role';

const RolePage = () => {
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [roles, setRoles] = useState<Role[]>([]);
  const [editingRole, setEditingRole] = useState<Role | null>(null);

  const handleCreateRole = (newRole: Role) => {
    setRoles([...roles, newRole]);
  };

  const handleUpdateRole = (updatedRole: Role) => {
    setRoles(roles.map(role => role.id === updatedRole.id ? updatedRole : role));
    setEditingRole(null);
  };

  const handleDelete = (id: string) => {
    setRoles(roles.filter(role => role.id !== id));
  };

  return (
    <div className="container mx-auto px-4 py-8">
      <div className="flex justify-between items-center mb-8">
        <h1 className="text-2xl font-bold text-gray-100">Role Management</h1>
        <Button 
          onClick={() => setIsModalOpen(true)}
          className="bg-indigo-600 hover:bg-indigo-700"
        >
          Create New Role
        </Button>
      </div>

      <RoleTable 
        roles={roles} 
        onEdit={setEditingRole}
        onDelete={handleDelete}
        onUpdate={handleUpdateRole}
      />

      <CreateRoleModal
        isOpen={isModalOpen || !!editingRole}
        onClose={() => {
          setIsModalOpen(false);
          setEditingRole(null);
        }}
        onCreate={handleCreateRole}
        onUpdate={handleUpdateRole}
        existingRole={editingRole}
      />
    </div>
  );
};

export default RolePage;