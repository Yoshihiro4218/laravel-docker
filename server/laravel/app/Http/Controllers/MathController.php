<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class MathController extends BaseController {
    public function sum($x, $y) {
        $sum = $x + $y;
        return View::make('math', ['x' => $x, 'y' => $y, 'sum' => $sum]);
    }
}
