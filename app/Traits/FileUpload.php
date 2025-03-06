<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait FileUpload
{
    /**
     * @param UploadedFile $file
     * @param string $directory
     * @return string
     */
    public function uploadFile(UploadedFile $file, string $directory = 'uploads'): string
    {
        $file_name = uniqid('educore_', true) . '.' . $file->getClientOriginalExtension();

        // move the file to storage
        $file->move(public_path($directory), $file_name);

        return '/' . $directory . '/' . $file_name;
    }
}
