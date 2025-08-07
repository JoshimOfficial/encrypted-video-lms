import React, { useState } from 'react';
import { VideoForm } from './form';
import { useToast } from '@/components/ui/use-toast';
import TeacherLayout from "@/layouts/teacher-layout";

const CreateVideoPage = () => {
  const { toast } = useToast();
  const [isSubmitting, setIsSubmitting] = useState(false);

  // Mock data - replace with actual API calls
  const courses = [
    { id: '1', name: 'Introduction to React' },
    { id: '2', name: 'Advanced TypeScript' },
    { id: '3', name: 'Fullstack Development' },
  ];

  const batches = [
    { id: '1', name: 'Batch 1', courseId: '1' },
    { id: '2', name: 'Batch 2', courseId: '1' },
    { id: '3', name: 'Batch A', courseId: '2' },
    { id: '4', name: 'Batch B', courseId: '2' },
    { id: '5', name: 'Morning Batch', courseId: '3' },
    { id: '6', name: 'Evening Batch', courseId: '3' },
  ];

  const modelVideos = [
    { id: '1', title: 'Getting Started with Components', courseId: '1', batchId: '1' },
    { id: '2', title: 'State Management Basics', courseId: '1', batchId: '2' },
    { id: '3', title: 'Advanced Hooks Patterns', courseId: '2', batchId: '3' },
  ];

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
        description: 'Video created successfully!',
      });
    } catch (error) {
      console.error('Error submitting form:', error);
      // Show error toast
      toast({
        title: 'Error',
        description: 'Failed to create video. Please try again.',
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
          <h1 className="text-2xl font-bold tracking-tight">Create New Video</h1>
        </div>
        <div className="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
          <VideoForm
            courses={courses}
            batches={batches}
            modelVideos={modelVideos}
            onSubmit={handleSubmit}
            isSubmitting={isSubmitting}
          />
        </div>
      </div>
    </TeacherLayout>
  );
};

export default CreateVideoPage;