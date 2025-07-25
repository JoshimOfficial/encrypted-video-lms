import { Head, Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';

export default function SystemDashboard() {
    return (
        <>
            <Head title="System Admin Dashboard" />
            <div className="min-h-screen bg-gray-50">
                <div className="container mx-auto px-4 py-8">
                    <div className="flex justify-between items-center mb-8">
                        <div>
                            <h1 className="text-3xl font-bold text-gray-900">System Admin Dashboard</h1>
                            <p className="text-gray-600 mt-2">Welcome to the system administration panel</p>
                        </div>
                        <div className="flex space-x-4">
                            <Link href={route('home')}>
                                <Button variant="outline">Back to Home</Button>
                            </Link>
                            <form method="POST" action={route('system.logout')} className="inline">
                                <Button type="submit" variant="destructive">Logout</Button>
                            </form>
                        </div>
                    </div>

                    <div className="grid md:grid-cols-3 gap-6">
                        <Card>
                            <CardHeader>
                                <CardTitle className="text-red-600">System Management</CardTitle>
                                <CardDescription>Manage system-wide settings and configurations</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <p className="text-sm text-gray-600">
                                    Access system settings, user management, and platform configurations.
                                </p>
                            </CardContent>
                        </Card>

                        <Card>
                            <CardHeader>
                                <CardTitle className="text-blue-600">User Management</CardTitle>
                                <CardDescription>Manage all users across the platform</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <p className="text-sm text-gray-600">
                                    View, create, edit, and delete user accounts for all roles.
                                </p>
                            </CardContent>
                        </Card>

                        <Card>
                            <CardHeader>
                                <CardTitle className="text-green-600">Analytics</CardTitle>
                                <CardDescription>View platform analytics and reports</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <p className="text-sm text-gray-600">
                                    Access detailed analytics and reporting for the entire platform.
                                </p>
                            </CardContent>
                        </Card>
                    </div>

                    <div className="mt-8 bg-white rounded-lg shadow p-6">
                        <h2 className="text-xl font-semibold mb-4">Multi-Guard Authentication Status</h2>
                        <div className="grid md:grid-cols-3 gap-4 text-sm">
                            <div className="p-4 bg-red-50 rounded-lg">
                                <h3 className="font-semibold text-red-700">System Admin Session</h3>
                                <p className="text-red-600">✅ Active</p>
                                <p className="text-xs text-red-500 mt-1">Guard: system_admin</p>
                            </div>
                            <div className="p-4 bg-gray-50 rounded-lg">
                                <h3 className="font-semibold text-gray-700">Teacher Session</h3>
                                <p className="text-gray-600">❌ Not Active</p>
                                <p className="text-xs text-gray-500 mt-1">Guard: teacher</p>
                            </div>
                            <div className="p-4 bg-gray-50 rounded-lg">
                                <h3 className="font-semibold text-gray-700">Student Session</h3>
                                <p className="text-gray-600">❌ Not Active</p>
                                <p className="text-xs text-gray-500 mt-1">Guard: student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
