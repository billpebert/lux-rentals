<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.customer')] #[Title('Manage Bookings')] class extends Component
{
    public string $activeTab = 'all';

    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }
};
?>

@php
    // Sample data — replace with real Eloquent queries when the model is ready
    $allBookings = [
        ['id' => 'AFH-2515440466', 'status' => 'Hire | Booked', 'pick_up' => '17 Dec 2025 (9 am)',   'car' => 'VW T-Roc R', 'price' => '£1.00', 'cta' => 'Verify Licence'],
        ['id' => 'AFH-251521F5D5', 'status' => 'Hire | Booked', 'pick_up' => '26 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£3.00', 'cta' => 'Verify Licence'],
        ['id' => 'AFH-251521F5D5', 'status' => 'Hire | Booked', 'pick_up' => '26 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£5.00', 'cta' => 'Verify Licence'],
        ['id' => 'AFH-2515280C98', 'status' => 'Hire | Booked', 'pick_up' => '18 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£4.00', 'cta' => 'Verify Licence'],
    ];

    $upcomingBookings = [
        ['id' => 'AFH-2515440466', 'status' => 'Hire | Booked', 'pick_up' => '17 Dec 2025 (9 am)',   'car' => 'VW T-Roc R', 'price' => '£1.00', 'cta' => 'Pay Now'],
        ['id' => 'AFH-251521F5D5', 'status' => 'Hire | Booked', 'pick_up' => '26 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£3.00', 'cta' => 'Verify Licence'],
        ['id' => 'AFH-251521F5D5', 'status' => 'Hire | Booked', 'pick_up' => '26 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£5.00', 'cta' => 'Pay Now'],
        ['id' => 'AFH-2515280C98', 'status' => 'Hire | Booked', 'pick_up' => '18 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£4.00', 'cta' => 'Verify Licence'],
    ];

    $pastBookings = [
        ['id' => 'AFH-2515440466', 'status' => 'Hire | Booked', 'pick_up' => '17 Dec 2025 (9 am)',   'car' => 'VW T-Roc R', 'price' => '£1.00', 'cta' => 'View'],
        ['id' => 'AFH-251521F5D5', 'status' => 'Hire | Booked', 'pick_up' => '26 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£3.00', 'cta' => 'Verify Licence'],
        ['id' => 'AFH-251521F5D5', 'status' => 'Hire | Booked', 'pick_up' => '26 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£5.00', 'cta' => 'Verify Licence'],
        ['id' => 'AFH-2515280C98', 'status' => 'Hire | Booked', 'pick_up' => '18 Sept 2025 (8 am)', 'car' => 'VW T-Roc R', 'price' => '£4.00', 'cta' => 'View'],
    ];

    $tabs = [
        'all'      => ['label' => __('All Bookings'),      'title' => __('All Bookings'),      'bookings' => $allBookings,      'empty' => __('You currently do not have any bookings.')],
        'upcoming' => ['label' => __('Upcoming Bookings'), 'title' => __('Upcoming Bookings'), 'bookings' => $upcomingBookings, 'empty' => __('You currently do not have any upcoming bookings.')],
        'past'     => ['label' => __('Past Bookings'),     'title' => __('Past Bookings'),     'bookings' => $pastBookings,     'empty' => __('You currently do not have any past bookings.')],
    ];

    $current = $tabs[$activeTab];
@endphp

<div class="flex flex-col gap-4 sm:gap-8">

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="" class="size-5" aria-hidden="true">
        <nav class="flex items-center gap-1 font-sans text-sm sm:text-base leading-[27px] tracking-[-0.3px]" aria-label="Breadcrumb">
            <a href="{{ route('dashboard.customer.index') }}" wire:navigate class="text-light-gold hover:text-light-gold/80 transition-colors">
                {{ __('Account') }}
            </a>
            <span class="text-white/60">&nbsp;/&nbsp;</span>
            <span class="text-white/90">{{ __('Manage Bookings') }}</span>
        </nav>
    </div>

    {{-- Tab pills --}}
    <div
        class="flex items-center p-1 rounded-full backdrop-blur-[5px] w-full sm:w-fit overflow-x-auto"
        style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
        role="tablist"
        aria-label="{{ __('Booking filters') }}"
    >
        @foreach ($tabs as $key => $tab)
            <button
                wire:click="setTab('{{ $key }}')"
                role="tab"
                aria-selected="{{ $activeTab === $key ? 'true' : 'false' }}"
                @class([
                    'flex items-center justify-center px-3 sm:px-4 py-2 sm:py-2.5 rounded-full font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] transition-colors whitespace-nowrap',
                    'bg-light-gold text-zinc-800' => $activeTab === $key,
                    'text-off-white hover:text-white' => $activeTab !== $key,
                ])
            >
                {{ $tab['label'] }}
            </button>
        @endforeach
    </div>

    {{-- Tab content panel --}}
    <div
        class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
        style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
        role="tabpanel"
    >
        <h1 class="font-heading font-bold text-2xl sm:text-[32px] leading-8 sm:leading-[42px] tracking-[-0.5px] text-off-white">
            {{ $current['title'] }}
        </h1>

        @if (count($current['bookings']) > 0)
            {{-- Booking cards grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3">
                @foreach ($current['bookings'] as $booking)
                    <div class="flex flex-col gap-3.5 p-3 rounded-[10px] border border-white/10 bg-zinc-900 shadow-[10px_20px_60px_0px_rgba(0,0,0,0.4)]">

                        {{-- Status + ID --}}
                        <div class="flex flex-col gap-1.5">
                            <div class="inline-flex items-center justify-center px-1.5 py-[5px] rounded-full bg-zinc-700 w-fit">
                                <span class="font-sans font-medium text-2xs leading-[22px] uppercase tracking-wide text-white whitespace-nowrap">
                                    {{ $booking['status'] }}
                                </span>
                            </div>
                            <p class="font-sans font-medium text-sm leading-[22px] text-white">
                                {{ $booking['id'] }}
                            </p>
                            <div class="font-sans text-xs leading-[22px]">
                                <span class="text-white/50">{{ __('Pick Up:') }} </span>
                                <span class="font-semibold text-white">{{ $booking['pick_up'] }}</span>
                                <br />
                                <span class="text-white/50">{{ __('Car:') }} </span>
                                <span class="font-semibold text-white">{{ $booking['car'] }}</span>
                            </div>
                        </div>

                        {{-- Price + CTA --}}
                        <div class="flex items-center justify-between">
                            <p class="font-sans font-semibold text-base sm:text-lg leading-[1.6] text-white whitespace-nowrap">
                                {{ $booking['price'] }}
                            </p>
                            @if ($booking['cta'] === 'View')
                                <a
                                    href="{{ route('dashboard.customer.bookings.past') }}"
                                    wire:navigate
                                    class="inline-flex items-center justify-center px-3 py-1.5 rounded-full bg-light-gold text-zinc-800 font-sans font-medium text-xs leading-[13px] tracking-[-0.06px] whitespace-nowrap hover:bg-light-gold/90 transition-colors"
                                >
                                    {{ $booking['cta'] }}
                                </a>
                            @else
                                <button
                                    type="button"
                                    class="inline-flex items-center justify-center px-3 py-1.5 rounded-full bg-light-gold text-zinc-800 font-sans font-medium text-xs leading-[13px] tracking-[-0.06px] whitespace-nowrap hover:bg-light-gold/90 transition-colors"
                                >
                                    {{ $booking['cta'] }}
                                </button>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>
        @else
            {{-- Empty state --}}
            <p class="font-sans font-bold text-base leading-6 tracking-[-0.3px] text-off-white">
                {{ $current['empty'] }}
            </p>
        @endif

    </div>

</div>
