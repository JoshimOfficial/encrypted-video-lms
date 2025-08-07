import React, { useState, useEffect } from 'react';
import { VideoForm } from './form';
import { useToast } from '@/components/ui/use-toast';
import TeacherLayout from "@/layouts/teacher-layout";
import { useParams } from 'react-router';

const EditVideoPage = () => {
  const { id } = useParams();
  const { toast } = useToast();
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [initialData, setInitialData] = useState<any>(null);

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

  useEffect(() => {
    // Simulate fetching video data
    const fetchVideo = async () => {
      try {
        // Simulate API call
        await new Promise((resolve) => setTimeout(resolve, 500));
        // Mock data - replace with actual API response
        setInitialData({
          id,
          title: 'Introduction to React Hooks',
          description: '<p>Learn how to use React Hooks in your applications.</p>',
          videoFile: new File([''], 'video.mp4', { type: 'video/mp4' }),
          resourceFiles: [
            {
              id: '1',
              file: new File([''], 'slide1.pdf', { type: 'application/pdf' }),
              type: 'pdf' as const,
              name: 'slide1.pdf',
              size: '2.5 MB'
            },
            {
              id: '2',
              file: new File([''], 'diagram.png', { type: 'image/png' }),
              type: 'image' as const,
              name: 'diagram.png',
              size: '1.2 MB'
            }
          ],
          courseId: '1',
          batchId: '1',
          visibilityType: 'scheduled',
          scheduledDate: new Date(Date.now() + 86400000), // Tomorrow
          scheduledTime: '14:30',
          modelVideoId: '',
          isShareable: true,
          isEncrypted: false,
          status: 'published',
        });
      } catch (error) {
        toast({
          title: 'Error',
          description: 'Failed to load video data',
          variant: 'destructive',
        });
      }
    };

    if (id) {
      fetchVideo();
    }
  }, [id, toast]);

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
        description: 'Video updated successfully!',
      });
    } catch (error) {
      console.error('Error submitting form:', error);
      // Show error toast
      toast({
        title: 'Error',
        description: 'Failed to update video. Please try again.',
        variant: 'destructive',
      });
    } finally {
      setIsSubmitting(false);
    }
  };

  if (!initialData) {
    return (
      <TeacherLayout>
        <div className="container mx-auto py-8">
          <div className="flex items-center justify-center h-64">
            <p>Loading video data...</p>
          </div>
        </div>
      </TeacherLayout>
    );
  }

  return (
    <TeacherLayout>
      <div className="container mx-auto py-8">
        <div className="flex items-center justify-between mb-6">
          <h1 className="text-2xl font-bold tracking-tight">Edit Video</h1>
        </div>
        <div className="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
          <VideoForm
            initialData={initialData}
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

export default EditVideoPage;