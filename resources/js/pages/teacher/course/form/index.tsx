import React, { useState, useEffect } from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { useToast } from '@/components/ui/use-toast';
import EditorFile from './Editor';

interface CourseFormValues {
  name: string;
  slug: string;
  description: string;
  price: number;
  timeDuration: string;
  startDate: string;
  status: 'draft' | 'published' | 'archived';
}

interface CourseFormProps {
  initialData?: CourseFormValues & { id?: string };
  onSubmit: (data: CourseFormValues) => Promise<void>;
  isSubmitting: boolean;
}

export const CourseForm: React.FC<CourseFormProps> = ({
  initialData,
  onSubmit,
  isSubmitting,
}) => {
  const { toast } = useToast();
  const [formData, setFormData] = useState<CourseFormValues>({
    name: initialData?.name || '',
    slug: initialData?.slug || '',
    description: initialData?.description || '',
    price: initialData?.price || 0,
    timeDuration: initialData?.timeDuration || '',
    startDate: initialData?.startDate || '',
    status: initialData?.status || 'draft',
  });

  // Auto-generate slug from name
  useEffect(() => {
    if (formData.name && !initialData?.slug) {
      const slug = formData.name
        .toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
        .replace(/\s+/g, '-') // Replace spaces with hyphens
        .replace(/-+/g, '-') // Replace multiple hyphens with single hyphen
        .trim();
      setFormData(prev => ({ ...prev, slug }));
    }
  }, [formData.name, initialData?.slug]);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    
    // Validation
    if (!formData.name.trim()) {
      toast({
        title: 'Error',
        description: 'Course name is required',
        variant: 'destructive',
      });
      return;
    }

    if (!formData.slug.trim()) {
      toast({
        title: 'Error',
        description: 'Course slug is required',
        variant: 'destructive',
      });
      return;
    }

    if (formData.price < 0) {
      toast({
        title: 'Error',
        description: 'Price cannot be negative',
        variant: 'destructive',
      });
      return;
    }

    if (!formData.timeDuration.trim()) {
      toast({
        title: 'Error',
        description: 'Time duration is required',
        variant: 'destructive',
      });
      return;
    }

    if (!formData.startDate) {
      toast({
        title: 'Error',
        description: 'Start date is required',
        variant: 'destructive',
      });
      return;
    }

    try {
      await onSubmit(formData);
    } catch (error) {
      toast({
        title: 'Error',
        description: 'An error occurred while submitting the form',
        variant: 'destructive',
      });
    }
  };

  const timeDurationOptions = [
    '1 week',
    '2 weeks',
    '1 month',
    '2 months',
    '3 months',
    '4 months',
    '5 months',
    '6 months',
    '7 months',
    '8 months',
    '9 months',
    '10 months',
    '11 months',
    '12 months',
    '14 months',
    '16 months',
    '18 months',
    '20 hours',
    '40 hours',
    '60 hours',
    '80 hours',
    '100 hours',
    '120 hours',
  ];

  return (
    <div className="space-y-6">
      <form onSubmit={handleSubmit} className="space-y-8">
        <div className="grid grid-cols-1 gap-6 md:grid-cols-2">
          {/* Course Name */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Course Name *</label>
            <Input
              placeholder="Enter course name"
              value={formData.name}
              onChange={(e) => setFormData(prev => ({ ...prev, name: e.target.value }))}
              className="mt-1"
              required
            />
          </div>

          {/* Slug */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Slug *</label>
            <Input
              placeholder="course-slug"
              value={formData.slug}
              onChange={(e) => setFormData(prev => ({ ...prev, slug: e.target.value }))}
              className="mt-1"
              required
            />
            <p className="text-xs text-muted-foreground mt-1">
              URL-friendly version of the course name (auto-generated from name)
            </p>
          </div>

          {/* Description */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Description *</label>
            <EditorFile
              value={formData.description}
              onChange={(value: string) => setFormData(prev => ({ ...prev, description: value }))}
              placeholder="Enter course description..."
            />
          </div>

          {/* Price */}
          <div>
            <label className="text-sm font-medium">Price ($) *</label>
            <Input
              type="number"
              placeholder="0.00"
              value={formData.price}
              onChange={(e) => setFormData(prev => ({ ...prev, price: parseFloat(e.target.value) || 0 }))}
              className="mt-1"
              min="0"
              step="0.01"
              required
            />
          </div>

          {/* Time Duration */}
          <div>
            <label className="text-sm font-medium">Time Duration *</label>
            <Select
              value={formData.timeDuration}
              onValueChange={(value: string) => setFormData(prev => ({ ...prev, timeDuration: value }))}
            >
              <SelectTrigger className="mt-1">
                <SelectValue placeholder="Select duration" />
              </SelectTrigger>
              <SelectContent>
                {timeDurationOptions.map((duration) => (
                  <SelectItem key={duration} value={duration}>
                    {duration}
                  </SelectItem>
                ))}
              </SelectContent>
            </Select>
          </div>

          {/* Start Date */}
          <div>
            <label className="text-sm font-medium">Start Date *</label>
            <Input
              type="date"
              value={formData.startDate ? new Date(formData.startDate).toISOString().split('T')[0] : ''}
              onChange={(e) => {
                const date = e.target.value ? new Date(e.target.value).toISOString() : '';
                setFormData(prev => ({ ...prev, startDate: date }));
              }}
              min={new Date().toISOString().split('T')[0]}
              className="mt-1"
              required
            />
          </div>

          {/* Status */}
          <div>
            <label className="text-sm font-medium">Status</label>
            <Select
              value={formData.status}
              onValueChange={(value: 'draft' | 'published' | 'archived') => 
                setFormData(prev => ({ ...prev, status: value }))
              }
            >
              <SelectTrigger className="mt-1">
                <SelectValue placeholder="Select status" />
              </SelectTrigger>
              <SelectContent>
                <SelectItem value="draft">Draft</SelectItem>
                <SelectItem value="published">Published</SelectItem>
                <SelectItem value="archived">Archived</SelectItem>
              </SelectContent>
            </Select>
          </div>
        </div>

        <div className="flex justify-end gap-4">
          <Button type="button" variant="outline">
            Cancel
          </Button>
          <Button type="submit" disabled={isSubmitting}>
            {isSubmitting ? (
              <>
                <svg
                  className="mr-2 h-4 w-4 animate-spin"
                  viewBox="0 0 24 24"
                >
                  <circle
                    className="opacity-25"
                    cx="12"
                    cy="12"
                    r="10"
                    stroke="currentColor"
                    strokeWidth="4"
                  ></circle>
                  <path
                    className="opacity-75"
                    fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                  ></path>
                </svg>
                {initialData?.id ? 'Updating...' : 'Creating...'}
              </>
            ) : (
              <>{initialData?.id ? 'Update Course' : 'Create Course'}</>
            )}
          </Button>
        </div>
      </form>
    </div>
  );
};
