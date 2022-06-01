@extends('layouts.app')

@section('content')

<div class="container">
    
    @foreach ($response1 as $item)
        <div class="card">


            <div class="card-header">
                Game Number: {{$item["match_id"]}}  
            </div>
            <div class="card-body">
                @foreach ($item["players"] as $players)
                
               {{--  {{ $all_players = count($players['profile_id'])}} --}}
                {{ $players['profile_id']}}
                {{ $players['name'] }}
                {{ $players['country'] }}
                {{ $players['won'] }}
                {{ $players['civ'] }}
                {{ $players['steam_id'] }}
                {{ $players['rating'] }}

{{--                 @if ( $all_players == 2)
                    <b>1vs1</b>
                @elseif($all_players == 4)
                    <b>2vs2</b>
                @elseif($all_players == 6)
                    <b>3vs3</b>
                @elseif($all_players == 8)
                    <b>4vs4</b>
                @else
                    <b>Custom game</b>
                @endif --}}
{{--                     {{ $players['profile_id'] }}
                    {{ $players[''] }} --}}
                @endforeach
                <p>
                    @if ($item['map_type'] == 9)
                        Map : Arabia
                    @elseif($item['map_type'] == 10)
                        Map: Archipelago
                    @elseif($item['map_type'] == 11)
                        Map: Baltic
                    @elseif($item['map_type'] == 12)
                        Map: Black Forest
                    @elseif($item['map_type'] == 13)
                        Map: Coastal
                    @elseif($item['map_type'] == 14)
                        Map: Continental
                    @elseif($item['map_type'] == 15)
                        Map: Crater Lake
                    @elseif($item['map_type'] == 16)
                        Map: Fortress
                    @elseif($item['map_type'] == 17)
                        Map: Gold Rush
                    @elseif($item['map_type'] == 18)
                        Map: Highland
                    @elseif($item['map_type'] == 19)
                        Map: Islands
                    @elseif($item['map_type'] == 20)
                        Map: Mediterranean
                    @elseif($item['map_type'] == 21)
                        Map: Migration
                    @elseif($item['map_type'] == 22)
                        Map: Rivers      
                    @elseif($item['map_type'] == 23)
                        Map: Team Islands         
                    @elseif($item['map_type'] == 24)
                        Map: Full Random       
                    @elseif($item['map_type'] == 25)
                        Map: Scandinavia
                    @elseif($item['map_type'] == 26)
                        Map: Mongolia          
                    @elseif($item['map_type'] == 27)
                        Map: Yucatan  
                    @elseif($item['map_type'] == 28)
                        Map: Salt Marsh  
                    @elseif($item['map_type'] == 29)
                        Map: Arena  
                    @elseif($item['map_type'] == 30)
                        Map: Oasis  
                    @elseif($item['map_type'] == 31)
                        Map: Ghost Lake
                    @elseif($item['map_type'] == 32)
                        Map: Ghost Lake
                    @elseif($item['map_type'] == 33)
                        Map: Nomad
                    @elseif($item['map_type'] == 49)
                        Map: Iberia
                    @elseif($item['map_type'] == 50)
                        Map: Britain
                    @elseif($item['map_type'] == 51)
                        Map: Mideast
                    @elseif($item['map_type'] == 52)
                        Map: Texas
                    @elseif($item['map_type'] == 53)
                        Map: Italy
                    @elseif($item['map_type'] == 54)
                        Map: Central America
                    @elseif($item['map_type'] == 55)
                        Map: France
                    @elseif($item['map_type'] == 56)
                        Map: Norse Lands
                    @elseif($item['map_type'] == 57)
                        Map: Sea Of Japan 
                    @elseif($item['map_type'] == 58)
                        Map: Byzantium
                    @elseif($item['map_type'] == 59)
                        Map: Custom
                    @elseif($item['map_type'] == 60)
                        Map: Random Land Map
                    @elseif($item['map_type'] == 62)
                        Map: Random Real World Map
                    @elseif($item['map_type'] == 63)
                        Map: Blind Random
                    @elseif($item['map_type'] == 65)
                        Map: Random Special Map
                    @elseif($item['map_type'] == 66)
                        Map: Random Special Map
                    @elseif($item['map_type'] == 67)
                        Map: Acropolis
                    @elseif($item['map_type'] == 68)
                        Map: Budapest
                    @elseif($item['map_type'] == 69)
                        Map: Cenotes
                    @elseif($item['map_type'] == 70)
                        Map: City of Lakes
                    @elseif($item['map_type'] == 71)
                        Map: Golden Pit
                    @elseif($item['map_type'] == 72)
                        Map: Hideout
                    @elseif($item['map_type'] == 73)
                        Map: Hill Fort
                    @elseif($item['map_type'] == 74)
                        Map: Lombardia
                    @elseif($item['map_type'] == 75)
                        Map: Steppe
                    @elseif($item['map_type'] == 76)
                        Map: Valley
                    @elseif($item['map_type'] == 77)
                        Map: MegaRandom
                    @elseif($item['map_type'] == 78)
                        Map: Hamburger
                    @elseif($item['map_type'] == 79)
                        Map: CtR Random
                    @elseif($item['map_type'] == 80)
                        Map: CtR Monsoon
                    @elseif($item['map_type'] == 81)
                        Map: CtR Pyramid Descent
                    @elseif($item['map_type'] == 82)
                        Map: CtR Spiral
                    @elseif($item['map_type'] == 83)
                        Map: CtR Kilimanjaro
                    @elseif($item['map_type'] == 84)
                        Map: CtR Mountain Pass
                    @elseif($item['map_type'] == 85)
                        Map: Nile Delta
                    @elseif($item['map_type'] == 86)
                        Map: Serengeti
                    @elseif($item['map_type'] == 87)
                        Map: Socotra
                    @elseif($item['map_type'] == 88)
                        Map: Amazon
                    @elseif($item['map_type'] == 89)
                        Map: China
                    @elseif($item['map_type'] == 90)
                        Map: Horn of Africa
                    @elseif($item['map_type'] == 91)
                        Map: India
                    @elseif($item['map_type'] == 92)
                        Map: Madagascar
                    @elseif($item['map_type'] == 93)
                        Map: West Africa
                    @elseif($item['map_type'] == 94)
                        Map: Bohemia
                    @endif
                </p>
            </div>
        </div>
    @endforeach
</div>

@endsection