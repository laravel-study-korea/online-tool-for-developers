<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools\Api\IpsumLorem;

use App\Http\Controllers\Controller;
use App\Http\Requests\IpsumLoremRequest;
use App\Service\IpsumLorem\IpsumLoremGenerateService;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api/ipsum-lorem')]
class MakeController extends Controller
{
    protected IpsumLoremGenerateService $ipsumLoremGenerateService;

    public function __construct(IpsumLoremGenerateService $ipsumLoremGenerateService)
    {
        $this->ipsumLoremGenerateService = $ipsumLoremGenerateService;
    }

    #[Get('/{category}/{count}')]
    public function __invoke(int $category, int $count): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            [
                'code' => 200,
                'message' => 'success',
                'data' => $this->ipsumLoremGenerateService->getGenerateIpsumLorem($category, $count),

            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

}
