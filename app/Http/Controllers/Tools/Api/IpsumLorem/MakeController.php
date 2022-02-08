<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools\Api\IpsumLorem;

use App\Http\Controllers\Controller;
use App\Http\Requests\IpsumLoremRequest;
use App\Services\IpsumLorem\IpsumLoremGenerateService;
use Illuminate\Http\JsonResponse;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;
use Symfony\Component\HttpFoundation\Response;

#[Prefix('api/ipsum-lorem')]
class MakeController extends Controller
{
    protected IpsumLoremGenerateService $ipsumLoremGenerateService;

    public function __construct(IpsumLoremGenerateService $ipsumLoremGenerateService)
    {
        $this->ipsumLoremGenerateService = $ipsumLoremGenerateService;
    }

    #[Get('/')]
    public function __invoke(IpsumLoremRequest $request): JsonResponse
    {
        return response()->json(
            [
                'result' => true,
                'message' => 'success',
                'data' => $this->ipsumLoremGenerateService->getGenerateIpsumLorem($request->toDto()),
            ],
            Response::HTTP_OK,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

}
