import { Head, Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import TeacherLayout from '@/layouts/teacher-layout';

export default function TeacherDashboard() {
    return (
        <>
        <TeacherLayout>
            <Head title="Teacher Dashboard" />
            <div className="min-h-screen bg-gray-50">
                <div className="container mx-auto px-4 py-8">
                    <div className="flex justify-between items-center mb-8">
                        <div>
                            <h1 className="text-3xl font-bold text-gray-900">Teacher Dashboard</h1>
                            <p className="text-gray-600 mt-2">Welcome to the teacher panel</p>
                        </div>
                        <div className="flex space-x-4">
                            <Link href={route('home')}>
                                <Button variant="outline">Back to Home</Button>
                            </Link>
                            <form method="POST" action={route('teacher.logout')} className="inline">
                                <Button type="submit" variant="destructive">Logout</Button>
                            </form>
                        </div>
                    </div>

                    <div className="grid md:grid-cols-3 gap-6">
                        <Card>
                            <CardHeader>
                                <CardTitle className="text-blue-600">Course Management</CardTitle>
                                <CardDescription>Create and manage your courses</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <p className="text-sm text-gray-600">
                                    Create new courses, upload content, and manage course materials.
                                </p>
                            </CardContent>
                        </Card>

                        <Card>
                            <CardHeader>
                                <CardTitle className="text-green-600">Student Progress</CardTitle>
                                <CardDescription>Track student performance and progress</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <p className="text-sm text-gray-600">
                                    View student progress, grades, and engagement analytics.
                                </p>
                            </CardContent>
                        </Card>

                        <Card>
                            <CardHeader>
                                <CardTitle className="text-purple-600">Content Library</CardTitle>
                                <CardDescription>Manage your teaching resources</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <p className="text-sm text-gray-600">
                                    Organize and share educational content with your students.
                                </p>
                            </CardContent>
                        </Card>
                    </div>

                    <div className="mt-8 bg-white rounded-lg shadow p-6">
                        <h2 className="text-xl font-semibold mb-4">Multi-Guard Authentication Status</h2>
                        <div className="grid md:grid-cols-3 gap-4 text-sm">
                            <div className="p-4 bg-gray-50 rounded-lg">
                                <h3 className="font-semibold text-gray-700">System Admin Session</h3>
                                <p className="text-gray-600">❌ Not Active</p>
                                <p className="text-xs text-gray-500 mt-1">Guard: system_admin</p>
                            </div>
                            <div className="p-4 bg-blue-50 rounded-lg">
                                <h3 className="font-semibold text-blue-700">Teacher Session</h3>
                                <p className="text-blue-600">✅ Active</p>
                                <p className="text-xs text-blue-500 mt-1">Guard: teacher</p>
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
        </TeacherLayout>
        </>
    );
}
