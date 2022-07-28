<?php
declare(strict_type=1);

namespace App\Modules\ImageUpload;

interface ImageManagerInterface
{
    /**
     * @param \Illyminate\Http\File|\Illuminate\Http\UploadedFile|string $file
     * @return string
     */
    public function save($file): string;

    public function delete(string $name): void;
}
