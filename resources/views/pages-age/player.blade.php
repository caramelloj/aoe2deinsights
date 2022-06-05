@extends('layouts.app')

@section('css')
    <link type="text/css" href="{{ asset('assets') }}/css/extrastyles.css" rel="stylesheet">
@endsection

@section('content')

<div class="container">

    <div class="table-responsive">
        <table id="matches-history" class="table align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Won/Lose</th>
                <th scope="col">Civ</th>
                <th scope="col">Rating</th>
                <th scope="col">Nacionality</th>
                <th scope="col">Name</th>
                <th scope="col">Versus</th>
                <th scope="col">Civ</th>
                <th scope="col">Rating</th>
                <th scope="col">Nacionality</th>
                <th scope="col">Name</th>
                <th scope="col">Won/Lose</th>
                <th scope="col">Map</th>

                {{-- <th scope="col">Duration</th>
                <th scope="col">Download rec</th>   --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($matches_3 as $item)
            <tr>
                @if (is_null($item['players'][0]['won']))
                    <td>In progress</td>
                @elseif($item['players'][0]['won'] == false)
                    <td style="color:red">Lose</td>
                @elseif($item['players'][0]['won'] == true)
                    <td style="color:green">Won</td>
                @endif

                @if ($item['players'][0]['civ'] == 1)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/britons.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 2)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/franks.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 3)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/goths.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 4)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/teutons.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 5)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/japanese.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 6)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/chinese.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 7)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/byzantines.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 8)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/persians.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 9)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/saracens.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 10)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/turks.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 11)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/vikings.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 12)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/mongols.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 13)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/celts.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 14)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/spanish.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 15)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/aztecs.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 16)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/mayans.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 17)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/huns.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 18)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/koreans.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 19)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/italians.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 20)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/hindustanis.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 21)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/incas.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 22)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/magyars.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 23)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/slavs.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 24)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/portuguese.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 25)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/ethiopians.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 26)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/malians.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 27)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/berbers.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 28)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/khmer.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 29)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/malay.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 30)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/burmese.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 31)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/vietnamese.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 32)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/bulgarians.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 33)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/tatars.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 34)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/cumans.png" alt="">
                    </td>
                @elseif($item['players'][0]['civ'] == 35)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/lithuanians.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 36)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/burgundians.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 37)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/sicilians.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 38)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/poles.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 39)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/bohemians.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 40)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/dravidians.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 41)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/bengalis.png" alt="">
                </td>
                @elseif($item['players'][0]['civ'] == 42)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/gurjaras.png" alt="">
                </td>
                @else
                    <td></td>
                @endif
                <td>{{ $item['players'][0]['rating'] }}</td>

                @if ($item['players'][0]['country'] == 'AR')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ar.svg" alt="ar">
                    </td>
                @elseif($item['players'][0]['country'] == 'AT')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/at.svg" alt="at">
                    </td>
                @elseif($item['players'][0]['country'] == 'CN')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/cn.svg" alt="cn">
                    </td>
                @elseif($item['players'][0]['country'] == 'ES')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/es.svg" alt="es">
                    </td>
                @elseif($item['players'][0]['country'] == 'DE')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/de.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'TW')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/tw.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'TR')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/tr.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'SE')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/se.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'IN')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/in.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'CA')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ca.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'PL')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/pl.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'FI')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/fi.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'GB')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/gb.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'BR')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/br.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'PT')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/pt.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'DK')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/dk.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'RO')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ro.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'MX')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/mx.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'KR')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/kr.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'US')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/us.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'VN')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/vn.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'SK')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/sk.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'RU')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ru.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'NL')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/nl.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'PE')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/pe.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'NO')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/no.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'GR')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/gr.svg" alt="">
                    </td>
                @elseif($item['players'][0]['country'] == 'AU')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/au.svg" alt="">
                    </td>
                @else
                    <td>
                        <img class="flags" src="https://adorerofblood.github.io/assets/flags/un.svg" alt="">
                    </td>
                @endif
                <td>{{ $item['players'][0]['name'] }}</td>

                <td>
                    <img class="vs" src="{{ asset('assets') }}/img/vs.png" alt="vs">
                </td>

                @if ($item['players'][1]['civ'] == 1)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/britons.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 2)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/franks.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 3)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/goths.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 4)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/teutons.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 5)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/japanese.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 6)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/chinese.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 7)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/byzantines.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 8)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/persians.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 9)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/saracens.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 10)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/turks.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 11)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/vikings.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 12)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/mongols.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 13)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/celts.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 14)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/spanish.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 15)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/aztecs.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 16)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/mayans.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 17)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/huns.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 18)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/koreans.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 19)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/italians.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 20)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/hindustanis.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 21)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/incas.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 22)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/magyars.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 23)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/slavs.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 24)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/portuguese.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 25)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/ethiopians.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 26)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/malians.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 27)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/berbers.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 28)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/khmer.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 29)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/malay.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 30)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/burmese.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 31)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/vietnamese.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 32)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/bulgarians.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 33)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/tatars.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 34)
                    <td>
                        <img src="{{ asset('assets') }}/img/civs/cumans.png" alt="">
                    </td>
                @elseif($item['players'][1]['civ'] == 35)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/lithuanians.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 36)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/burgundians.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 37)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/sicilians.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 38)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/poles.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 39)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/bohemians.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 40)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/dravidians.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 41)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/bengalis.png" alt="">
                </td>
                @elseif($item['players'][1]['civ'] == 42)
                <td>
                    <img src="{{ asset('assets') }}/img/civs/gurjaras.png" alt="">
                </td>
                @else
                    <td></td>
                @endif
                <td>{{ $item['players'][1]['rating'] }}</td>

                @if ($item['players'][1]['country'] == 'AR')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ar.svg" alt="ar">
                    </td>
                @elseif($item['players'][1]['country'] == 'AT')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/at.svg" alt="at">
                    </td>
                @elseif($item['players'][1]['country'] == 'CN')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/cn.svg" alt="cn">
                    </td>
                @elseif($item['players'][1]['country'] == 'ES')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/es.svg" alt="es">
                    </td>
                @elseif($item['players'][1]['country'] == 'DE')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/de.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'TW')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/tw.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'TR')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/tr.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'SE')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/se.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'IN')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/in.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'CA')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ca.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'PL')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/pl.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'FI')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/fi.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'GB')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/gb.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'BR')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/br.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'PT')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/pt.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'DK')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/dk.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'RO')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ro.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'MX')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/mx.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'KR')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/kr.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'US')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/us.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'VN')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/vn.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'SK')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/sk.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'RU')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/ru.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'NL')
                    <td>
                        <img class="flags"  src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/nl.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'PE')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/pe.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'NO')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/no.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'GR')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/gr.svg" alt="">
                    </td>
                @elseif($item['players'][1]['country'] == 'AU')
                    <td>
                        <img class="flags" src="https://aoe2.net/webjars/flag-icon-css/3.5.0/flags/4x3/au.svg" alt="">
                    </td>
                @else
                    <td>
                        <img class="flags" src="https://adorerofblood.github.io/assets/flags/un.svg" alt="">
                    </td>
                @endif
                <td>{{ $item['players'][1]['name'] }}</td>

                @if (is_null($item['players'][1]['won']))
                    <td>In progress</td>
                @elseif($item['players'][1]['won'] == false)
                    <td style="color:red">Lose</td>
                @elseif($item['players'][1]['won'] == true)
                    <td style="color:green">Won</td>
                @endif

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
                @else
                    <td></td>
                @endif

            </tr>
                @endforeach
        </tbody>
        </table>

        <div class="d-flex justify-content-end">
            {{  $matches_3->links()}}
        </div>
    </div>        
</div>

@endsection
