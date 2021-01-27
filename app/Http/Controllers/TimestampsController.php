<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TimestampsController extends Controller
{
    public function index(Request $request, $yyyymm, $syaincd)
    {
        if ($yyyymm == 'last') {
            $yyyymm = Carbon::yesterday()->format('Ym');
        }
        $baseDate = Carbon::create(substr($yyyymm, 0, 4), substr($yyyymm, 4, 2), 1);
    }
}

