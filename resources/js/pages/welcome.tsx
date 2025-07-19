import { Head, Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';

export default function Welcome() {
    return (
        <>
            <Head title="Welcome - Multi-Guard LMS" />
            <div className="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
                <div className="container mx-auto px-4 py-16">
                    <div className="text-center mb-12">
                        <h1 className="text-4xl font-bold text-gray-900 mb-4">
                            Multi-Guard Learning Management System
                        </h1>
                        <p className="text-xl text-gray-600 max-w-2xl mx-auto">
                            Welcome to our encrypted video LMS with separate authentication for System Admin, Teacher, and Student roles.
                            Each role has its own login portal and session management.
                        </p>
                    </div>

                    <div className="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                        {/* System Admin Card */}
                        <Card className="shadow-lg hover:shadow-xl transition-shadow">
                            <CardHeader className="text-center">
                                <div className="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg className="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <CardTitle className="text-2xl font-bold text-red-700">System Admin</CardTitle>
                                <CardDescription>
                                    Access system administration panel with full control over the platform
                                </CardDescription>
                            </CardHeader>
                            <CardContent className="text-center">
                                <p className="text-sm text-gray-600 mb-4">
                                    <strong>Test Credentials:</strong><br />
                                    Email: admin@gmail.com<br />
                                    Password: password
                                </p>
                                <Link href={route('system.login')}>
                                    <Button className="w-full bg-red-600 hover:bg-red-700">
                                        Login as Admin
                                    </Button>
                                </Link>
                            </CardContent>
                        </Card>

                        {/* Teacher Card */}
                        <Card className="shadow-lg hover:shadow-xl transition-shadow">
                            <CardHeader className="text-center">
                                <div className="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg className="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <CardTitle className="text-2xl font-bold text-blue-700">Teacher</CardTitle>
                                <CardDescription>
                                    Access teacher dashboard to manage courses and content
                                </CardDescription>
                            </CardHeader>
                            <CardContent className="text-center">
                                <p className="text-sm text-gray-600 mb-4">
                                    <strong>Test Credentials:</strong><br />
                                    Email: teacher@gmail.com<br />
                                    Password: password
                                </p>
                                <Link href={route('teacher.login')}>
                                    <Button className="w-full bg-blue-600 hover:bg-blue-700">
                                        Login as Teacher
                                    </Button>
                                </Link>
                            </CardContent>
                        </Card>

                        {/* Student Card */}
                        <Card className="shadow-lg hover:shadow-xl transition-shadow">
                            <CardHeader className="text-center">
                                <div className="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg className="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    </svg>
                                </div>
                                <CardTitle className="text-2xl font-bold text-green-700">Student</CardTitle>
                                <CardDescription>
                                    Access student dashboard to view courses and learning materials
                                </CardDescription>
                            </CardHeader>
                            <CardContent className="text-center">
                                <p className="text-sm text-gray-600 mb-4">
                                    <strong>Test Credentials:</strong><br />
                                    Email: student@gmail.com<br />
                                    Password: password
                                </p>
                                <Link href={route('student.login')}>
                                    <Button className="w-full bg-green-600 hover:bg-green-700">
                                        Login as Student
                                    </Button>
                                </Link>
                            </CardContent>
                        </Card>
                    </div>

                    <div className="mt-12 text-center">
                        <div className="bg-white rounded-lg shadow-md p-6 max-w-4xl mx-auto">
                            <h2 className="text-2xl font-bold text-gray-900 mb-4">Multi-Guard Features</h2>
                            <div className="grid md:grid-cols-2 gap-6 text-left">
                                <div>
                                    <h3 className="font-semibold text-gray-800 mb-2">✅ Separate Sessions</h3>
                                    <p className="text-gray-600 text-sm">
                                        Each role has its own session storage, allowing you to be logged in as multiple roles simultaneously in different browser tabs.
                                    </p>
                                </div>
                                <div>
                                    <h3 className="font-semibold text-gray-800 mb-2">✅ Role-Based Access</h3>
                                    <p className="text-gray-600 text-sm">
                                        Each role can only access their designated routes and features, with proper middleware protection.
                                    </p>
                                </div>
                                <div>
                                    <h3 className="font-semibold text-gray-800 mb-2">✅ Independent Authentication</h3>
                                    <p className="text-gray-600 text-sm">
                                        Separate login controllers and validation for each role, ensuring proper authentication flow.
                                    </p>
                                </div>
                                <div>
                                    <h3 className="font-semibold text-gray-800 mb-2">✅ Secure Guards</h3>
                                    <p className="text-gray-600 text-sm">
                                        Custom middleware ensures users can only access routes appropriate for their role type.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
