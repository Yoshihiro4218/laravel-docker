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
        $obj = DB::select('SELECT count FROM access_count WHERE id = 1');
        $count = $obj[0] -> count;
        $count ++
        //DB::update('UPDATE access_count SET count = ? WHERE id = 1', [$count]);
        return View::make('count', ['count' => count]);
    }
}
