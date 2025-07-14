@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'Profil'
    ])

  {{-- Informasi Akun --}}
  @include('partials.info-account')

  <br>
  <br>
  <br>
  <br>
  <br>

 



@endsection