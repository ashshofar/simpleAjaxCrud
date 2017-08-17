<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Helper;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getResponse($param){
        return response()->json($param)
            ->header('Content-Type','application/json')
            ->header('Access-Control-Allow-Origin','*')
            ->header('Access-Control-Allow-Headers','X-Access-Token');
    }
}