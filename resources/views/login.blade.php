@extends('burst::layout.base')

@section('title')
{{ __('burst::trans.register.login.header') }}
@endsection


@section('content')
    
<div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
        {{ __('burst::trans.login.header') }}
      </h2>
    </div>
  
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="{{ route('burst.login') }}" method="POST">
            @csrf
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
              {{ __('burst::trans.labels.email') }}
            </label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
            </div>
          </div>
  
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">
              {{ __('burst::trans.labels.password') }}
            </label>
            <div class="mt-1">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
            </div>
          </div>
  
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox" class="w-4 h-4 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
              <label for="remember_me" class="block ml-2 text-sm text-gray-900">
                {{ __('burst::trans.labels.remember') }}
              </label>
            </div>
  
            <div class="text-sm">
              <a href="{{ route('burst.password.request') }}" class="font-medium text-primary-600 hover:text-primary-500">
                {{ __('burst::trans.labels.forgot_password') }}
              </a>
            </div>
          </div>
  
          <div>
            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                {{ __('burst::trans.login.button') }}
            </button>
          </div>
        </form>
  
      </div>
    </div>
  </div>



@endsection
