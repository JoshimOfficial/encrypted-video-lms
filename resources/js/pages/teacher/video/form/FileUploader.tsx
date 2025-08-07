import React, { useCallback, useState } from 'react';
import { useDropzone } from 'react-dropzone';
import { UploadCloud, X } from 'lucide-react';
import { Button } from '@/components/ui/button';

interface FileUploaderProps {
  value: File | null;
  onChange: (file: File | null) => void;
  accept?: string;
  maxSize?: number;
}

export const FileUploader: React.FC<FileUploaderProps> = ({
  value,
  onChange,
  accept = '*',
  maxSize = 10 * 1024 * 1024, // 10MB default
}) => {
  const [error, setError] = useState<string | null>(null);

  const onDrop = useCallback(
    (acceptedFiles: File[]) => {
      setError(null);
      const file = acceptedFiles[0];

      if (file.size > maxSize) {
        setError(`File is too large. Max size is ${maxSize / 1024 / 1024}MB.`);
        return;
      }

      onChange(file);
    },
    [maxSize, onChange]
  );

  const { getRootProps, getInputProps, isDragActive } = useDropzone({
    onDrop,
    accept: accept ? { [accept]: [] } : undefined,
    maxFiles: 1,
  });

  const removeFile = () => {
    onChange(null);
    setError(null);
  };

  return (
    <div className="space-y-2">
      <div
        {...getRootProps()}
        className={`border-2 border-dashed rounded-lg p-6 text-center cursor-pointer transition-colors ${
          isDragActive
            ? 'border-primary bg-primary/10'
            : 'border-muted-foreground/30 hover:border-muted-foreground/50'
        }`}
      >
        <input {...getInputProps()} />
        {value ? (
          <div className="flex items-center justify-center space-x-2">
            <span className="font-medium">{value.name}</span>
            <Button
              type="button"
              variant="ghost"
              size="sm"
              onClick={(e) => {
                e.stopPropagation();
                removeFile();
              }}
            >
              <X className="h-4 w-4" />
            </Button>
          </div>
        ) : (
          <div className="flex flex-col items-center justify-center space-y-2">
            <UploadCloud className="h-8 w-8 text-muted-foreground" />
            <div>
              <p className="font-medium">
                {isDragActive ? 'Drop the file here' : 'Click to upload or drag and drop'}
              </p>
              <p className="text-sm text-muted-foreground">
                {accept === '*' ? 'Any file type' : accept} (Max {maxSize / 1024 / 1024}MB)
              </p>
            </div>
          </div>
        )}
      </div>
      {error && <p className="text-sm font-medium text-destructive">{error}</p>}
    </div>
  );
};