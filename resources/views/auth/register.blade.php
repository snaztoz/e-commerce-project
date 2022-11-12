@extends('layouts.base')

@section('content')
<div class="row mt-5 justify-content-center">
  <div class="card m-2 col col-md-6 col-lg-5">
    <form method="POST" action="{{ route('register') }}" class="card-body"
        novalidate>
      @csrf

      {{-- Username --}}
      <div class="mb-2">
        <label for="name" class="form-label">{{ __('Username') }}</label>
        <input type="text" class="form-control @error('name') is-invalid
            @enderror" id="name" name="name" placeholder="alice"
            value="{{ old('name') }}" required>
        <div class="invalid-feedback">
          @error('name') {{ $message }} @enderror
        </div>
      </div>

      {{-- Email --}}
      <div class="mb-2">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" class="form-control @error('email') is-invalid
            @enderror" id="email" name="email" value="{{ old('email') }}"
            placeholder="your-email@email.com" required>
        <div class="invalid-feedback">
          @error('email') {{ $message }} @enderror
        </div>
      </div>

      {{-- Password --}}
      <div class="mb-2">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" class="form-control @error('password') is-invalid
            @enderror" id="password" name="password" placeholder="your-password"
            required>
        <div class="invalid-feedback">
          @error('password') {{ $message }} @enderror
        </div>
      </div>

      {{-- Password Confirmation --}}
      <div class="mb-4">
        <label for="password_confirmation" class="form-label">
          {{ __('Confirm Password') }}
        </label>
        <input type="password" class="form-control
            @error('password_confirmation') is-invalid @enderror"
            id="password_confirmation" name="password_confirmation"
            placeholder="confirm password"
            required>
        <div class="invalid-feedback">
          @error('password_confirmation') {{ $message }} @enderror
        </div>
      </div>

      <button type="submit" class="btn btn-primary mb-3 w-100">Register</button>

      <p class="text-center">
        <a href="{{ route('login') }}">
          {{ __('Already registered?') }}
        </a>
      </p>
    </form>
  </div>
</div>
@endsection
