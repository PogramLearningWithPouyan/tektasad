<?php

namespace App\Enum;

enum FileCategory: int
{
    case tickets = 1;

    public function entity(): array
    {
        return match ($this) {
            self::tickets => [
                'path' => '/tickets/',
                'types' => 'image/jpeg,image/png,image/jpg,image/svg,image/gif',
                'fileSystem' => 'public',
                'maxUploadSize' => '5000000'
            ],
        };
    }
}
