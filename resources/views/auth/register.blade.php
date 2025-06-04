@extends('layout')

@section('content')
    <div class="flex items-center justify-center min-h-[70vh]">
        <div class="max-w-md w-full bg-white rounded-lg shadow p-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div>
                    <x-input-label for="name" :value="'Nombre'" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Correo electrónico -->
                <div class="mt-4">
                    <x-input-label for="email" :value="'Correo electrónico'" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Contraseña -->
                <div class="mt-4">
                    <x-input-label for="password" :value="'Contraseña'" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirmar contraseña -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="'Confirmar contraseña'" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        ¿Ya tenés una cuenta?
                    </a>

                    <x-primary-button class="ms-4 bg-blue-600 text-white hover:bg-blue-700 font-bold">
                        Registrarse
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection