<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class CountController extends BaseController {
    public function index() {
        $count = DB::select("SELECT count FROM access_count WHERE id = 1");
        return View::make('count', ['count' => $count]);
    }
}
