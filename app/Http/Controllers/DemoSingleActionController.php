<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoSingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        echo "Single Action Controller";
    }
}
