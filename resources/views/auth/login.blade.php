@extends('layouts.base')

@section('content')
<div class="row mt-5 justify-content-center">
  <div class="card m-2 col col-md-6 col-lg-5">
    <form method="POST" action="{{ route('login') }}" class="card-body"
        novalidate>
      @csrf

      {{-- Email --}}
      <div class="mb-2">
        <x-forms.input-label for="email" :value="__('Email')" />
        <x-forms.text-input
            type="email"
            name="email"
            id="email"
            placeholder="your-email@email.com"
            :value="old('email')" />
        <x-forms.input-error name="email" />
      </div>

      {{-- Password --}}
      <div class="mb-3">
        <x-forms.input-label for="password" :value="__('Password')" />
        <x-forms.text-input
            type="password"
            name="password"
            id="password"
            placeholder="your-password"
            :value="old('password')" />
        <x-forms.input-error name="password" />
      </div>

      {{-- Remember Me --}}
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
