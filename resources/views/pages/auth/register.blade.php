<x-layouts::auth :title="__('Register')" :heading="__('Register')" card-width="w-[730px]">
    {{-- DEFAULT REGISTRATION FORM --}}
    {{-- <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Name -->
            <flux:input
                name="name"
                :label="__('Name')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <flux:input
                name="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
            />

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Confirm password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                viewable
            />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div> --}}

    <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-4">
        @csrf

        {{-- Title --}}
        <div class="flex flex-col gap-2">
            <flux:label for="title" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                {{ __('Title (required)') }}
            </flux:label>
            <div class="relative">
                <select
                    id="title"
                    name="title"
                    required
                    class="w-full h-[60px] bg-[#e9e9e9] rounded-[8px] px-4 pr-10 font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[#6b7280] border-none focus:outline-none focus:ring-2 focus:ring-light-gold appearance-none"
                >
                    @foreach(['Mr', 'Mrs', 'Ms', 'Miss', 'Dr', 'Prof'] as $option)
                        <option value="{{ $option }}" {{ old('title') === $option ? 'selected' : '' }}>{{ $option }}</option>
                    @endforeach
                </select>
                <svg class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 size-3 text-[#6b7280]" viewBox="0 0 10 6" fill="none">
                    <path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            @error('title')
                <p class="font-sans text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- First Name + Last Name --}}
        <div class="flex gap-4">
            <div class="flex-1 flex flex-col gap-2">
                <flux:label for="first_name" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                    {{ __('First Name (required)') }}
                </flux:label>
                <flux:input id="first_name" variant="filled" name="first_name" :value="old('first_name')" placeholder="{{ __('First Name') }}" required autofocus autocomplete="given-name" />
                @error('first_name')
                    <p class="font-sans text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1 flex flex-col gap-2">
                <flux:label for="last_name" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                    {{ __('Last Name (required)') }}
                </flux:label>
                <flux:input id="last_name" variant="filled" name="last_name" :value="old('last_name')" placeholder="{{ __('Last Name') }}" required autocomplete="family-name" />
                @error('last_name')
                    <p class="font-sans text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Email + Phone --}}
        <div class="flex gap-4">
            <div class="flex-1 flex flex-col gap-2">
                <flux:label for="email" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                    {{ __('Email Address (Required)') }}
                </flux:label>
                <flux:input id="email" variant="filled" name="email" type="email" :value="old('email')" placeholder="email@example.com" required autocomplete="email" />
                @error('email')
                    <p class="font-sans text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-1 flex flex-col gap-2">
                <flux:label for="phone" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                    {{ __('Phone (required)') }}
                </flux:label>
                <flux:input id="phone" variant="filled" name="phone" type="tel" :value="old('phone')" placeholder="{{ __('Phone number') }}" required autocomplete="tel" />
                @error('phone')
                    <p class="font-sans text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Date of Birth --}}
        <div class="flex flex-col gap-2">
            <flux:label for="date_of_birth" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                {{ __('Date of Birth (DD/MM/YYYY) (required)') }}
            </flux:label>
            <flux:input id="date_of_birth" variant="filled" name="date_of_birth" type="date" :value="old('date_of_birth')" required />
            @error('date_of_birth')
                <p class="font-sans text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Postcode + Look Up --}}
        <div class="flex gap-4 items-end">
            <div class="flex-1 flex flex-col gap-2">
                <flux:label for="postcode" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                    {{ __('Postcode (required)') }}
                </flux:label>
                <flux:input id="postcode" variant="filled" name="postcode" :value="old('postcode')" placeholder="{{ __('Postcode') }}" required autocomplete="postal-code" />
                @error('postcode')
                    <p class="font-sans text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <flux:button type="button" variant="primary">
                {{ __('Look Up') }}
            </flux:button>
        </div>

        {{-- Password --}}
        <div class="flex flex-col gap-2">
            <flux:label for="password" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                {{ __('Password (required)') }}
            </flux:label>
            <flux:input id="password" variant="filled" name="password" type="password" placeholder="{{ __('Password') }}" required autocomplete="new-password" viewable />
            @error('password')
                <p class="font-sans text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="flex flex-col gap-2">
            <flux:label for="password_confirmation" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">
                {{ __('Confirm Password (required)') }}
            </flux:label>
            <flux:input id="password_confirmation" variant="filled" name="password_confirmation" type="password" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password" viewable />
            @error('password_confirmation')
                <p class="font-sans text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Terms & Conditions --}}
        <flux:field variant="inline">
            <flux:checkbox id="terms" name="terms" :checked="old('terms')" required />
            <flux:label for="terms">
                {{ __('By signing up, I agree to the Terms & Conditions.') }}
            </flux:label>
        </flux:field>
        @error('terms')
            <p class="font-sans text-sm text-red-500">{{ $message }}</p>
        @enderror

        {{-- Submit --}}
        <flux:button variant="primary">
            {{ __('Register') }}
        </flux:button>
    </form>

    {{-- Sign in link --}}
    <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[#6b7280]">
        {{ __('Already have an account?') }}
        <a href="{{ route('login') }}" class="font-semibold hover:text-light-gold transition-colors">{{ __('Sign in') }}</a>
    </p>
</x-layouts::auth>
