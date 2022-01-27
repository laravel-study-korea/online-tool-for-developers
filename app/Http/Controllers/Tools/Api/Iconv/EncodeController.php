<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools\Api\Iconv;

use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;
use Symfony\Component\HttpFoundation\Response;

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
    public function __invoke(string $fromEncoding, string $toEncoding, string $string): \Illuminate\Http\JsonResponse
    {
        if (! in_array($fromEncoding, self::ENCODE_CHARSET) || ! in_array($toEncoding, self::ENCODE_CHARSET)) {
            throw new \InvalidArgumentException();
        }

        return response()->json(
            [
                'code' => Response::HTTP_OK,
                'message' => 'success',
                'data' => iconv($fromEncoding, $toEncoding . '//TRANSLIT', $string),
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
