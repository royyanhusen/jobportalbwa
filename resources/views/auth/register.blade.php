<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- avatar -->
        <div class="mt-4">
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" :value="old('avatar')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>

        <!-- Account Type -->
        <div class="mt-4">
            <x-input-label for="account_type" :value="__('Account Type')" />
            <select name="account_type" class="w-full border border-salte-300 rounded-lg">
                <option value="employee">Employee</option>
                <option value="employer">Employer</option>
            </select>
            <x-input-error :messages="$errors->get('account_type')" class="mt-2" />
        </div>

        <!-- occupation -->
        <div class="mt-4">
            <x-input-label for="occupation" :value="__('Occupation')" />
            <x-text-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" :value="old('occupation')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
        </div>

        <!-- Experience -->
        <div class="mt-4">
            <x-input-label for="experience" :value="__('Experience')" />
            <x-text-input id="experience" class="block mt-1 w-full" type="number" name="experience" :value="old('experience')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
