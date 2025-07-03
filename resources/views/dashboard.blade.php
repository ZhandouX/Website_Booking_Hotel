@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- Carousel --}}
    @include('partials.carousel')

    {{-- Pencarian --}}
    @include('partials.search')

    {{-- Welcome Section --}}
    @include('partials.welcome')

    {{-- Video Section --}}
    @include('partials.video')

    {{-- Newsletter --}}
    @include('partials.newsletter')

@endsection

@push('scripts')
    <!-- Java Script Pencarian -->
    <script>
        const pencarianRouteUrl = "{{ route('hasil_pencarian') }}";
    </script>
    <script src="{{ asset('js-01/pencarian.js') }}"></script>
    <script> new WOW().init(); </script>
@endpush