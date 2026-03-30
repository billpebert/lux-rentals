<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.customer')] #[Title('Manage Subscriptions')] class extends Component
{
    //
};
?>

<div class="flex flex-col gap-4 sm:gap-8">

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="" class="size-5" aria-hidden="true">
        <nav class="flex items-center gap-1 font-sans text-sm sm:text-base leading-[27px] tracking-[-0.3px]" aria-label="Breadcrumb">
            <a href="{{ route('dashboard.customer.index') }}" wire:navigate class="text-light-gold hover:text-light-gold/80 transition-colors">
                {{ __('Account') }}
            </a>
            <span class="text-white/60">&nbsp;/&nbsp;</span>
            <span class="text-white/90">{{ __('Subscriptions') }}</span>
        </nav>
    </div>

    {{-- Content panel --}}
    <div
        class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
        style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
    >
        <h1 class="font-heading font-bold text-2xl sm:text-[32px] leading-8 sm:leading-[42px] tracking-[-0.5px] text-[#e9e9e9]">
            {{ __('Manage Subscriptions') }}
        </h1>

        {{-- Empty state --}}
        <p class="font-sans font-bold text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
            {{ __('You currently do not have any subscriptions.') }}
        </p>

    </div>

</div>