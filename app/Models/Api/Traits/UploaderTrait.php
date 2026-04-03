<?php

namespace App\Models\Api\Traits;

trait UploaderTrait
{
    protected array $allowedFileMimeTypes = [
        'application/pdf',
        'image/jpeg',
        'image/png',
        'video/mp4',
        'video/x-matroska',
    ];

    protected array $allowedFileExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'mp4', 'mkv'];

    public function storage( $file)
    {
        if (!$file ) {
           return null;
        }

        $mimeType = strtolower((string) $file->getMimeType());
        $extension = strtolower((string) $file->getClientOriginalExtension());

        $isAllowed = in_array($mimeType, $this->allowedFileMimeTypes, true)
            && in_array($extension, $this->allowedFileExtensions, true);

        if (!$isAllowed) {
            return null;
        }

        $fileName = $file->getClientOriginalName();
        $path = apiAuth()->id;
        $storage_path = $file->storeAs($path, $fileName);
        return 'store/' . $storage_path;
    }
}
