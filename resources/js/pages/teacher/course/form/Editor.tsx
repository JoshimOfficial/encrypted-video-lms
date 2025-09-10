import React from 'react';
import { Editor } from '@tinymce/tinymce-react';

interface EditorProps {
  value?: string;
  onChange?: (value: string) => void;
  placeholder?: string;
}

export default function EditorFile({ value, onChange, placeholder }: EditorProps) {
  return (
    <Editor
      apiKey='n1mdrr476r4aimzr7smy3ibmjwfljlv9s59ifi9dqozrlf5m'
      value={value || ''}
      onEditorChange={(content) => onChange?.(content)}
      init={{
        plugins: [
          // Core editing features
          'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
          // Your account includes a free trial of TinyMCE premium features
          // Try the most popular premium features until Aug 20, 2025:
          'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request: any, respondWith: any) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
        uploadcare_public_key: '2a26fefe44804a64f724',
        placeholder: placeholder || 'Enter course description...',
        height: 300,
        menubar: false,
        branding: false,
        statusbar: false,
      }}
    />
  );
}
