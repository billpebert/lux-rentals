@props([
    'vehicle' => 'BMW X5 M-Sport',
    'pickupLocation' => 'Autofusion Glasgow',
    'pickupDatetime' => '19/10/2025 at 09:00',
    'dropoffLocation' => 'Autofusion Glasgow',
    'dropoffDatetime' => '21/10/2025 at 09:00',
    'hireDuration' => '2 Days',
    'deposit' => '500',
    'total' => '£800.00',
])

<div class="flex-1 bg-white border border-[rgba(35,38,46,0.1)] rounded-[15px] overflow-hidden self-stretch">

    {{-- Vehicle --}}
    <div class="border-b border-[rgba(35,38,46,0.1)] px-4 py-4 flex flex-col gap-1">
        <p class="font-sans font-medium text-base leading-6 tracking-[-0.3px] text-[rgba(35,38,46,0.6)]">Your vehicle</p>
        <p class="font-sans font-semibold text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">{{ $vehicle }}</p>
    </div>

    {{-- Pickup & Dropoff --}}
    <div class="border-b border-[rgba(35,38,46,0.1)] px-4 py-4">
        <div class="flex flex-col sm:flex-row gap-6 sm:gap-10">
            <div class="flex flex-col gap-1">
                <p class="font-sans font-medium text-base leading-6 tracking-[-0.3px] text-[rgba(35,38,46,0.6)]">Pick Up</p>
                <p class="font-sans font-semibold text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">{{ $pickupLocation }}</p>
                <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[#26251D]">{{ $pickupDatetime }}</p>
            </div>
            <div class="flex flex-col gap-1">
                <p class="font-sans font-medium text-base leading-6 tracking-[-0.3px] text-[rgba(35,38,46,0.6)]">Dropoff</p>
                <p class="font-sans font-semibold text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">{{ $dropoffLocation }}</p>
                <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[#26251D]">{{ $dropoffDatetime }}</p>
            </div>
        </div>
    </div>

    {{-- Hire Duration --}}
    <div class="border-b border-[rgba(35,38,46,0.1)] px-4 py-4 flex flex-col gap-1">
        <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[rgba(35,38,46,0.6)]">Hire Duration</p>
        <p class="font-sans font-semibold text-lg leading-[27px] tracking-[-0.3px] text-[#26251D]">{{ $hireDuration }}</p>
    </div>

    {{-- Refundable Deposit --}}
    <div class="border-b border-[rgba(35,38,46,0.1)] px-4 py-4 flex flex-col gap-2">
        <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[rgba(35,38,46,0.6)]">Refundable Deposit</p>
        <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[#26251D]">{{ $deposit }} Will be payable in branch</p>
    </div>

    {{-- Coupon --}}
    <div class="border-b border-[rgba(35,38,46,0.1)] px-4 py-4 flex flex-col gap-2">
        <p class="font-sans font-normal text-base leading-6 tracking-[-0.3px] text-[rgba(35,38,46,0.6)]">Coupon</p>
        <div class="flex gap-2 items-stretch">
            <flux:input variant="filled" wire:model="couponCode" placeholder="Enter code here" class="flex-1" />
            <flux:button wire:click="redeemCoupon" variant="primary" class="shrink-0">
                Redeem Code
            </flux:button>
        </div>
    </div>

    {{-- Total Due --}}
    <div class="px-4 py-4 flex items-center justify-between">
        <div class="flex flex-col gap-1">
            <p class="font-heading font-semibold text-2xl leading-9 tracking-[-0.4px] text-[#26251D]">Total Due</p>
            <p class="font-sans font-medium text-sm leading-[22px] tracking-[-0.2px] text-[rgba(35,38,46,0.6)]">Incl. VAT</p>
        </div>
        <p class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-light-gold">{{ $total }}</p>
    </div>

</div>
