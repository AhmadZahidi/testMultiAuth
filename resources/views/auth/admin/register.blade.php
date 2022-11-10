@extends('auth.admin.layout')

@section('content')
<form action="{{route("admin-register-store")}}" method="POST" class="mt-5">
    @csrf
    
    @if ($errors->any())
        <p class="alert alertdanger">Please check your input</p>
    @endif


    <h4>Admin Register</h4>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control @error ('email') is-invalid @enderror" name="name" aria-describedby="emailHelp" value="{{old('name')}}">
        @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
      </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control @error ('email') is-invalid @enderror" name="email" aria-describedby="emailHelp" value="{{old('email')}}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control @error ('password') is-invalid @enderror" name="password" value="{{old('password')}}">
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
      </div>
  
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Your Password</label>
          <input type="password" class="form-control @error ('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password_confirmation')}}">
          @error('password_confirmation')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
      </div>
  
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
    @endsection