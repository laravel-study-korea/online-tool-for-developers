<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools\Api\Iconv;

use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api/iconv')]
class EncodeController extends Controller
{
    public const ENCODE_CHARSET = [
        'UTF-8',
        'ASCII',
        'Windows-1252',
        'ISO-8859-15',
        'ISO-8859-1',
        'ISO-8859-6',
        'CP1256',
    ];

    #[Get('/{fromEncoding}/{toEncoding}/{string}')]
    public function __invoke(string $fromEncoding, string $toEncoding, string $string): string|bool
    {
        if (! in_array($fromEncoding, self::ENCODE_CHARSET) || ! in_array($toEncoding, self::ENCODE_CHARSET)) {
            throw new \InvalidArgumentException();
        }

        /**
         * //TRANSLIT: 나타낼 수 없는 문자일 경우, 문자를 유사한 문자로 표시함.
         */
        return iconv($fromEncoding, $toEncoding . '//TRANSLIT', $string);
    }
}
