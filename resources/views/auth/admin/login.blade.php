@extends('auth.admin.layout')

@section('content')
    <form action="{{ route('admin-login-store') }}" method="POST" class="mt-5">
        @csrf

        @if (session('error'))
            <p class="alert alertdanger">{{ session('error') }}</p>
        @endif


        <h4>Admin Login</h4>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                aria-describedby="emailHelp" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
