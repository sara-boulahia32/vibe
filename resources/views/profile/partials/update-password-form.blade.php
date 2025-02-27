<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-gray-300">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" class="text-gray-300" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-400" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" class="text-gray-300" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-400" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-300" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-400" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
</section>