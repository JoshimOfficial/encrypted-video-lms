import { Head, useForm } from '@inertiajs/react';
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
    return (
        <AuthLayout title="Continue with your account" description="Enter your email and password below to log in">
            <div>
                <Head title="Log in" />
                <Button className='py-6 cursor-pointer w-full font-bold'>
                    <Link href={route('loginRequestWithType',"student")} className='flex gap-2'>
                        <img src="/icons/google_white.png" alt="google" className='w-5 h-5' />
                        <span>Continue as a Student</span>
                    </Link>
                </Button>
                <p className='py-2 text-center'>or</p>
                <Button className='py-6 cursor-pointer w-full font-bold'>
                    <Link href={route('loginRequestWithType',"teacher")} className='flex gap-2'>
                        <img src="/icons/google_white.png" alt="google" className='w-5 h-5' />
                        <span>Continue as a Teacher</span>
                    </Link>
                </Button>

            </div>
        </AuthLayout>
    );
}
