<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools\Api\Iconv;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;
use Symfony\Component\HttpFoundation\Response;

#[Prefix('api/iconv')]
class EncodeController extends Controller
{
    /**
     * @param string $fromEncoding
     * @param string $toEncoding
     * @param string $string
     * @return \Illuminate\Http\JsonResponse
     */
    #[Get('/{fromEncoding}/{toEncoding}/{string}')]
    public function __invoke(
        string $fromEncoding,
        string $toEncoding,
        string $string
    ): \Illuminate\Http\JsonResponse {
        $fromEncoding = Str::upper($fromEncoding);
        $toEncoding = Str::upper($toEncoding);

        if (! in_array($fromEncoding, config('iconv.charset')) ||
            ! in_array($toEncoding, config('iconv.charset'))
        ) {
            throw new \InvalidArgumentException();
        }

        if (mb_detect_encoding($string, $fromEncoding) === false ||
            mb_detect_encoding($string, $toEncoding) === false
        ) {
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
