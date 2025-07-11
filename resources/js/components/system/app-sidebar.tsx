import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { BookOpen, Folder, LayoutGrid } from 'lucide-react';
import AppLogo from '../app-logo';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Teacher',
        href: '/courses',
        icon: Folder,
        children: [
            {
                title: 'Teacher List',
                href: '/courses/all',
                icon: Folder,
            },
            {
                title: 'Course List',
                href: '/courses/mine',
                icon: Folder,
            },
            {
                title: 'Video List',
                href: '/courses/mine',
                icon: Folder,
            },
        ],
    },
    {
        title: 'Student',
        href: '/dashboard',
        icon: LayoutGrid,
    },

    {
        title: 'Package',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Admin',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Admin Role',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Permission',
        href: '/dashboard',
        icon: LayoutGrid,
    },
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
            </SidebarFooter>
        </Sidebar>
    );
}
