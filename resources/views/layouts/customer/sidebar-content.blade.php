{{-- User header --}}
<div class="flex flex-col gap-4">
    <h2 class="font-heading font-bold text-[28px] leading-[1.3] tracking-[-0.5px] text-white">
        <span class="text-white/60">{{ auth()->user()?->name }}'s</span>
        {{ __('Account') }}
    </h2>

    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 w-fit">
        <span class="font-sans text-sm leading-6 tracking-[-0.3px]">
            <span class="text-white/60">Account</span>
            <span class="text-white font-semibold">&nbsp;#AFU-{{ strtoupper(str_pad(auth()->id() ?? 0, 8, '0', STR_PAD_LEFT)) }}</span>
        </span>
    </div>
</div>

{{-- Navigation --}}
<nav class="flex flex-col gap-2" aria-label="Customer dashboard">
    {{-- Dashboard --}}
    <a
        href="{{ route('dashboard.customer.index') }}"
        wire:navigate
        @class([
            'flex items-center gap-4 px-4 py-[18px] rounded-lg font-sans font-semibold text-base leading-6 tracking-[-0.3px] transition-colors',
            'bg-light-gold text-zinc-800' => request()->routeIs('dashboard.customer.index'),
            'text-[#e9e9e9] hover:bg-white/10' => ! request()->routeIs('dashboard.customer.index'),
        ])
    >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor" class="size-[18px] shrink-0" aria-hidden="true">
            <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h3A1.5 1.5 0 018 3.5v3A1.5 1.5 0 016.5 8h-3A1.5 1.5 0 012 6.5v-3zm9 0A1.5 1.5 0 0112.5 2h2A1.5 1.5 0 0116 3.5v2A1.5 1.5 0 0114.5 7h-2A1.5 1.5 0 0111 5.5v-2zm0 7A1.5 1.5 0 0112.5 9h2A1.5 1.5 0 0116 10.5v4A1.5 1.5 0 0114.5 16h-2A1.5 1.5 0 0111 14.5v-4zm-9 1A1.5 1.5 0 013.5 10h3A1.5 1.5 0 018 11.5v3A1.5 1.5 0 016.5 16h-3A1.5 1.5 0 012 14.5v-3z" clip-rule="evenodd" />
        </svg>
        {{ __('Dashboard') }}
    </a>

    {{-- Manage Subscriptions --}}
    <a
        href="{{ route('dashboard.customer.subscriptions') }}"
        wire:navigate
        @class([
            'flex items-center gap-4 px-4 py-[18px] rounded-lg font-sans font-semibold text-base leading-6 tracking-[-0.3px] transition-colors',
            'bg-light-gold text-zinc-800' => request()->routeIs('dashboard.customer.subscriptions'),
            'text-[#e9e9e9] hover:bg-white/10' => ! request()->routeIs('dashboard.customer.subscriptions'),
        ])
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px] shrink-0" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
        {{ __('Manage Subscriptions') }}
    </a>

    {{-- Manage Bookings --}}
    <a
        href="{{ route('dashboard.customer.bookings') }}"
        wire:navigate
        @class([
            'flex items-center gap-4 px-4 py-[18px] rounded-lg font-sans font-semibold text-base leading-6 tracking-[-0.3px] transition-colors',
            'bg-light-gold text-zinc-800' => request()->routeIs('dashboard.customer.bookings'),
            'text-[#e9e9e9] hover:bg-white/10' => ! request()->routeIs('dashboard.customer.bookings'),
        ])
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px] shrink-0" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
        </svg>
        {{ __('Manage Bookings') }}
    </a>

    {{-- Settings --}}
    <a
        href="{{ route('dashboard.customer.settings.profile') }}"
        wire:navigate
        @class([
            'flex items-center gap-4 px-4 py-[18px] rounded-lg font-sans font-semibold text-base leading-6 tracking-[-0.3px] transition-colors',
            'bg-light-gold text-zinc-800' => request()->routeIs('dashboard.customer.settings.*'),
            'text-[#e9e9e9] hover:bg-white/10' => ! request()->routeIs('dashboard.customer.settings.*'),
        ])
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px] shrink-0" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        {{ __('Settings') }}
    </a>

    {{-- Sign Out --}}
    <form method="POST" action="{{ route('logout') }}" class="w-full">
        @csrf
        <button
            type="submit"
            class="w-full flex items-center gap-4 px-4 py-[18px] rounded-lg font-sans font-semibold text-base leading-6 tracking-[-0.3px] text-[#e9e9e9] hover:bg-white/10 transition-colors text-left"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px] shrink-0" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
            </svg>
            {{ __('Sign Out') }}
        </button>
    </form>
</nav>
