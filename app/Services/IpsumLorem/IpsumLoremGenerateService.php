<?php

declare(strict_types=1);

namespace App\Services\IpsumLorem;

use App\Services\IpsumLorem\Dto\IpsumLoremDto;
use Faker\Generator;

class IpsumLoremGenerateService
{
    private const FAKER_NAME = 'Database\Fakers\TextNovel';

    private Generator $generator;

    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    public function getGenerateIpsumLorem(IpsumLoremDto $ipsumLoremDto): string
    {
        $className = self::FAKER_NAME.$ipsumLoremDto->category;
        $this->generator->addProvider(new $className($this->generator));

        return $this->generator->realText($ipsumLoremDto->count);
    }

}
