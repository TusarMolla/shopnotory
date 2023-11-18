@extends('master')

@section('header')
    <link rel="stylesheet" href="{{ res_path() . '/css/app.css' }}">
@endsection

@section('body')
<div class="">
    @include('utility.frontend.header')
    <div class="dashboard-body">
        {{-- @include($page) --}}
    </div>
</div>
@endsection
