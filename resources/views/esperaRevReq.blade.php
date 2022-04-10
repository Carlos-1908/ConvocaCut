<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div>
            <h1>Espera a que tus requerimentos sean revisados por un profesor.</h1>
        </div>
        
    </x-auth-card>
</x-guest-layout>
