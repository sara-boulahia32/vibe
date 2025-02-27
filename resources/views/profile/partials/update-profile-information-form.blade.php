<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm text-gray-300">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-300" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="pseudo" :value="__('Pseudo')" class="text-gray-300" />
            <x-text-input id="pseudo" name="pseudo" type="text" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" :value="old('pseudo', $user->pseudo)" required />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('pseudo')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-300">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline text-sm text-purple-400 hover:text-purple-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="bio" :value="__('Bio')" class="text-gray-300" />
            <textarea id="bio" name="bio" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500" rows="3">{{ old('bio', $user->bio) }}</textarea>
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('bio')" />
        </div>

        <div>
            <x-input-label for="profile_photo" :value="__('Profile Photo')" class="text-gray-300" />
            <input id="profile_photo" name="profile_photo" type="file" class="mt-1 block w-full bg-gray-700/50 border border-gray-600 text-white rounded-xl focus:ring-purple-500 focus:border-purple-500">
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('profile_photo')" />

            @if ($user->profile_photo)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo" class="w-20 h-20 rounded-full object-cover">
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700">
                {{ __('Save') }}
            </x-primary-button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-green-400">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>