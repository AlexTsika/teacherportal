@extends('master')

@section('content')

<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-10">
        <div id="map" style="height: 75vh;" class="rounded"></div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var map = L.map('map').setView([50.9651, 5.5022], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([50.9651, 5.5022]).addTo(map);
    });
</script>
@endpush