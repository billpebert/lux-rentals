<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component
{
    //
};
?>

<div>
    <x-public.hero-section image="{{ asset('assets/images/bg-homepage-default.webp') }}">
        <div class="flex flex-col gap-4 items-start text-[#e9e9e9]">
            <h1 class="font-heading font-black text-[72px] leading-[85px] tracking-[-2.3px] uppercase max-w-[864px]">
                Luxury Car Hire In The UK, Redefined
            </h1>
            <p class="font-sans font-normal text-lg leading-[27px] tracking-[-0.3px] max-w-[746px]">
                Think Dubai's supercar culture and world-class service right here in the UK. We deliver an
                unparalleled standard of prestige car hire backed by an exclusive fleet.
            </p>
        </div>

        <flux:button href="#" size="lg" variant="primary">
            Hire A Luxury Car
        </flux:button>
    </x-public.hero-section>


</div>
