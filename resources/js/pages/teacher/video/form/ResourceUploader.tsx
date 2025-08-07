import React, { useState, useRef } from 'react';
import { Button } from '@/components/ui/button';
import { Upload, X, FileText, Image, File } from 'lucide-react';

interface ResourceFile {
  id: string;
  file: File;
  type: 'image' | 'pdf';
  name: string;
  size: string;
}

interface ResourceUploaderProps {
  value: ResourceFile[];
  onChange: (files: ResourceFile[]) => void;
  maxFiles?: number;
  maxSize?: number; // in bytes
}

export const ResourceUploader: React.FC<ResourceUploaderProps> = ({
  value,
  onChange,
  maxFiles = 10,
  maxSize = 10 * 1024 * 1024, // 10MB default
}) => {
  const [dragActive, setDragActive] = useState(false);
  const [error, setError] = useState<string>('');
  const fileInputRef = useRef<HTMLInputElement>(null);

  const formatFileSize = (bytes: number): string => {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
  };

  const getFileType = (file: File): 'image' | 'pdf' | null => {
    if (file.type.startsWith('image/')) return 'image';
    if (file.type === 'application/pdf') return 'pdf';
    return null;
  };

  const validateFile = (file: File): string | null => {
    const fileType = getFileType(file);
    if (!fileType) {
      return 'Only image and PDF files are allowed.';
    }
    
    if (file.size > maxSize) {
      return `File size must be less than ${formatFileSize(maxSize)}.`;
    }

    if (value.length >= maxFiles) {
      return `Maximum ${maxFiles} files allowed.`;
    }

    return null;
  };

  const handleFiles = (files: FileList) => {
    setError('');
    const newFiles: ResourceFile[] = [];

    Array.from(files).forEach((file) => {
      const validationError = validateFile(file);
      if (validationError) {
        setError(validationError);
        return;
      }

      const fileType = getFileType(file);
      if (fileType) {
        const resourceFile: ResourceFile = {
          id: Math.random().toString(36).substr(2, 9),
          file,
          type: fileType,
          name: file.name,
          size: formatFileSize(file.size),
        };
        newFiles.push(resourceFile);
      }
    });

    if (newFiles.length > 0) {
      onChange([...value, ...newFiles]);
    }
  };

  const handleDrop = (e: React.DragEvent) => {
    e.preventDefault();
    setDragActive(false);
    handleFiles(e.dataTransfer.files);
  };

  const handleDragOver = (e: React.DragEvent) => {
    e.preventDefault();
    setDragActive(true);
  };

  const handleDragLeave = (e: React.DragEvent) => {
    e.preventDefault();
    setDragActive(false);
  };

  const handleFileInput = (e: React.ChangeEvent<HTMLInputElement>) => {
    if (e.target.files) {
      handleFiles(e.target.files);
    }
  };

  const removeFile = (id: string) => {
    onChange(value.filter(file => file.id !== id));
  };

  const getFileIcon = (type: 'image' | 'pdf') => {
    return type === 'image' ? <Image className="h-4 w-4" /> : <FileText className="h-4 w-4" />;
  };

  return (
    <div className="space-y-4">
      {/* Upload Area */}
      <div
        className={`border-2 border-dashed rounded-lg p-6 text-center transition-colors ${
          dragActive
            ? 'border-primary bg-primary/5'
            : 'border-gray-300 hover:border-gray-400'
        }`}
        onDrop={handleDrop}
        onDragOver={handleDragOver}
        onDragLeave={handleDragLeave}
      >
        <Upload className="mx-auto h-8 w-8 text-gray-400 mb-2" />
        <p className="text-sm text-gray-600 mb-2">
          Drag and drop image or PDF files here, or{' '}
          <button
            type="button"
            onClick={() => fileInputRef.current?.click()}
            className="text-primary hover:text-primary/80 underline"
          >
            browse
          </button>
        </p>
        <p className="text-xs text-gray-500">
          Maximum {maxFiles} files, {formatFileSize(maxSize)} each
        </p>
        <input
          ref={fileInputRef}
          type="file"
          multiple
          accept="image/*,.pdf"
          onChange={handleFileInput}
          className="hidden"
        />
      </div>

      {/* Error Message */}
      {error && (
        <div className="text-sm text-red-600 bg-red-50 p-2 rounded">
          {error}
        </div>
      )}

      {/* File List */}
      {value.length > 0 && (
        <div className="space-y-2">
          <h4 className="text-sm font-medium">Uploaded Resources ({value.length}/{maxFiles})</h4>
          <div className="space-y-2">
            {value.map((file) => (
              <div
                key={file.id}
                className="flex items-center justify-between p-3 bg-gray-50 rounded-lg"
              >
                <div className="flex items-center space-x-3">
                  {getFileIcon(file.type)}
                  <div>
                    <p className="text-sm font-medium">{file.name}</p>
                    <p className="text-xs text-gray-500">{file.size}</p>
                  </div>
                </div>
                <Button
                  type="button"
                  variant="ghost"
                  size="sm"
                  onClick={() => removeFile(file.id)}
                  className="text-red-600 hover:text-red-700 hover:bg-red-50"
                >
                  <X className="h-4 w-4" />
                </Button>
              </div>
            ))}
          </div>
        </div>
      )}
    </div>
  );
}; 