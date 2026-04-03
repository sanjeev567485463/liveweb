<?php

namespace App\Http\Controllers\MainTraits;

use App\Mixins\BunnyCDN\BunnyVideoStream;
use Illuminate\Support\Facades\Storage;

trait FilesTraits
{
    public $allowedFileMimeTypes = [
        'application/pdf',
        'image/jpeg',
        'image/png',
        'video/mp4',
        'video/x-matroska',
    ];

    public $allowedFileExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'mp4', 'mkv'];

    /**
     * @param $file \Illuminate\Http\UploadedFile
     * @param $destination string
     * @param $fileName string|null
     * @param $userId integer|null
     * @param $storage string|null
     *
     * @return string|null
     * */
    public function uploadFile($file, $destination, $fileName = null, $userId = null, $storage = "public"): string|null
    {
        $mimeType = $file->getMimeType();
        $fileOriginalExtension = strtolower($file->getClientOriginalExtension());

        if (!$this->isUploadFileAllowed($mimeType, $fileOriginalExtension)) {
            return null;
        }

        $originalName = $file->getClientOriginalName();
        $name = $fileName ? $fileName . '.' . $fileOriginalExtension : $originalName;

        if ($storage == "bunny") {
            return $this->uploadToBunny($file, $name);
        } else {
            $storage = Storage::disk($storage);

            $path = (!empty($userId) ? '/' . $userId : '') . '/' . $destination;

            if (!$storage->exists($path)) {
                $storage->makeDirectory($path);
            }

            $storage->putFileAs($path, $file, $name);

            $url = $path . '/' . $name;

            return $storage->url($url);
        }
    }

    private function isUploadFileAllowed(?string $mimeType, ?string $extension): bool
    {
        $mimeType = strtolower((string) $mimeType);
        $extension = strtolower((string) $extension);

        return in_array($mimeType, $this->allowedFileMimeTypes, true)
            && in_array($extension, $this->allowedFileExtensions, true);
    }

    public function removeFile($path, $storage = "public")
    {
        $storage = Storage::disk($storage);

        $path = str_replace('/store', '', $path);

        if ($storage->exists($path)) {
            $storage->delete($path);
        }
    }

    private function uploadToBunny($file, $name)
    {
        try {
            $bunnyVideoStream = new BunnyVideoStream();

            $collectionId = $bunnyVideoStream->createCollection($name);

            if ($collectionId) {

                $videoUrl = $bunnyVideoStream->uploadVideo($name, $collectionId, $file);

                return $videoUrl;
            }
        } catch (\Exception $ex) {
            //dd($ex);
        }

        return null;
    }

}
