// app/roles/page.tsx

import RolePage from './RolePage';
import TeacherLayout from '@/layouts/teacher-layout';

export default function RolesPage() {
    return (
        <TeacherLayout>
            <RolePage />
        </TeacherLayout>
    )
}