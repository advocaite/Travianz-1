<table id="vlist" cellpadding="1" cellspacing="1">
    <thead>
    <tr>
        <td colspan="3"><a href="{{ route('overview') }}" accesskey="9">@choice('village/list.village' , 2):</a></td>
    </tr>
    </thead>
    <tbody>
{{--    @foreach (Auth::user()->villages()->with('world')->get() as $town)--}}
    @foreach ([] as $town)
        <tr>
            <td class="dot {{ $village->world->id == $town->world->id ? 'hl' : '' }}">●</td>
            <td class="link">
                <a href="{{ route(Route::currentRouteName(), ['village' => $town->world->id]) }}">{{ $town->name }}</a>
            </td>
            <td class="aligned_coords">
                <div class="cox">({{ $town->world->x }}</div>
                <div class="pi">|</div>
                <div class="coy">{{ $town->world->y }})</div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
