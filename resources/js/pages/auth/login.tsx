import { Head, useForm } from '@inertiajs/react';
import { useGoogleLogin } from '@react-oauth/google';
import { LoaderCircle } from 'lucide-react';
import { FormEventHandler } from 'react';

import { Link } from '@inertiajs/react';
import AuthLayout from '@/layouts/auth-layout';
import { Button } from "@/components/ui/button"

type LoginForm = {
    email: string;
    password: string;
    remember: boolean;
};

interface LoginProps {
    status?: string;
    canResetPassword: boolean;
}

export default function Login({ status, canResetPassword }: LoginProps) {
    const { data, setData, post, processing, errors, reset } = useForm<Required<LoginForm>>({
        email: '',
        password: '',
        remember: false,
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    const loginStudent = useGoogleLogin({
        onSuccess: async (tokenResponse) => {
            try {
                const res = await fetch('https://www.googleapis.com/oauth2/v3/userinfo', {
                    headers: {
                        Authorization: `Bearer ${tokenResponse.access_token}`,
                    },
                });
                const profile = await res.json();
                console.log('student login success', { tokenResponse, profile });
            } catch (error) {
                console.error('student login userinfo error', error);
            }
        },
        onError: (errorResponse) => {
            console.error('student login error', errorResponse);
        },
    });

    const loginTeacher = useGoogleLogin({
        onSuccess: async (tokenResponse) => {
            try {
                const res = await fetch('https://www.googleapis.com/oauth2/v3/userinfo', {
                    headers: {
                        Authorization: `Bearer ${tokenResponse.access_token}`,
                    },
                });
                const profile = await res.json();
                console.log('teacher login success', { tokenResponse, profile });
            } catch (error) {
                console.error('teacher login userinfo error', error);
            }
        },
        onError: (errorResponse) => {
            console.error('teacher login error', errorResponse);
        },
    });
    return (
        <AuthLayout title="Continue with your account" description="Enter your email and password below to log in">
            <div>
                <Head title="Log in" />
                <Button className='py-6 cursor-pointer w-full font-bold' onClick={() => loginStudent()}>
                    <div className='flex gap-2 items-center justify-center w-full'>
                        <img src="/icons/google_white.png" alt="google" className='w-5 h-5' />
                        <span>Continue as a Student</span>
                    </div>
                </Button>
                <p className='py-2 text-center'>or</p>
                <Button className='py-6 cursor-pointer w-full font-bold' onClick={() => loginTeacher()}>
                    <div className='flex gap-2 items-center justify-center w-full'>
                        <img src="/icons/google_white.png" alt="google" className='w-5 h-5' />
                        <span>Continue as a Teacher</span>
                    </div>
                </Button>
            </div>
        </AuthLayout>
    );
}
