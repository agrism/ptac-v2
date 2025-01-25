<?php

namespace App\Http\Controllers;

use App\Services\RegisterService\Enums\RegisterEnum;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('index', ['registers' => RegisterEnum::sorted()]);
    }
}
