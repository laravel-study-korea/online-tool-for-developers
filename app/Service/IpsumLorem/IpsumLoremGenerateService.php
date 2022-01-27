<?php

declare(strict_types=1);

namespace App\Service\IpsumLorem;

use Faker\Generator as Generator;

class IpsumLoremGenerateService
{
    private const FAKER_NAME = 'Database\Fakers\TextNovel';

    private Generator $generator;

    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    public function getGenerateIpsumLorem($category, $count): string
    {
        $className = self::FAKER_NAME.$category;
        $this->generator->addProvider(new $className($this->generator));

        return $this->generator->realText($count);
    }

}
