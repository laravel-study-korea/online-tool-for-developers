<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('iconv')]
class IconvController extends Controller
{
    #[Get('/')]
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }
}
