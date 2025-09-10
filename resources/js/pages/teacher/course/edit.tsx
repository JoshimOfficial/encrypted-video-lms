import React, { useState, useEffect } from 'react';
import { CourseForm } from './form';
import { useToast } from '@/components/ui/use-toast';
import TeacherLayout from "@/layouts/teacher-layout";
import { useParams } from 'react-router';

const EditCoursePage = () => {
  const { id } = useParams();
  const { toast } = useToast();
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [initialData, setInitialData] = useState<any>(null);

  useEffect(() => {
    // Simulate fetching course data
    const fetchCourse = async () => {
      try {
        // Simulate API call
        await new Promise((resolve) => setTimeout(resolve, 500));
        // Mock data - replace with actual API response
        setInitialData({
          id,
          name: 'Advanced Mathematics',
          slug: 'advanced-mathematics',
          description: '<p>Comprehensive course covering advanced mathematical concepts including calculus, linear algebra, and differential equations.</p><p>This course is designed for students who want to master advanced mathematical principles and apply them in real-world scenarios.</p>',
          price: 299.99,
          timeDuration: '6 months',
          startDate: '2024-02-01T00:00:00Z',
          status: 'published',
        });
      } catch (error) {
        toast({
          title: 'Error',
          description: 'Failed to load course data',
          variant: 'destructive',
        });
      }
    };

    if (id) {
      fetchCourse();
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
        description: 'Course updated successfully!',
      });
    } catch (error) {
      console.error('Error submitting form:', error);
      // Show error toast
      toast({
        title: 'Error',
        description: 'Failed to update course. Please try again.',
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
            <p>Loading course data...</p>
          </div>
        </div>
      </TeacherLayout>
    );
  }

  return (
    <TeacherLayout>
      <div className="container mx-auto py-8">
        <div className="flex items-center justify-between mb-6">
          <h1 className="text-2xl font-bold tracking-tight">Edit Course</h1>
        </div>
        <div className="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
          <CourseForm
            initialData={initialData}
            onSubmit={handleSubmit}
            isSubmitting={isSubmitting}
          />
        </div>
      </div>
    </TeacherLayout>
  );
};

export default EditCoursePage;
