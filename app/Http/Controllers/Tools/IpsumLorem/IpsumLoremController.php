<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools\IpsumLorem;

use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('ipsum-lorem')]
class IpsumLoremController extends Controller
{
    #[Get('/')]
    public function index()
    {
        return view('welcome');
    }
}
