@extends('layouts.app')

@section('css')
    <link type="text/css" href="{{ asset('assets') }}/css/extrastyles.css" rel="stylesheet">

@endsection
@section('content')

<div class="container">
    
   {{--  @foreach ($response1 as $item) --}}

    <div class="table-responsive">
        <table id="matches-history" class="table align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Result(?</th>
                <th scope="col">Civ</th>
                <th scope="col">Rating</th>
                {{-- <th scope="col">Nacionality</th> --}}
                <th scope="col">Name</th>
                <th scope="col">Map</th>
                {{-- <th scope="col">Duration</th>
                <th scope="col">Download rec</th>   --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($response1 as $item)
                    @foreach ($item["players"] as $players)
                    <tr>
                        @if (is_null($players['won']))
                            <td>Custom game</td>
                        @elseif($players['won'] == false)
                            <td style="color:red">Lose</td>
                        @elseif($players['won'] == true)
                            <td style="color:green">Won</td>
                        @endif
                        @if ($players['civ'] == 1)
                            <td>Britons</td>
                        @elseif($players['civ'] == 2)
                            <td>Franks</td>
                        @elseif($players['civ'] == 3)
                            <td>Goths</td>
                        @elseif($players['civ'] == 4)
                            <td>Teutons</td>
                        @elseif($players['civ'] == 5)
                            <td>Japanese</td>
                        @elseif($players['civ'] == 6)
                            <td>Chinese</td>
                        @elseif($players['civ'] == 7)
                            <td>Byzantines</td>
                        @elseif($players['civ'] == 8)
                            <td>Persians</td>
                        @elseif($players['civ'] == 9)
                            <td>Saracens</td>
                        @elseif($players['civ'] == 10)
                            <td>Turks</td>
                        @elseif($players['civ'] == 11)
                            <td>Vikings</td>
                        @elseif($players['civ'] == 12)
                            <td>Mongols</td>
                        @elseif($players['civ'] == 13)
                            <td>Celts</td>
                        @elseif($players['civ'] == 14)
                            <td>Spanish</td>
                        @elseif($players['civ'] == 15)
                            <td>Aztecs</td>
                        @elseif($players['civ'] == 16)
                            <td>Mayans</td>
                        @elseif($players['civ'] == 17)
                            <td>Huns</td>
                        @elseif($players['civ'] == 18)
                            <td>Koreans</td>
                        @elseif($players['civ'] == 19)
                            <td>Italians</td>
                        @elseif($players['civ'] == 20)
                            <td>Hindustanis</td>
                        @elseif($players['civ'] == 21)
                            <td>Incas</td>
                        @elseif($players['civ'] == 22)
                            <td>Magyars</td>
                        @elseif($players['civ'] == 23)
                            <td>Slavs</td>
                        @elseif($players['civ'] == 24)
                            <td>Portuguese</td>
                        @elseif($players['civ'] == 25)
                            <td>Ethiopians</td>
                        @elseif($players['civ'] == 26)
                            <td>Malians</td>
                        @elseif($players['civ'] == 27)
                            <td>Berbers</td>
                        @elseif($players['civ'] == 28)
                            <td>Khmer</td>
                        @elseif($players['civ'] == 29)
                            <td>Malay</td>
                        @elseif($players['civ'] == 30)
                            <td>Burmese</td>
                        @elseif($players['civ'] == 31)
                            <td>Vietnamese</td>
                        @elseif($players['civ'] == 32)
                            <td>Bulgarians</td>
                        @elseif($players['civ'] == 33)
                            <td>Tatars</td>
                        @elseif($players['civ'] == 34)
                            <td>Cumans</td>
                        @elseif($players['civ'] == 35)
                            <td>Lithuanians</td>
                        @elseif($players['civ'] == 36)
                            <td>Burgundians</td>
                        @elseif($players['civ'] == 37)
                            <td>Sicilians</td>
                        @elseif($players['civ'] == 38)
                            <td>Poles</td>
                        @elseif($players['civ'] == 39)
                            <td>Bohemians</td>
                        @elseif($players['civ'] == 40)
                            <td>Dravidians</td>
                        @elseif($players['civ'] == 41)
                            <td>Bengalis</td>
                        @elseif($players['civ'] == 42)
                            <td>Gurjaras</td>
                        @endif
                        <td>{{ $players['rating'] }}</td>
                        <td>{{ $players['name'] }}</td>
                        @if ($item['map_type'] == 9)
                            <td>Arabia </td>
                        @elseif($item['map_type'] == 10)
                            <td> Archipelago</td>
                        @elseif($item['map_type'] == 11)
                            <td> Baltic</td>
                        @elseif($item['map_type'] == 12)
                            <td> Black Forest</td>
                        @elseif($item['map_type'] == 13)
                            <td> Coastal</td>
                        @elseif($item['map_type'] == 14)
                            <td> Continental</td>
                        @elseif($item['map_type'] == 15)
                            <td> Crater Lake</td>
                        @elseif($item['map_type'] == 16)
                            <td> Fortress</td>
                        @elseif($item['map_type'] == 17)
                            <td> Gold Rush</td>
                        @elseif($item['map_type'] == 18)
                            <td> Highland</td>
                        @elseif($item['map_type'] == 19)
                            <td> Islands</td>
                        @elseif($item['map_type'] == 20)
                            <td> Mediterranean</td>
                        @elseif($item['map_type'] == 21)
                            <td> Migration</td>
                        @elseif($item['map_type'] == 22)
                            <td> Rivers </td>
                        @elseif($item['map_type'] == 23)
                            <td> Team Islands </td>
                        @elseif($item['map_type'] == 24)
                            <td> Full Random       </td>
                        @elseif($item['map_type'] == 25)
                            <td> Scandinavia</td>
                        @elseif($item['map_type'] == 26)
                            <td> Mongolia        </td>  
                        @elseif($item['map_type'] == 27)
                            <td> Yucatan  </td>
                        @elseif($item['map_type'] == 28)
                            <td> Salt Marsh  </td>
                        @elseif($item['map_type'] == 29)
                            <td> Arena  </td>
                        @elseif($item['map_type'] == 31)
                            <td> Oasis</td>
                        @elseif($item['map_type'] == 32)
                            <td> Ghost Lake</td>
                        @elseif($item['map_type'] == 33)
                            <td> Nomad</td>
                        @elseif($item['map_type'] == 49)
                            <td> Iberia</td>
                        @elseif($item['map_type'] == 50)
                            <td> Britain</td>
                        @elseif($item['map_type'] == 51)
                            <td> Mideast</td>
                        @elseif($item['map_type'] == 52)
                            <td> Texas</td>
                        @elseif($item['map_type'] == 53)
                            <td> Italy</td>
                        @elseif($item['map_type'] == 54)
                            <td> Central America
                        @elseif($item['map_type'] == 55)
                            <td> France</td>
                        @elseif($item['map_type'] == 56)
                            <td> Norse Lands</td>
                        @elseif($item['map_type'] == 57)
                            <td> Sea Of Japan </td>
                        @elseif($item['map_type'] == 58)
                            <td> Byzantium</td>
                        @elseif($item['map_type'] == 59)
                            <td> Custom</td>
                        @elseif($item['map_type'] == 60)
                            <td> Random Land <td>
                        @elseif($item['map_type'] == 62)
                            <td> Random Real World <td>
                        @elseif($item['map_type'] == 63)
                            <td> Blind Random</td>
                        @elseif($item['map_type'] == 65)
                            <td> Random Special <td>
                        @elseif($item['map_type'] == 66)
                            <td> Random Special <td>
                        @elseif($item['map_type'] == 67)
                            <td> Acropolis</td>
                        @elseif($item['map_type'] == 68)
                            <td> Budapest</td>
                        @elseif($item['map_type'] == 69)
                            <td> Cenotes</td>
                        @elseif($item['map_type'] == 70)
                            <td> City of Lakes</td>
                        @elseif($item['map_type'] == 71)
                            <td> Golden Pit</td>
                        @elseif($item['map_type'] == 72)
                            <td> Hideout</td>
                        @elseif($item['map_type'] == 73)
                            <td> Hill Fort</td>
                        @elseif($item['map_type'] == 74)
                            <td> Lombardia</td>
                        @elseif($item['map_type'] == 75)
                            <td> Steppe</td>
                        @elseif($item['map_type'] == 76)
                            <td> Valley</td>
                        @elseif($item['map_type'] == 77)
                            <td> MegaRandom</td>
                        @elseif($item['map_type'] == 78)
                            <td> Hamburger</td>
                        @elseif($item['map_type'] == 79)
                            <td> CtR Random</td>
                        @elseif($item['map_type'] == 80)
                            <td> CtR Monsoon</td>
                        @elseif($item['map_type'] == 81)
                            <td> CtR Pyramid Descent</td>
                        @elseif($item['map_type'] == 82)
                            <td> CtR Spiral</td>
                        @elseif($item['map_type'] == 83)
                            <td> CtR Kilimanjaro</td>
                        @elseif($item['map_type'] == 84)
                            <td> CtR Mountain Pass</td>
                        @elseif($item['map_type'] == 85)
                            <td> Nile Delta</td>
                        @elseif($item['map_type'] == 86)
                            <td> Serengeti</td>
                        @elseif($item['map_type'] == 87)
                            <td> Socotra</td>
                        @elseif($item['map_type'] == 88)
                            <td> Amazon</td>
                        @elseif($item['map_type'] == 89)
                            <td> China</td>
                        @elseif($item['map_type'] == 90)
                            <td> Horn of Africa</td>
                        @elseif($item['map_type'] == 91)
                            <td> India</td>
                        @elseif($item['map_type'] == 92)
                            <td> Madagascar</td>
                        @elseif($item['map_type'] == 93)
                            <td> West Africa</td>
                        @elseif($item['map_type'] == 94)
                            <td> Bohemia</td>
                        @elseif($item['map_type'] == 95)
                            <td>Earth</td>
                        @elseif($item['map_type'] == 96)
                            <td>Canyons</td>
                        @elseif($item['map_type'] == 97)
                            <td>Enemy Archipelago</td>
                        @elseif($item['map_type'] == 98)
                            <td>Enemy Islands</td>
                        @elseif($item['map_type'] == 99)
                            <td>Far Out</td>
                        @elseif($item['map_type'] == 100)
                            <td>Front Line</td>
                        @elseif($item['map_type'] == 101)
                            <td>Inner Circle</td>
                        @elseif($item['map_type'] == 102)
                            <td>Motherland</td>
                        @elseif($item['map_type'] == 103)
                            <td>Open Plains</td>
                        @elseif($item['map_type'] == 104)
                            <td>Ring of Water</td>
                        @elseif($item['map_type'] == 105)
                            <td>Snakepit</td>
                        @elseif($item['map_type'] == 106)
                            <td>The Eye</td>
                        @elseif($item['map_type'] == 107)
                            <td>Australia</td>
                        @elseif($item['map_type'] == 108)
                            <td>Indochina</td>
                        @elseif($item['map_type'] == 109)
                            <td>Indonesia</td>
                        @elseif($item['map_type'] == 110)
                            <td>Strait of Malacca</td>
                        @elseif($item['map_type'] == 111)
                            <td>Philippines</td>
                        @elseif($item['map_type'] == 112)
                            <td>Bog Islands</td>
                        @elseif($item['map_type'] == 113)
                            <td>Mangrove Jungle</td>
                        @elseif($item['map_type'] == 114)
                            <td>Pacific Islands</td>
                        @elseif($item['map_type'] == 115)
                            <td>Sandbank</td>
                        @elseif($item['map_type'] == 116)
                            <td>Water Nomad</td>
                        @elseif($item['map_type'] == 117)
                            <td>Jungle Islands</td>
                        @elseif($item['map_type'] == 118)
                            <td>Holy Line</td>
                        @elseif($item['map_type'] == 119)
                            <td>Border Stones</td>
                        @elseif($item['map_type'] == 120)
                            <td>Yin Yang</td>
                        @elseif($item['map_type'] == 121)
                            <td>Jungle Lanes</td>
                        @elseif($item['map_type'] == 122)
                            <td>Alpine Lakes</td>
                        @elseif($item['map_type'] == 123)
                            <td>Bogland</td>
                        @elseif($item['map_type'] == 124)
                            <td>Mountain Ridge</td>
                        @elseif($item['map_type'] == 125)
                            <td>Ravines</td>
                        @elseif($item['map_type'] == 126)
                            <td>Wolf Hill</td>
                        @elseif($item['map_type'] == 132)
                            <td>Antarctica</td>
                        @elseif($item['map_type'] == 133)
                            <td>Aral Sea</td>
                        @elseif($item['map_type'] == 134)
                            <td>Black Sea</td>
                        @elseif($item['map_type'] == 135)
                            <td>Caucasus</td>
                        @elseif($item['map_type'] == 136)
                            <td>Caucasus</td>
                        @elseif($item['map_type'] == 137)
                            <td>Custom Map Pool</td>
                        @elseif($item['map_type'] == 138)
                            <td>Custom Map Pool</td>
                        @elseif($item['map_type'] == 139)
                            <td>Golden Swamp</td>
                        @elseif($item['map_type'] == 140)
                            <td>Four Lakes</td>
                        @elseif($item['map_type'] == 141)
                            <td>Land Nomad</td>
                        @elseif($item['map_type'] == 142)
                            <td>BR Battle On Ice</td>
                        @elseif($item['map_type'] == 143)
                            <td>BR El Dorado"</td>
                        @elseif($item['map_type'] == 144)
                            <td>BR Fall of Axum"</td>
                        @elseif($item['map_type'] == 145)
                            <td>BR Fall of Rome</td>
                        @elseif($item['map_type'] == 146)
                            <td>BR Majapahit Empire</td>
                        @elseif($item['map_type'] == 147)
                            <td>Amazon Tunnel</td>
                        @elseif($item['map_type'] == 148)
                            <td>Coastal Forest</td>
                        @elseif($item['map_type'] == 149)
                            <td>African Clearing</td>
                        @elseif($item['map_type'] == 150)
                            <td>Atacama</td>
                        @elseif($item['map_type'] == 151)
                            <td>Seize the Mountain</td>
                        @elseif($item['map_type'] == 152)
                            <td>Crater</td>
                        @elseif($item['map_type'] == 153)
                            <td>Crossroads</td>
                        @elseif($item['map_type'] == 154)
                            <td>Michi</td>
                        @elseif($item['map_type'] == 155)
                            <td>Team Moats</td>
                        @elseif($item['map_type'] == 156)
                            <td>Volcanic Island</td>
                        @elseif($item['map_type'] == 157)
                            <td>Acclivity</td>
                        @elseif($item['map_type'] == 158)
                            <td>Eruption</td>
                        @elseif($item['map_type'] == 159)
                            <td>Frigid Lake</td>
                        @elseif($item['map_type'] == 160)
                            <td>Greenland</td>
                        @elseif($item['map_type'] == 161)
                            <td>Lowland</td>
                        @elseif($item['map_type'] == 162)
                            <td>Marketplace</td>
                        @elseif($item['map_type'] == 163)
                            <td>Meadow</td>
                        @elseif($item['map_type'] == 164)
                            <td>Mountain Range</td>
                        @elseif($item['map_type'] == 165)
                            <td>Northern Isles</td>
                        @elseif($item['map_type'] == 166)
                            <td>Ring Fortress</td>
                        @elseif($item['map_type'] == 167)
                            <td>Runestones</td>
                        @elseif($item['map_type'] == 168)
                            <td>Aftermath</td>
                        @elseif($item['map_type'] == 169)
                            <td>Enclosed</td>
                        @elseif($item['map_type'] == 170)
                            <td>Haboob</td>
                        @elseif($item['map_type'] == 171)
                            <td>Kawasan</td>
                        @elseif($item['map_type'] == 172)
                            <td>Land Madness</td>
                        @elseif($item['map_type'] == 173)
                            <td>Sacred Springs</td>
                        @elseif($item['map_type'] == 174)
                            <td>Wade</td>
                        @endif
                       
                    </tr>
                    @endforeach
                @endforeach

        </tbody>
        </table>
    </div>        
</div>

@endsection