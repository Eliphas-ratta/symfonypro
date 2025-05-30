<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageResizerService
{
    private int $targetSize;

    public function __construct(int $targetSize = 1024)
    {
        $this->targetSize = $targetSize;
    }

    public function resizeAndSave(UploadedFile $file, string $targetDir, string $filename): void
    {
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        // Obtenir la taille d'origine
        [$width, $height] = getimagesize($file->getPathname());

        $srcImage = match ($file->getMimeType()) {
            'image/jpeg' => imagecreatefromjpeg($file->getPathname()),
            'image/png' => imagecreatefrompng($file->getPathname()),
            'image/webp' => imagecreatefromwebp($file->getPathname()),
            default => throw new \RuntimeException('Unsupported image type'),
        };

        // Calculer le carré central (crop)
        $side = min($width, $height);
        $srcX = (int)(($width - $side) / 2);
        $srcY = (int)(($height - $side) / 2);

        $cropped = imagecrop($srcImage, [
            'x' => $srcX,
            'y' => $srcY,
            'width' => $side,
            'height' => $side,
        ]);

        if (!$cropped) {
            throw new \RuntimeException('Failed to crop image');
        }

        // Redimensionner vers un carré fixe
        $resized = imagecreatetruecolor($this->targetSize, $this->targetSize);
        imagecopyresampled($resized, $cropped, 0, 0, 0, 0, $this->targetSize, $this->targetSize, $side, $side);

        $targetPath = $targetDir . '/' . $filename;

        match ($file->getMimeType()) {
            'image/jpeg' => imagejpeg($resized, $targetPath),
            'image/png' => imagepng($resized, $targetPath),
            'image/webp' => imagewebp($resized, $targetPath),
        };

        imagedestroy($srcImage);
        imagedestroy($cropped);
        imagedestroy($resized);
    }
}
