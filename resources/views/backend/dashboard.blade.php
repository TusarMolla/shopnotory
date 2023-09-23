@extends('master')

@section('header')
    <link rel="stylesheet" href="{{ resources_path() . '/css/app.css' }}">
@endsection

@section('body')
    <div class="d-flex">
        <div class="sidebar ">

            @include('utility.backend.sidebar')
        </div>
        <div class="">

            @include('utility.backend.header')
            <div class="dashboard-body">
                @include($page)
            </div>
        </div>




    </div>
@endsection
