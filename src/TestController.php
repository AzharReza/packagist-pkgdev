<?php

namespace Cas\Pkgdev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Testing\TestView;

class TestController extends Controller
{
    public function test()
    {
        return view('Pkgdev::test');
    }
}
