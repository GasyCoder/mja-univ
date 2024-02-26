<x-guest-layout>
    <div class="mb-4 text-sm text-green-600 dark:text-green-200">
        @if(auth()->check())
        {{ __('Nous avons envoyé le code par e-mail') }} : {{ substr(auth()->user()->email, 0, 2) . '******' .
        substr(auth()->user()->email, -2) }}
        @else
        {{ __('Vous devez être connecté pour effectuer cette action.') }}
        @endif
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-session-error class="mb-4" :error="session('error')" />
   <form method="POST" action="{{ route('2fa.post') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('2FA Code')" />
            <x-text-input id="code" class="block w-full mt-1" type="number" name="code" :value="old('code')" required
                autofocus />
            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex items-center justify-start mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('2fa.resend') }}">
                {{ __('Resend Code?') }}
            </a>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Submit') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
