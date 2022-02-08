<?php

declare(strict_types=1);

namespace App\Services\IpsumLorem\Dto;

class IpsumLoremDto
{
    /**
     * @property-read string $category
     * @property-read string $count
     */
    public int $category;
    public int $count;

    public function __construct(int $category, int $count)
    {
        $this->category = $category;
        $this->count = $count;
    }
}
