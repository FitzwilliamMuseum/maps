@if ($enabled)
    <div class="gnw-map-service gnw-map-service__{{ $service }}">
        <div class="gnw-map fade" data-map-{{ $service }}="{{ json_encode(compact('lat', 'lng', 'zoom')) }}" data-map-service="{{ json_encode(config('vendor.maps.services.'.$service)) }}" data-map-markers="{{ json_encode($markers ?? []) }}"></div>
    </div>
@endif
