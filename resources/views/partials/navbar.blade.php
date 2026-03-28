<flux:header class="fixed! top-0 left-0 right-0 w-full backdrop-blur-xl bg-black/5 border-b border-white/10 z-50 px-0!">
    <div class="flex items-center justify-between w-full container py-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="shrink-0 w-fit">
            <img src="{{ asset('assets/logo.webp') }}" alt="{{ config('app.name') }}" class="h-8 w-auto" />
        </a>

        {{-- Navigation links --}}
        <flux:navbar>
            <flux:navbar.item href="{{ route('home') }}" class="lg:**:data-content:text-base text-white! data-current:text-accent! font-medium! tracking-[-0.3px]!">Home</flux:navbar.item>
            <flux:navbar.item href="#" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">About Us</flux:navbar.item>
            <flux:navbar.item href="#" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Our Fleet (Cars)</flux:navbar.item>
            <flux:navbar.item href="#" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Services</flux:navbar.item>
            <flux:navbar.item href="#" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Blog</flux:navbar.item>
            <flux:navbar.item href="#" class="lg:**:data-content:text-base text-white! font-medium! data-current:text-accent! tracking-[-0.3px]!">Contact Us</flux:navbar.item>
        </flux:navbar>

        {{-- CTA Buttons --}}
        <div class="flex items-center gap-4 shrink-0 w-56 justify-end">
            <flux:button
                href="#"
                variant="primary"
            >
                Car Hire
            </flux:button>

            <flux:button
                href="#"
                variant="outline-primary"
            >
                Account
            </flux:button>
        </div>

    </div>
</flux:header>
