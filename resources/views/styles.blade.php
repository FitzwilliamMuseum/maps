@if ($enabled)
    @if ($service == 'osm' || $service == 'bing' || $service == 'mapquest')
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
    @endif
    @if ($service == 'mapquest')
        <link rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest-core.css" type="text/css">
    @endif
    <link rel="stylesheet" href="{{ asset(mix('css/index.css', 'vendor/maps')) }}" type="text/css">
@endif
