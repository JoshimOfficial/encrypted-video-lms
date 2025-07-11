import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem, SidebarMenuSub, SidebarMenuSubItem, SidebarMenuSubButton } from '@/components/ui/sidebar';
import { ChevronDown } from 'lucide-react';
import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/react';
import { useState } from 'react';

export function NavMain({ items = [] }: { items: NavItem[] }) {
    const page = usePage();

    // Helper to check if a nav item or any of its children is active
    const isItemActive = (item: NavItem): boolean => {
        if (page.url.startsWith(item.href)) return true;
        if (item.children) {
            return item.children.some(child => isItemActive(child));
        }
        return false;
    };

    const renderNavItem = (item: NavItem) => {
        const [open, setOpen] = useState(isItemActive(item));
        const active = isItemActive(item);
        if (item.children && item.children.length > 0) {
            return (
                <SidebarMenuItem key={item.title}>
                    <button
                        type="button"
                        className={`flex w-full items-center gap-2 rounded-md p-2 text-left text-sm transition-colors ${active ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium' : 'hover:bg-sidebar-accent hover:text-sidebar-accent-foreground'} focus:outline-none`}
                        onClick={() => setOpen((prev) => !prev)}
                        aria-expanded={open}
                    >
                        {item.icon && <item.icon />}
                        <span className="flex-1 truncate">{item.title}</span>
                        <ChevronDown className={`ml-2 h-4 w-4 transition-transform ${open ? 'rotate-180' : ''}`} />
                    </button>
                    {open && (
                        <SidebarMenuSub>
                            {item.children.map((child) => {
                                const childActive = isItemActive(child);
                                return (
                                    <SidebarMenuSubItem key={child.title}>
                                        <SidebarMenuSubButton asChild isActive={childActive} className={childActive ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium' : ''}>
                                            <Link href={child.href} prefetch>
                                                {child.icon && <child.icon />}
                                                <span>{child.title}</span>
                                            </Link>
                                        </SidebarMenuSubButton>
                                    </SidebarMenuSubItem>
                                );
                            })}
                        </SidebarMenuSub>
                    )}
                </SidebarMenuItem>
            );
        }
        return (
            <SidebarMenuItem key={item.title}>
                <SidebarMenuButton asChild isActive={active} tooltip={{ children: item.title }} className={active ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium' : ''}>
                    <Link href={item.href} prefetch>
                        {item.icon && <item.icon />}
                        <span>{item.title}</span>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        );
    };
    return (
        <SidebarGroup className="px-2 py-0">
            <SidebarGroupLabel>Platform</SidebarGroupLabel>
            <SidebarMenu>
                {items.map(renderNavItem)}
            </SidebarMenu>
        </SidebarGroup>
    );
}
