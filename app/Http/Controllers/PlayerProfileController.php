<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlayerProfileController extends Controller
{

    public function index(Request $request){
        $profile_id = $request->id;
        
        $response = Http::get('https://aoe2.net/api/player/matches?game=aoe2de&profile_id='.$profile_id.'&count=10000');

        $response1 = $response->json();
        
        $response1 = collect($response1);
        
        $response1 = $response1->paginate(2);


        return view('pages-age.player', compact('response1'));
    }

}
