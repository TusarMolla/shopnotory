@extends('master')

@section('header')
<link href="{{res_path()}}/css/app.css" rel="stylesheet">  
@endsection

@section('body')


<div class="login-card mt-3">
    <h1 class="h3 text-center">Login To Shopnotory</h1>
    <form method="POST" action="{{url('signin')}}">
      @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div class="or-phone text-end text-decoration-underline"><a href="#">use phone</a></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
  <button type="submit" class="submit-btn1">Login</button>
</form> 
<p class="mt-1 mb-1 text-center">OR</p>
  <a class="submit-btn2" href="{{url('signup')}}">Registration</a>
  
</div>

    
@endsection