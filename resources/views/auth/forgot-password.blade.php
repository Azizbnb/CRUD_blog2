<x-guest-layout>
    <x-auth-card>
    <x-slot name="logo">
            <x-logo/> 
        </x-slot>
        <x-slot name="bienvenue">
            <a href="/">
                <x-bienvenue class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <x-slot name="guestMode">
            <a href="/">
                <x-guestMode class="w-20 h-20 fill-current"/>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('mot de passe oublié ? pas de problème. Veuillez renseigner votre adresse email et nous vous enverrons un lien pour changer votre mot de passe.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Recevoir le lien') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
