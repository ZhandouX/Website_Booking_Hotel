@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('sidebar')
    @include('admin.sidebar')
@endsection
@section('dshboard_admin')
    @include('admin.dshboard_admin.index')
@endsection
@section('hotel')
    @include('hotel.json')
@endsection
@section('boking_hotel')
    @include('admin.booking_hotel.index')
@endsection

@section('content')
    <h1>Hello world!</h1>
@endsection