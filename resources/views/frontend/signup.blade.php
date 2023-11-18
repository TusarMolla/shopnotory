@extends('master')

@section('header')
    <link href="{{ res_path() }}/css/app.css" rel="stylesheet">
@endsection

@section('body')

@if($errors)
   @php
       $error = $errors->messages();
   @endphp 
@endif

    <div class="login-card mt-3">
        <h1 class="h3 text-center">Registration To Shopnotory</h1>
        <form method="POST" action="{{url('signup/store')}}">
          @csrf
            <div class="mb-3">
                <label for="nameId" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="nameId">
                <div>
                    <p class="text-danger">{{$error['name'][0]??''}}</p>
                </div>
            </div>

            <div id="emailDivId" class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" id="email" type="email" class="form-control">
                <div class="text-end">
                    <button type="button" class="btn btn-link p-0" onclick="changeRegisterBy(true)">or use phone</button>
                </div>
            </div>
            <div id="phoneDivId" class="mb-3 d-none">
                <label class="form-label" for="phone">Phone</label>
                <input name="phone" class="form-control" type="tel" id="phone"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                <div class="text-end">
                    <button type="button" class="btn btn-link p-0" onclick="changeRegisterBy(false)">or use email</button>
                </div>
            </div>
            <div class="mb-3">
                <label for="passwordId" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="passwordId">
                <div>
                    <p class="text-danger">{{$error['password'][0]??''}}</p>
                </div>
            </div>
            <button type="submit" class="submit-btn1">Registration</button>
        </form>
        <p class="mt-1 mb-1 text-center">OR</p>
        <a class="submit-btn2" href="{{ url('signin') }}">Login</a>

    </div>
@endsection

@section('script')
    <script>
        function changeRegisterBy(showPhone) {
            var phoneSection = document.getElementById("phoneDivId");
            var emailSection = document.getElementById("emailDivId");
            if (showPhone === true) {
                phoneSection.classList.remove("d-none")
                emailSection.classList.add("d-none");
            } else {
                phoneSection.classList.add("d-none")
                emailSection.classList.remove("d-none");
            }

        }
    </script>
@endsection
