<x-layouts::auth :title="__('Log in')" :heading="__('Please Log In')">
    <div class="flex flex-col gap-6">
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            {{-- Email Address --}}
            <flux:field>
                <flux:label for="email" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-charcoal">{{ __('Email Address') }}</flux:label>
                <flux:input
                    id="email"
                    variant="filled"
                    name="email"
                    :value="old('email')"
                    type="email"
                    required
                    autofocus
                    autocomplete="email"
                    placeholder="email@example.com"
                />
            </flux:field>

            {{-- Password --}}
            <flux:field>
                <flux:label for="password" class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-charcoal">{{ __('Password') }}</flux:label>
                <flux:input
                    id="password"
                    variant="filled"
                    name="password"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                />
            </flux:field>

            <!-- Remember Me + Forgot Password -->
            <div class="flex items-center justify-between">
                <flux:checkbox name="remember" :label="__('Remember Me')" :checked="old('remember')" />

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-muted-gray hover:text-charcoal transition-colors">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit -->
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Log in') }}
            </flux:button>
        </form>

        @if (Route::has('register'))
            <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-muted-gray">
                {{ __("Don't have an account yet?") }}
                <a href="{{ route('register') }}" class="font-semibold hover:text-light-gold transition-colors">{{ __('Register') }}</a>
            </p>
        @endif
    </div>
</x-layouts::auth>
