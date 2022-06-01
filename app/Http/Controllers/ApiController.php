<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use yajra\Datatables\Datatables;

class ApiController extends Controller
{
    public function index(){
        
        $response = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=10000');
        
        $response1 = $response->json();

        $res = $response1['leaderboard'];

        $res = collect($res);
        
        return datatables()->collection($res)->toJson();
        
        
    }
}
