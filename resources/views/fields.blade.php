@extends('layouts.game')

@section('title')
    fields
@endsection

@section('content')
    <div id="content" class="village1">
        <h1>
            {{ $village->name ?? 'nill' }}
            @if ($village->world->loyalty->value ?? 0 < 100)
                <div id="loyalty"
                     class="{{ $village->world->loyalty->value ?? 0 > 33 ? 'gr' : 're' }}">@lang('village/fields.loyalty')
                    : {{ $village->world->loyalty->value ?? 0 }}%
                </div>
            @endif
        </h1>
        <div id="cap">
            @if ($village->capital ?? true)
                (@lang('village/fields.capital'))
            @endif
        </div>
        <map name="rx" id="rx">
{{--            @foreach($village->buildings->where('location', '<=', 18)  as $building)--}}
{{--                <area href="{{ route('building.show', ['id' => $building->location]) }}"--}}
{{--                      coords="{{ $village::RESOURCES_FIELD_COORDINATES[$building->location]  }}" shape="circle"--}}
{{--                      title="{{ trans('buildings.' . get_name_from_class($building) . '.name') }} @lang('buildings.level') {{ $building->level }}"/>--}}
{{--            @endforeach --}}



                <area href="build.php?id=1" coords="101,33,28" shape="circle" title="Woodcutter Level 0">
                <area href="build.php?id=2" coords="165,32,28" shape="circle" title="Cropland Level 0">
                <area href="build.php?id=3" coords="224,46,28" shape="circle" title="Woodcutter Level 0">
                <area href="build.php?id=4" coords="46,63,28" shape="circle" title="Iron Mine Level 0">
                <area href="build.php?id=5" coords="138,74,28" shape="circle" title="Clay Pit Level 0">
                <area href="build.php?id=6" coords="203,94,28" shape="circle" title="Clay Pit Level 0">
                <area href="build.php?id=7" coords="262,86,28" shape="circle" title="Iron Mine Level 0">
                <area href="build.php?id=8" coords="31,117,28" shape="circle" title="Cropland Level 0">
                <area href="build.php?id=9" coords="83,110,28" shape="circle" title="Cropland Level 0">
                <area href="build.php?id=10" coords="214,142,28" shape="circle" title="Iron Mine Level 0">
                <area href="build.php?id=11" coords="269,146,28" shape="circle" title="Iron Mine Level 0">
                <area href="build.php?id=12" coords="42,171,28" shape="circle" title="Cropland Level 0">
                <area href="build.php?id=13" coords="93,164,28" shape="circle" title="Cropland Level 0">
                <area href="build.php?id=14" coords="160,184,28" shape="circle" title="Woodcutter Level 0">
                <area href="build.php?id=15" coords="239,199,28" shape="circle" title="Cropland Level 0">
                <area href="build.php?id=16" coords="87,217,28" shape="circle" title="Clay Pit Level 0">
                <area href="build.php?id=17" coords="140,231,28" shape="circle" title="Woodcutter Level 0">
                <area href="build.php?id=18" coords="190,232,28" shape="circle" title="Clay Pit Level 0">
                <area href="dorf2.php" coords="144,131,36" shape="circle" title="V mesto" alt="">


{{--                <area href="{{ route('building.show', ['id' => 1]) }}"--}}
{{--                      coords="1" shape="circle"--}}
{{--                      title="{{ trans('buildings.1.name') }} @lang('buildings.level') 1"/>--}}

{{--            <area href="{{ route('village') }}" coords="144,131,36" shape="circle"--}}
{{--                  title="@lang('village/fields.village_center')" alt="@lang('village/fields.village_center')"/>--}}
        </map>
        <div id="village_map" class="f{{ $village->world->type ?? '' }}">
{{--            @foreach($village->buildings->where('location', '<=', 18)  as $building)--}}
{{--                <img src="{{ asset('images/x.gif') }}"--}}
{{--                     class="reslevel rf{{ $building->location }} level{{ $building->level }}"--}}
{{--                     alt="{{ trans('buildings.' . get_name_from_class($building) . '.name') }} @lang('buildings.level') {{ $building->level }}"/>--}}
{{--            @endforeach--}}






            <img src="{{ asset('img/x.gif') }}" class="reslevel rf1 level0" alt="Gozd Level 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf2 level0" alt="Glina Level 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf3 level0" alt="Rudnik železa Level 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf4 level0" alt="Polje Level 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf5 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf6 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf7 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf8 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf9 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf10 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf11 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf12 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf13 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf14 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf15 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf16 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf17 level0" alt=" 0">
            <img src="{{ asset('img/x.gif') }}" class="reslevel rf18 level0" alt=" 0">
            <img id="resfeld" usemap="#rx" src="{{ asset('img/x.gif') }}" alt="">




            <img id="resfeld" usemap="#rx" src="{{ asset('images/x.gif') }}"/>
        </div>
        <div id="map_details">
            <br/><br/>
{{--            @include('village.movements')--}}
{{--            @include('village.production')--}}
{{--            @include('village.units')--}}
{{--            @if ($village->getBuildingsQueue()->whereNotInstanceOf(\App\Game\Buildings\Queues\Demolition::class)->isNotEmpty())--}}
{{--                @include('village.buildings_queue')--}}
{{--            @endif--}}
            <br/><br/><br/><br/><br/><br/>
        </div>
    </div>
@endsection

@section('modal')

@endsection

@section('css')
    <style>
        /* for menu */
        #container {
            width: 30px;
            height: 60px;
            position: relative;
        }

        #wrapper > #container {
            display: table;
            position: static;
        }

        #container div {
            position: absolute;
            top: 50%;
        }

        #container div div {
            position: relative;
            top: -50%;
        }

        #container > div {
            display: table-cell;
            vertical-align: middle;
            position: static;
        }
    </style>
@endsection

@section('js')
@endsection
