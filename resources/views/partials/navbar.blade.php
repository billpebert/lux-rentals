{{-- Fixed header + collapsible nav below lg (1024px). Desktop: full navbar + CTAs. --}}
<div
    class="relative"
    x-data="{ open: false }"
    x-on:keydown.escape.window="open = false"
>
    <flux:header class="fixed! top-0 left-0 right-0 w-full backdrop-blur-xl bg-zinc-800/50 border-b border-white/10 z-50 px-0!">
        <div class="flex items-center justify-between w-full container py-3 sm:py-4 gap-3">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="shrink-0 w-fit z-1" wire:navigate>
                <img src="{{ asset('assets/logo.webp') }}" alt="{{ config('app.name') }}" class="h-7 sm:h-8 w-auto" />
            </a>

            {{-- Desktop: Navigation + CTAs --}}
            <div class="hidden lg:flex flex-1 items-center justify-between gap-4 min-w-0 ml-2">
                <flux:navbar class="min-w-0 flex-wrap mx-auto justify-end">
                    <flux:navbar.item wire:navigate href="{{ route('home') }}" class="lg:**:data-content:text-base text-white! data-current:text-accent! font-medium! tracking-[-0.3px]!">Home</flux:navbar.item>
                    <flux:navbar.item wire:navigate href="{{ route('about-us') }}" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">About Us</flux:navbar.item>
                    <flux:navbar.item wire:navigate href="{{ route('our-fleet') }}" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Our Fleet (Cars)</flux:navbar.item>
                    <flux:dropdown>
                        <flux:navbar.item icon:trailing="chevron-down" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Services</flux:navbar.item>
                        <flux:navmenu>
                            <flux:navmenu.item wire:navigate href="{{ route('wedding-car-hire') }}">Wedding Car Hire</flux:navmenu.item>
                            <flux:navmenu.item wire:navigate href="{{ route('events-car-hire') }}">Events Car Hire</flux:navmenu.item>
                            <flux:navmenu.item wire:navigate href="{{ route('chauffeur-service') }}">Chauffeur Service</flux:navmenu.item>
                            <flux:navmenu.item wire:navigate href="{{ route('corporate-car-hire') }}">Corporate Car Hire</flux:navmenu.item>
                        </flux:navmenu>
                    </flux:dropdown>
                    <flux:navbar.item wire:navigate href="{{ route('blog') }}" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Blog</flux:navbar.item>
                    <flux:navbar.item wire:navigate href="{{ route('contact-us') }}" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Contact Us</flux:navbar.item>
                </flux:navbar>

                <div class="flex items-center gap-2 xl:gap-4 shrink-0">
                    <flux:button
                        href="{{ route('car-hire') }}"
                        variant="primary"
                        wire:navigate
                        class="whitespace-nowrap text-sm xl:text-base"
                    >
                        Car Hire
                    </flux:button>

                    <flux:button
                        href="{{ route('login') }}"
                        wire:navigate
                        variant="outline-primary"
                        class="whitespace-nowrap text-sm xl:text-base"
                    >
                        Account
                    </flux:button>
                </div>
            </div>

            {{-- Mobile / tablet menu toggle --}}
            <button
                type="button"
                class="lg:hidden inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg text-white hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-zinc-800 z-[1]"
                x-on:click="open = ! open"
                x-bind:aria-expanded="open"
                aria-controls="mobile-public-nav"
                aria-label="Toggle navigation menu"
            >
                <span class="sr-only" x-text="open ? 'Close menu' : 'Open menu'"></span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" x-show="! open" x-cloak>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" x-show="open" x-cloak>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </flux:header>

    {{-- Mobile drawer backdrop --}}
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 z-[60] bg-zinc-950/70 backdrop-blur-sm lg:hidden"
        x-on:click="open = false"
        x-cloak
    ></div>

    {{-- Mobile drawer panel --}}
    <div
        id="mobile-public-nav"
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-y-0 right-0 z-[70] flex w-full max-w-sm flex-col border-l border-white/10 bg-zinc-900 shadow-2xl lg:hidden"
        role="dialog"
        aria-modal="true"
        aria-label="Main navigation"
        x-cloak
    >
        <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">
            <span class="font-heading font-semibold text-lg text-white">Menu</span>
            <button
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg text-white hover:bg-white/10"
                x-on:click="open = false"
                aria-label="Close menu"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="flex flex-1 flex-col gap-1 overflow-y-auto p-3" aria-label="Primary">
            <a href="{{ route('home') }}" wire:navigate class="rounded-lg px-3 py-2.5 text-base font-medium text-white hover:bg-white/10" x-on:click="open = false">Home</a>
            <a href="{{ route('about-us') }}" wire:navigate class="rounded-lg px-3 py-2.5 text-base font-medium text-white hover:bg-white/10" x-on:click="open = false">About Us</a>
            <a href="{{ route('our-fleet') }}" wire:navigate class="rounded-lg px-3 py-2.5 text-base font-medium text-white hover:bg-white/10" x-on:click="open = false">Our Fleet (Cars)</a>

            <p class="px-3 pt-2 text-xs font-semibold uppercase tracking-wider text-white/50">Services</p>
            <a href="{{ route('wedding-car-hire') }}" wire:navigate class="rounded-lg py-2 pl-6 pr-3 text-base font-medium text-white/90 hover:bg-white/10" x-on:click="open = false">Wedding Car Hire</a>
            <a href="{{ route('events-car-hire') }}" wire:navigate class="rounded-lg py-2 pl-6 pr-3 text-base font-medium text-white/90 hover:bg-white/10" x-on:click="open = false">Events Car Hire</a>
            <a href="{{ route('chauffeur-service') }}" wire:navigate class="rounded-lg py-2 pl-6 pr-3 text-base font-medium text-white/90 hover:bg-white/10" x-on:click="open = false">Chauffeur Service</a>
            <a href="{{ route('corporate-car-hire') }}" wire:navigate class="rounded-lg py-2 pl-6 pr-3 text-base font-medium text-white/90 hover:bg-white/10" x-on:click="open = false">Corporate Car Hire</a>

            <a href="{{ route('blog') }}" wire:navigate class="rounded-lg px-3 py-2.5 text-base font-medium text-white hover:bg-white/10" x-on:click="open = false">Blog</a>
            <a href="{{ route('contact-us') }}" wire:navigate class="rounded-lg px-3 py-2.5 text-base font-medium text-white hover:bg-white/10" x-on:click="open = false">Contact Us</a>
        </nav>

        <div class="border-t border-white/10 p-4 flex flex-col gap-2">
            <flux:button href="{{ route('car-hire') }}" variant="primary" class="w-full justify-center" wire:navigate x-on:click="open = false">
                Car Hire
            </flux:button>
            <flux:button href="{{ route('login') }}" variant="outline-primary" class="w-full justify-center" wire:navigate x-on:click="open = false">
                Account
            </flux:button>
        </div>
    </div>
</div>
