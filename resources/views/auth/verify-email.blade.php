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
            {{ __('l'ALMJ vous remercie d'avoir créer un compte sur notre site ! Avant de commencer, Nous devons verifier votre adresse e-mail en cliquant sur le lien pour une question de securité. the email.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
