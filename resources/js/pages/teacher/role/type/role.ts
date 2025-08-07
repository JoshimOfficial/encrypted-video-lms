// types/role.ts
export interface Permission {
    id: string;
    name: string;
    checked: boolean;
  }
  
  export interface Role {
    id: string;
    name: string;
    createdAt: string;
    isActive: boolean;
    permissions: Permission[];
  }