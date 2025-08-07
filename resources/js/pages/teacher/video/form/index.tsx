import React, { useState, useEffect } from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { Switch } from '@/components/ui/switch';
import { useToast } from '@/components/ui/use-toast';
import { FileUploader } from './FileUploader';
import  EditorFile  from './Editor';
import { ResourceUploader } from './ResourceUploader';

interface ResourceFile {
  id: string;
  file: File;
  type: 'image' | 'pdf';
  name: string;
  size: string;
}

interface VideoFormValues {
  title: string;
  description: string;
  videoFile: File | null;
  resourceFiles: ResourceFile[];
  courseId: string;
  batchId: string;
  visibilityType: 'now' | 'scheduled' | 'model';
  scheduledDate?: Date;
  scheduledTime?: string;
  modelVideoId?: string;
  isShareable: boolean;
  isEncrypted: boolean;
  status: 'draft' | 'published' | 'archived';
}

interface VideoFormProps {
  initialData?: VideoFormValues & { id?: string };
  courses: { id: string; name: string }[];
  batches: { id: string; name: string; courseId: string }[];
  modelVideos: { id: string; title: string; courseId: string; batchId: string }[];
  onSubmit: (data: VideoFormValues) => Promise<void>;
  isSubmitting: boolean;
}

export const VideoForm: React.FC<VideoFormProps> = ({
  initialData,
  courses,
  batches,
  modelVideos,
  onSubmit,
  isSubmitting,
}) => {
  const { toast } = useToast();
  const [filteredBatches, setFilteredBatches] = useState(batches);
  const [formData, setFormData] = useState<VideoFormValues>({
    title: initialData?.title || '',
    description: initialData?.description || '',
    videoFile: initialData?.videoFile || null,
    resourceFiles: initialData?.resourceFiles || [],
    courseId: initialData?.courseId || '',
    batchId: initialData?.batchId || '',
    visibilityType: initialData?.visibilityType || 'now',
    scheduledDate: initialData?.scheduledDate,
    scheduledTime: initialData?.scheduledTime || '12:00',
    modelVideoId: initialData?.modelVideoId || '',
    isShareable: initialData?.isShareable || false,
    isEncrypted: initialData?.isEncrypted || false,
    status: initialData?.status || 'draft',
  });

  useEffect(() => {
    if (formData.courseId) {
      const filtered = batches.filter((batch) => batch.courseId === formData.courseId);
      setFilteredBatches(filtered);
      if (filtered.length > 0 && !filtered.some(batch => batch.id === formData.batchId)) {
        setFormData(prev => ({ ...prev, batchId: filtered[0].id }));
      }
    } else {
      setFilteredBatches([]);
      setFormData(prev => ({ ...prev, batchId: '' }));
    }
  }, [formData.courseId, batches]);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    try {
      await onSubmit(formData);
      // Toast is now handled by the parent component
    } catch (error) {
      toast({
        title: 'Error',
        description: 'An error occurred while submitting the form',
        variant: 'destructive',
      });
    }
  };

  return (
    <div className="space-y-6">
      <form onSubmit={handleSubmit} className="space-y-8">
        <div className="grid grid-cols-1 gap-6 md:grid-cols-2">
          {/* Title */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Title</label>
            <Input
              placeholder="Enter video title"
              value={formData.title}
              onChange={(e) => setFormData(prev => ({ ...prev, title: e.target.value }))}
              className="mt-1"
            />
          </div>

          {/* Description */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Description</label>
            <EditorFile
              // value={formData.description}
              // onChange={(value: string) => setFormData(prev => ({ ...prev, description: value }))}
              // placeholder="Enter video description..."
            />
          </div>

          {/* Video Upload */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Video File</label>
            <FileUploader
              value={formData.videoFile}
              onChange={(file) => setFormData(prev => ({ ...prev, videoFile: file }))}
              accept="video/*"
              maxSize={500 * 1024 * 1024} // 500MB
            />
          </div>

          {/* Resource Files Upload */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Additional Resources</label>
            <p className="text-sm text-muted-foreground mb-2">
              Upload images and PDF files to accompany this video (optional)
            </p>
            <ResourceUploader
              value={formData.resourceFiles}
              onChange={(files) => setFormData(prev => ({ ...prev, resourceFiles: files }))}
              maxFiles={10}
              maxSize={10 * 1024 * 1024} // 10MB per file
            />
          </div>

          {/* Course Selection */}
          <div>
            <label className="text-sm font-medium">Course</label>
            <Select
              value={formData.courseId}
              onValueChange={(value: string) => setFormData(prev => ({ ...prev, courseId: value }))}
            >
              <SelectTrigger className="mt-1">
                <SelectValue placeholder="Select a course" />
              </SelectTrigger>
              <SelectContent>
                {courses.map((course) => (
                  <SelectItem key={course.id} value={course.id}>
                    {course.name}
                  </SelectItem>
                ))}
              </SelectContent>
            </Select>
          </div>

          {/* Batch Selection */}
          <div>
            <label className="text-sm font-medium">Batch</label>
            <Select
              value={formData.batchId}
              onValueChange={(value: string) => setFormData(prev => ({ ...prev, batchId: value }))}
              disabled={!formData.courseId}
            >
              <SelectTrigger className="mt-1">
                <SelectValue placeholder="Select a batch" />
              </SelectTrigger>
              <SelectContent>
                {filteredBatches.length > 0 ? (
                  filteredBatches.map((batch) => (
                    <SelectItem key={batch.id} value={batch.id}>
                      {batch.name}
                    </SelectItem>
                  ))
                ) : (
                  <SelectItem value="no-batches" disabled>
                    No batches available
                  </SelectItem>
                )}
              </SelectContent>
            </Select>
          </div>

          {/* Visibility Type */}
          <div>
            <label className="text-sm font-medium">Visibility</label>
            <Select
              value={formData.visibilityType}
              onValueChange={(value: 'now' | 'scheduled' | 'model') => 
                setFormData(prev => ({ ...prev, visibilityType: value }))
              }
            >
              <SelectTrigger className="mt-1">
                <SelectValue placeholder="Select visibility type" />
              </SelectTrigger>
              <SelectContent>
                <SelectItem value="now">Visible Now</SelectItem>
                <SelectItem value="scheduled">Scheduled Time</SelectItem>
                <SelectItem value="model">After Another Video</SelectItem>
              </SelectContent>
            </Select>
          </div>

          {/* Scheduled Date and Time - Show only when visibility type is 'scheduled' */}
          {formData.visibilityType === 'scheduled' && (
            <>
              <div>
                <label className="text-sm font-medium">Scheduled Date</label>
                <Input
                  type="date"
                  value={formData.scheduledDate ? new Date(formData.scheduledDate).toISOString().split('T')[0] : ''}
                  onChange={(e) => {
                    const date = e.target.value ? new Date(e.target.value) : undefined;
                    setFormData(prev => ({ ...prev, scheduledDate: date }))
                  }}
                  min={new Date().toISOString().split('T')[0]}
                  className="mt-1"
                />
              </div>
              <div>
                <label className="text-sm font-medium">Scheduled Time</label>
                <Input
                  type="time"
                  value={formData.scheduledTime || ''}
                  onChange={(e) => setFormData(prev => ({ ...prev, scheduledTime: e.target.value }))}
                  className="mt-1"
                />
              </div>
            </>
          )}

          {/* Model Video Selection - Show only when visibility type is 'model' */}
          {formData.visibilityType === 'model' && (
            <div className="md:col-span-2">
              <label className="text-sm font-medium">Select Video to Show After</label>
              <Select
                value={formData.modelVideoId}
                onValueChange={(value: string) => setFormData(prev => ({ ...prev, modelVideoId: value }))}
              >
                <SelectTrigger className="mt-1">
                  <SelectValue placeholder="Search and select a video" />
                </SelectTrigger>
                <SelectContent>
                  {modelVideos
                    .filter(video => 
                      // Filter videos by same course and batch if course and batch are selected
                      (!formData.courseId || video.courseId === formData.courseId) &&
                      (!formData.batchId || video.batchId === formData.batchId)
                    )
                    .map((video) => (
                      <SelectItem key={video.id} value={video.id}>
                        {video.title}
                      </SelectItem>
                    ))}
                </SelectContent>
              </Select>
              {formData.modelVideoId && (
                <p className="text-sm text-muted-foreground mt-1">
                  This video will be visible after the selected video is watched
                </p>
              )}
            </div>
          )}

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

          {/* Security Type - Radio Selection */}
          <div className="md:col-span-2">
            <label className="text-sm font-medium">Security Type</label>
            <div className="mt-2 space-y-3">
              <div className="flex items-center space-x-2">
                <input
                  type="radio"
                  id="shareable"
                  name="securityType"
                  value="shareable"
                  checked={formData.isShareable && !formData.isEncrypted}
                  onChange={() => setFormData(prev => ({ 
                    ...prev, 
                    isShareable: true, 
                    isEncrypted: false 
                  }))}
                  className="h-4 w-4 text-primary border-gray-300 focus:ring-primary"
                />
                <label htmlFor="shareable" className="text-sm font-medium">
                  Shareable
                </label>
                <span className="text-sm text-muted-foreground">
                  - Allow this video to be shared with others
                </span>
              </div>
              <div className="flex items-center space-x-2">
                <input
                  type="radio"
                  id="encrypted"
                  name="securityType"
                  value="encrypted"
                  checked={formData.isEncrypted && !formData.isShareable}
                  onChange={() => setFormData(prev => ({ 
                    ...prev, 
                    isShareable: false, 
                    isEncrypted: true 
                  }))}
                  className="h-4 w-4 text-primary border-gray-300 focus:ring-primary"
                />
                <label htmlFor="encrypted" className="text-sm font-medium">
                  Encrypted
                </label>
                <span className="text-sm text-muted-foreground">
                  - Enable encryption for this video
                </span>
              </div>
            </div>
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
              <>{initialData?.id ? 'Update Video' : 'Create Video'}</>
            )}
          </Button>
        </div>
      </form>
    </div>
  );
};