@extends('master')

@section('header')
    <link rel="stylesheet" href="{{ res_path() . '/css/app.css' }}">
@endsection

@section('body')
    <div class="d-flex">
        <div class="sidebar">
            @include('utility.backend.sidebar')
        </div>
        <div class="dashboard-body">
            @include('utility.backend.header')
            <div class="dashboard-content">
                @yield('content-body')

            </div>

        </div>




    </div>
@endsection
