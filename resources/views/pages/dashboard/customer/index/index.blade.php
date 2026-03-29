<div class="flex flex-col gap-4 sm:gap-8">

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 text-light-gold shrink-0" aria-hidden="true">
            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
        </svg>
        <nav class="flex items-center gap-1 font-sans text-base leading-[27px] tracking-[-0.3px]" aria-label="Breadcrumb">
            <a href="{{ route('dashboard.index') }}" wire:navigate class="text-light-gold hover:text-light-gold/80 transition-colors">
                {{ __('Account') }}
            </a>
            <span class="text-white/60">&nbsp;/&nbsp;</span>
            <span class="text-white/90">{{ __('Profile') }}</span>
        </nav>
    </div>

    {{-- Tab pills --}}
    <div
        class="inline-flex items-center p-1 rounded-full backdrop-blur-[5px] w-fit"
        style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
        role="tablist"
    >
        <button
            wire:click="setTab('bookings')"
            role="tab"
            :aria-selected="$wire.activeTab === 'bookings'"
            @class([
                'flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full font-sans font-medium text-base leading-6 tracking-[-0.3px] transition-colors whitespace-nowrap',
                'bg-light-gold text-zinc-800' => $activeTab === 'bookings',
                'text-[#e9e9e9] hover:text-white' => $activeTab !== 'bookings',
            ])
        >
            {{ __('Bookings') }}
        </button>
        <button
            wire:click="setTab('id-docs')"
            role="tab"
            :aria-selected="$wire.activeTab === 'id-docs'"
            @class([
                'flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full font-sans font-medium text-base leading-6 tracking-[-0.3px] transition-colors whitespace-nowrap',
                'bg-light-gold text-zinc-800' => $activeTab === 'id-docs',
                'text-[#e9e9e9] hover:text-white' => $activeTab !== 'id-docs',
            ])
        >
            {{ __('ID Docs') }}
        </button>
    </div>

    {{-- Tab content --}}
    @if ($activeTab === 'bookings')
        {{-- Bookings panel --}}
        <div
            class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
            style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
            role="tabpanel"
        >
            <div class="flex flex-col gap-4">
                <h1 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-[#e9e9e9]">
                    {{ __('Bookings') }}
                </h1>
                <p class="font-sans text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
                    {{ __('You currently do not have any upcoming bookings.') }}
                </p>
            </div>

            <div>
                <flux:button
                    href="{{ route('car-hire') }}"
                    wire:navigate
                    variant="primary"
                >
                    {{ __('View All Bookings') }}
                </flux:button>
            </div>
        </div>
    @elseif ($activeTab === 'id-docs')
        {{-- ID Docs panel --}}
        <div
            class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
            style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
            role="tabpanel"
        >
            <div class="flex flex-col gap-4">
                <h1 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-[#e9e9e9]">
                    {{ __('ID Documents') }}
                </h1>
                <p class="font-sans text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
                    {{ __('You have not uploaded any identification documents yet.') }}
                </p>
            </div>

            <div>
                <flux:button variant="primary">
                    {{ __('Upload Document') }}
                </flux:button>
            </div>
        </div>
    @endif

</div>
