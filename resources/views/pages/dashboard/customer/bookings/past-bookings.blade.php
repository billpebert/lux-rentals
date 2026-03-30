<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.customer')] #[Title('Booking Details')] class extends Component
{
    //
};
?>

@php
    // Sample booking data — replace with real Eloquent query when the model is ready
    $booking = [
        'id'       => 'AFH-2515440466',
        'status'   => 'Collection in 2 months',
        'vehicle'  => [
            'name'         => 'VW T-Roc R',
            'image'        => asset('assets/images/car-1.webp'),
            'capacity'     => '5 People',
            'age_limit'    => '25 + Hire',
            'transmission' => 'Auto',
            'doors'        => '5',
            'extras'       => ['USB Input', 'Bluetooth', 'Parking Sensors'],
        ],
        'pick_up_location' => 'Autofusion Glasgow (404 Glasgow Rd, Clydebank G81 1PW, UK)',
        'pick_up_date'     => '17 Dec 2025 (09 AM)',
        'return_date'      => '24 Dec 2025 (09 AM)',
        'savings'          => '£-6.00',
        'total'            => '£1.00',
        'address'          => '404 Glasgow Rd, Clydebank G81 1PW, UK (Autofusion Glasgow)',
    ];
@endphp

<div class="flex flex-col gap-4 sm:gap-[60px]">

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="" class="size-5" aria-hidden="true">
        <nav class="flex items-center gap-1 font-sans text-base leading-[27px] tracking-[-0.3px]" aria-label="Breadcrumb">
            <a href="{{ route('dashboard.customer.index') }}" wire:navigate class="text-light-gold hover:text-light-gold/80 transition-colors">
                {{ __('Account') }}
            </a>
            <span class="text-white/60">&nbsp;/&nbsp;</span>
            <span class="text-white/90">{{ $booking['id'] }} ({{ $booking['status'] }})</span>
        </nav>
    </div>

    {{-- Content panel --}}
    <div
        class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
        style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
    >

        {{-- Section: The Vehicle --}}
        <div class="flex flex-col gap-8">
            <h1 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-[#e9e9e9]">
                {{ __('The Vehicle') }}
            </h1>

            <div class="flex flex-col lg:flex-row gap-6 items-start">

                {{-- Car image --}}
                <div class="shrink-0 w-full lg:w-auto">
                    <img
                        src="{{ $booking['vehicle']['image'] }}"
                        alt="{{ $booking['vehicle']['name'] }}"
                        class="w-full lg:w-[378px] h-[251px] object-contain rounded-[4px] bg-zinc-900"
                    >
                </div>

                {{-- Feature chips + extras --}}
                <div class="flex flex-col gap-4 w-full">

                    {{-- Feature chips --}}
                    <div class="flex flex-wrap gap-3">

                        {{-- Capacity --}}
                        <div class="flex items-center gap-3.5 p-3 rounded-[10px] bg-zinc-800 border border-white/10 shadow-[10px_20px_60px_0px_rgba(0,0,0,0.4)]">
                            <img src="{{ asset('assets/svgs/feature-capacity.svg') }}" alt="" class="size-8 shrink-0 invert opacity-70" aria-hidden="true">
                            <div class="flex flex-col">
                                <span class="font-sans text-xs leading-5 tracking-[-0.2px] text-white/50">{{ __('Capacity') }}</span>
                                <span class="font-sans font-semibold text-base leading-6 tracking-[-0.3px] text-white whitespace-nowrap">{{ $booking['vehicle']['capacity'] }}</span>
                            </div>
                        </div>

                        {{-- Age Limit --}}
                        <div class="flex items-center gap-3.5 p-3 rounded-[10px] bg-zinc-800 border border-white/10 shadow-[10px_20px_60px_0px_rgba(0,0,0,0.4)]">
                            <img src="{{ asset('assets/svgs/feature-age-limit.svg') }}" alt="" class="size-8 shrink-0 invert opacity-70" aria-hidden="true">
                            <div class="flex flex-col">
                                <span class="font-sans text-xs leading-5 tracking-[-0.2px] text-white/50">{{ __('Age Limit') }}</span>
                                <span class="font-sans font-semibold text-base leading-6 tracking-[-0.3px] text-white whitespace-nowrap">{{ $booking['vehicle']['age_limit'] }}</span>
                            </div>
                        </div>

                        {{-- Transmission --}}
                        <div class="flex items-center gap-3.5 p-3 rounded-[10px] bg-zinc-800 border border-white/10 shadow-[10px_20px_60px_0px_rgba(0,0,0,0.4)]">
                            <img src="{{ asset('assets/svgs/feature-transmission.svg') }}" alt="" class="size-8 shrink-0 invert opacity-70" aria-hidden="true">
                            <div class="flex flex-col">
                                <span class="font-sans text-xs leading-5 tracking-[-0.2px] text-white/50">{{ __('Transmission') }}</span>
                                <span class="font-sans font-semibold text-base leading-6 tracking-[-0.3px] text-white whitespace-nowrap">{{ $booking['vehicle']['transmission'] }}</span>
                            </div>
                        </div>

                        {{-- Doors count --}}
                        <div class="flex items-center gap-3.5 p-3 rounded-[10px] bg-zinc-800 border border-white/10 shadow-[10px_20px_60px_0px_rgba(0,0,0,0.4)]">
                            <img src="{{ asset('assets/svgs/feature-doors-count.svg') }}" alt="" class="size-8 shrink-0 invert opacity-70" aria-hidden="true">
                            <div class="flex flex-col">
                                <span class="font-sans text-xs leading-5 tracking-[-0.2px] text-white/50">{{ __('Doors count') }}</span>
                                <span class="font-sans font-semibold text-base leading-6 tracking-[-0.3px] text-white whitespace-nowrap">{{ $booking['vehicle']['doors'] }}</span>
                            </div>
                        </div>

                    </div>

                    {{-- Extras list --}}
                    <div class="flex flex-col gap-4">
                        @foreach ($booking['vehicle']['extras'] as $extra)
                            <div class="flex items-center gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0 text-light-gold" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-sans text-sm leading-[22px] tracking-[-0.2px] text-[#e9e9e9]">{{ $extra }}</span>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        {{-- Section: The Booking --}}
        <div class="flex flex-col gap-4 p-6 rounded-lg border border-white/20">

            <h2 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-[#e9e9e9] whitespace-nowrap">
                {{ __('The Booking') }}
            </h2>

            <div class="flex flex-col gap-4">

                {{-- Header row --}}
                <div class="flex items-center justify-between font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#e9e9e9]">
                    <span>{{ __('Item') }}</span>
                    <span>{{ __('Price') }}</span>
                </div>
                <hr class="border-white/20">

                {{-- Line items --}}
                @foreach ([
                    ['label' => 'Vehicle:', 'value' => $booking['vehicle']['name']],
                    ['label' => 'Pick Up & Drop Off Location:', 'value' => $booking['pick_up_location']],
                    ['label' => 'Pickup Date & Time:', 'value' => $booking['pick_up_date']],
                    ['label' => 'Return Date & Time:', 'value' => $booking['return_date']],
                    ['label' => 'Auto Savings (Multi Day Hire)', 'value' => $booking['savings']],
                ] as $row)
                    <div class="flex flex-col gap-2">
                        <div class="flex items-start sm:items-center justify-between gap-4 font-sans text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
                            <span class="font-bold shrink-0">{{ $row['label'] }}</span>
                            <span class="font-normal text-right">{{ $row['value'] }}</span>
                        </div>
                        <hr class="border-white/20">
                    </div>
                @endforeach

                {{-- Total --}}
                <div class="flex items-center justify-between font-sans font-bold text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
                    <span>{{ __('Total') }}</span>
                    <span>{{ $booking['total'] }}</span>
                </div>

            </div>
        </div>

        {{-- Section: The Location --}}
        <div class="flex flex-col gap-4">

            <h2 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-[#e9e9e9]">
                {{ __('The Location') }}
            </h2>

            <div class="font-sans text-[#e9e9e9]">
                <span class="font-bold text-lg leading-[27px] tracking-[-0.3px]">{{ __('Full Address:') }}</span>
                <span class="font-normal text-base leading-6 tracking-[-0.3px]"> {{ $booking['address'] }}</span>
            </div>

            {{-- Map placeholder --}}
            <div class="w-full h-[252px] rounded-lg overflow-hidden border border-white/10 bg-zinc-900 flex items-center justify-center">
                <p class="font-sans text-sm text-white/40">{{ $booking['address'] }}</p>
            </div>

        </div>

    </div>

</div>
