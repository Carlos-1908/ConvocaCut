<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name Concurso -->
            <div>
                <x-label for="nameConcurso" :value="__('Nombre del Concurso')" />

                <x-input id="nameConcurso" class="block mt-1 w-full" type="text" name="nameConcurso" :value="old('nameConcurso')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Crear nuevo Concurso XD') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
