@extends('layouts.base')

@section('content')
<div class="row mt-5 justify-content-center">
  <div class="card m-2 col col-md-6 col-lg-5">
    <form method="POST" action="{{ route('login') }}" class="card-body"
        novalidate>
      @csrf

      <div class="mb-2">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" class="form-control @error('email') is-invalid
            @enderror" id="email" name="email"
            placeholder="your-email@email.com" required>
        <div class="invalid-feedback">
          @error('email') {{ $message }} @enderror
        </div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" class="form-control @error('email') is-invalid
            @enderror" id="password" name="password" placeholder="your-password"
            required>
        <div class="invalid-feedback">
          @error('password') {{ $message }} @enderror
        </div>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="remember">
        <label class="form-check-label" for="remember">
          {{ __('Remember me') }}
        </label>
      </div>

      <button type="submit" class="btn btn-primary mb-3 w-100">Login</button>

      <p class="text-center">
        <a href="{{ route('register') }}">
          {{ __('Doesn\'t have an account?') }}
        </a>
      </p>
    </form>
  </div>
</div>
@endsection
