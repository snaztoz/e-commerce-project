@extends('layouts.base')

@section('content')
<div class="row mt-5 justify-content-center">
  <div class="card m-2 col col-md-6 col-lg-5">
    <form method="POST" action="{{ route('register') }}" class="card-body"
        novalidate>
      @csrf

      {{-- Username --}}
      <div class="mb-2">
        <x-forms.input-label for="name" :value="__('Username')" />
        <x-forms.text-input
            type="text"
            name="name"
            id="name"
            placeholder="yourName"
            :value="old('name')" />
        <x-forms.input-error name="name" />
      </div>

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
      <div class="mb-2">
        <x-forms.input-label for="password" :value="__('Password')" />
        <x-forms.text-input
            type="password"
            name="password"
            id="password"
            placeholder="your-password"
            :value="old('password')" />
        <x-forms.input-error name="password" />
      </div>

      {{-- Password Confirmation --}}
      <div class="mb-4">
        <x-forms.input-label
            for="password_confirmation"
            :value="__('Confirm Password')" />
        <x-forms.text-input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            placeholder="your-password-again"
            :value="old('password_confirmation')" />
        <x-forms.input-error name="password_confirmation" />
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
