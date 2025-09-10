import React, { useState } from 'react';
import { CourseForm } from './form';
import { useToast } from '@/components/ui/use-toast';
import TeacherLayout from "@/layouts/teacher-layout";

const CreateCoursePage = () => {
  const { toast } = useToast();
  const [isSubmitting, setIsSubmitting] = useState(false);

  const handleSubmit = async (data: any) => {
    setIsSubmitting(true);
    try {
      // Simulate API call
      await new Promise((resolve) => setTimeout(resolve, 1500));
      console.log('Form submitted:', data);
      // Add your API call here
      
      // Show success toast
      toast({
        title: 'Success',
        description: 'Course created successfully!',
      });
    } catch (error) {
      console.error('Error submitting form:', error);
      // Show error toast
      toast({
        title: 'Error',
        description: 'Failed to create course. Please try again.',
        variant: 'destructive',
      });
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <TeacherLayout>
      <div className="container mx-auto py-8">
        <div className="flex items-center justify-between mb-6">
          <h1 className="text-2xl font-bold tracking-tight">Create New Course</h1>
        </div>
        <div className="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
          <CourseForm
            onSubmit={handleSubmit}
            isSubmitting={isSubmitting}
          />
        </div>
      </div>
    </TeacherLayout>
  );
};

export default CreateCoursePage;
