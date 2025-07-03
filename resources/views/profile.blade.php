@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'Profile'
    ])

  {{-- Informasi Akun --}}
  @include('partials.info-account')

  {{-- Testimonials --}}
  @include('partials.testimonials')

  {{-- Newsletter --}}
  @include('partials.newsletter')

@endsection