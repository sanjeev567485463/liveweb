<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiResponseBuilderTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ApiResponseBuilderTrait;

    protected array $allowedFileMimeTypes = [
        'application/pdf',
        'image/jpeg',
        'image/png',
        'video/mp4',
        'video/x-matroska',
    ];

    protected array $allowedFileExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'mp4', 'mkv'];

    public static $auth;


    public function uploadFile($file, $destination, $fileName = null, $userId = null, $test = false): string
    {
        $this->ensureAllowedUpload($file);

        $storage = Storage::disk('public');

        $path = (!empty($userId) ? '/' . $userId : '') . '/' . $destination;

        if (!$storage->exists($path)) {
            $storage->makeDirectory($path);
        }

        $originalName = $file->getClientOriginalName();

        $name = $fileName ? $fileName . '.' . $file->getClientOriginalExtension() : $originalName;

        $path = $path . '/' . $name;

        $storage->put($path, file_get_contents($file));

        return $storage->url($path);
    }

    protected function ensureAllowedUpload($file): void
    {
        $mimeType = strtolower((string) $file->getMimeType());
        $extension = strtolower((string) $file->getClientOriginalExtension());

        $isAllowed = in_array($mimeType, $this->allowedFileMimeTypes, true)
            && in_array($extension, $this->allowedFileExtensions, true);

        if (!$isAllowed) {
            abort(422, 'Only PDF, JPG, JPEG, PNG, MP4, and MKV files are allowed.');
        }
    }

    public function removeFile($path)
    {
        $storage = Storage::disk('public');

        $path = str_replace('/store', '', $path);

        if ($storage->exists($path)) {
            $storage->delete($path);
        }
    }
}
