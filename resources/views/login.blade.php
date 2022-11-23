@extends('layout.app')
@section('content')


<style>
  .btn-close{
    background-size: 0.7em;
  }
</style>
<div class="container mt-5" style="width: 500px ; box-shadow: 7px 7px 14px #828282,-7px -7px 14px #fff;padding: 30px" >
  <h1 class="text-center">Login</h1>

  @if(session()->has('fail'))
  <div class="alert alert-danger alert-dismissible py-1" role="alert">
    {{ session()->get('fail') }}
    <button type="button" class="btn-close" style="padding: 10px" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
      @endif

<form action="{{ route('loginuser') }}" method="post" style="color:  rgb(30, 43, 46)">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email Address</label>
      <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div class="invalid-feedback">
        @error('email')
            {{ $message }}
      @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="exampleInputPassword1">
      <div class="invalid-feedback">
        @error('password')
    {{ $message }}
      @enderror
      </div>
    </div>

    <button type="submit" class="btn btn-primary form-control mt-3" style="border-radius: 10px">Login</button>

    <p class="mt-3 text-center">Don't Have an Account? <span><a href="{{ route('signupuser') }}"> Sign Up</a></span></p>
  </form>
</div>
@endsection
