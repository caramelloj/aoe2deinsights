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
        
        $matches_3 = [] ; // initiliaze an array to get 1vs1 matches_3
        
        foreach ($response1 as $item) {
            
            if ($item['leaderboard_id'] = 3) { // 3. leaderboard_id
                if ($item['num_players'] != 2) {
                    # code...
                }else{
                    array_push($matches_3, $item);
                }
            }
        }
        /* dd($matches_3[19]); */
        $matches_3 = collect($matches_3)->paginate(8);
        
        /* dd($matches_3); */
        return view('pages-age.player', compact('matches_3'));
    }

}
