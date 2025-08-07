import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { BookOpen, Folder, LayoutGrid } from 'lucide-react';
import AppLogo from '../app-logo';
import { Button } from '../ui/button';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Course',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Video',
        href: '/teacher/video',
        icon: LayoutGrid,
    },
    {
        title: 'Student',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Batch',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Instructor',
        href: '/teacher/instructor',
        icon: LayoutGrid,
    },
    {
        title: 'Role',
        href: '/teacher/role',
        icon: LayoutGrid,
    },
    {
        title: 'Services Setup',
        href: '/dashboard',
        icon: LayoutGrid,
    }
];

const footerNavItems: NavItem[] = [
    {
        title: 'Repository',
        href: 'https://github.com/laravel/react-starter-kit',
        icon: Folder,
    },
    {
        title: 'Documentation',
        href: 'https://laravel.com/docs/starter-kits#react',
        icon: BookOpen,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href="/dashboard" prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain items={mainNavItems} />
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
                <div className="flex space-x-4">
                            <Link href={route('home')}>
                                <Button variant="outline">Back to Home</Button>
                            </Link>
                            <form method="POST" action={route('teacher.logout')} className="inline">
                                <Button type="submit" variant="destructive">Logout</Button>
                            </form>
                        </div>
            </SidebarFooter>
        </Sidebar>
    );
}
