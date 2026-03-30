<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.public')] class extends Component
{
    public int $step = 1;

    // Step 1: Booking preferences
    public string $pickupDropoff = '16/10/2025 - 19/10/2025';

    public string $pickupTime = '14:00';

    public string $pickupLocation = 'Autofusion Glasgow (Primary)';

    public bool $includeChauffeur = false;

    // Step 2: Licence verification
    public string $licenceNumber = '';

    public string $dvlaCode = '';

    // Step 3: Payment
    public string $cardNumber = '';

    // Shared
    public string $couponCode = '';

    public function proceedToBooking(): void
    {
        $this->step = 2;
    }

    public function validateLicence(): void
    {
        $this->validate([
            'licenceNumber' => ['required'],
            'dvlaCode' => ['required'],
        ]);

        $this->step = 3;
    }

    public function redeemCoupon(): void
    {
        // Coupon redemption logic
    }

    public function confirmPayment(): void
    {
        $this->validate([
            'cardNumber' => ['required'],
        ]);

        $this->modal('payment-success')->show();
    }
};
?>

<div>
    {{-- Hero --}}
    <section class="relative flex flex-col items-start justify-end min-h-[min(100dvh,480px)] sm:min-h-[560px] lg:min-h-[600px] pb-8 sm:pb-12 md:pb-[45px] overflow-hidden">
        <img src="{{ asset('assets/images/bg-car-hire.webp') }}" alt="" class="absolute inset-0 size-full object-cover pointer-events-none" />
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="container relative z-10 w-full">
            <div class="relative z-10 flex flex-col gap-3 sm:gap-4 items-start max-w-[979px]" data-aos="fade-up" data-aos-duration="750">
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-off-white">Sports</p>
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase text-off-white">
                    BMW X5 M-Sport
                </h1>
                <flux:button href="#gallery" variant="primary" icon="image" class="w-full sm:w-auto justify-center">
                    Car Gallery
                </flux:button>
            </div>
        </div>
    </section>

    {{-- ==============================
         STEP 1: Car Detail + Booking Form
         ============================== --}}
    @if ($step === 1)
        {{-- Car Detail + Booking Sidebar --}}
        <section class="flex flex-col xl:flex-row gap-8 xl:gap-[30px] items-start container py-16 sm:py-24 lg:py-[120px] 3xl:px-[140px] w-full">

            {{-- Left: Car specs + description --}}
            <div class="w-full xl:w-[790px] xl:max-w-[790px] flex flex-col gap-8 shrink-0 min-w-0" data-aos="fade-up" data-aos-duration="700">

                {{-- Feature Pills --}}
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 w-full">
                    @foreach([
                        ['icon' => asset('assets/svgs/feature-capacity.svg'), 'label' => 'Capacity', 'value' => '7 people'],
                        ['icon' => asset('assets/svgs/feature-age-limit.svg'), 'label' => 'Age Limit', 'value' => '25 + Hire'],
                        ['icon' => asset('assets/svgs/feature-transmission.svg'), 'label' => 'Transmission', 'value' => 'Auto'],
                        ['icon' => asset('assets/svgs/feature-doors-count.svg'), 'label' => 'Doors count', 'value' => '4'],
                    ] as $feature)
                        <div class="min-w-0 bg-light-fill flex gap-2 sm:gap-3 items-center p-3 sm:p-5 rounded-[13px]">
                            <img src="{{ $feature['icon']  }}" alt="{{ $feature['label'] }}">
                            <div class="flex flex-col gap-1">
                                <p class="font-sans font-medium text-[12px] leading-4 text-[rgba(35,38,46,0.6)]">{{ $feature['label'] }}</p>
                                <p class="font-sans font-medium text-base leading-6 text-dark-cool">{{ $feature['value'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Availability Notice --}}
                <div class="bg-light-fill rounded-[14px] px-5 py-[14px] flex items-start gap-3 sm:gap-6">
                    <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="Gold Lantern" class="size-6 shrink-0">
                    <p class="font-sans font-medium text-sm leading-[18px] text-dark-cool">
                        Book this car online now to pick up and drop off at our Autofusion Glasgow branch. For custom pick up and drop off locations, please complete our <a href="{{ route('contact-us') }}" class="underline">contact form</a> to receive a quote.
                    </p>
                </div>

                {{-- Description --}}
                <div class="flex flex-col gap-4">
                    <p class="font-sans font-normal text-base leading-6 text-dark-cool">
                        Introducing the BMW X5 M Sport, available at Autofusion — a dynamic SUV that combines powerful performance, advanced technology, and sophisticated style. Designed for those who value both luxury and versatility, the X5 M Sport delivers an exhilarating drive with all the comforts of a premium interior.
                    </p>
                    <p class="font-sans font-normal text-base leading-6 text-dark-cool">
                        Ideal for self-drive or chauffeur service, the BMW X5 M Sport is perfect for business, leisure, special events, or family adventures. Drivers must be over the age of 25.
                    </p>
                    <p class="font-sans font-normal text-base leading-6 text-dark-cool">
                        Powered by a 3.0-liter diesel engine producing 282 horsepower and 650 Nm of torque, the X5 M Sport combines strong acceleration with outstanding fuel efficiency. With advanced all-wheel drive and adaptive suspension, this SUV provides enhanced grip and a smooth drive, adapting seamlessly to various terrains.
                    </p>
                    <p class="font-sans font-normal text-base leading-6 text-dark-cool">
                        Inside, the X5 M Sport offers a spacious cabin with premium leather seats, an intuitive iDrive infotainment system, and ambient lighting. Additional features include a panoramic sunroof that fills the cabin with natural light, as well as heated front and rear seats for added comfort.
                    </p>
                    <p class="font-sans font-normal text-base leading-6 text-dark-cool">
                        With its bold design, state-of-the-art technology, and impressive versatility, the BMW X5 M Sport is an outstanding choice for any journey. Rent the BMW X5 M Sport from Autofusion and experience luxury, power, and efficiency in a truly exceptional SUV.
                    </p>
                    <p class="font-sans font-semibold text-sm leading-5 text-dark-cool pt-6">
                        Follow us on all major social media platforms for weekly deals, exclusive offers and new car updates.
                    </p>
                </div>

                {{-- Features List --}}
                <div class="grid grid-cols-2 gap-y-[7px] gap-x-3 sm:gap-x-4 w-full max-w-[340px]">
                    @foreach(['USB Input', 'Radio', 'Parking Sensors', 'Bluetooth', 'GPS', 'Air Conditioning'] as $feature)
                        <div class="flex gap-3 items-center">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39702 0H13.603C14.9213 0 16 1.07866 16 2.39702V13.603C16 14.9213 14.9213 16 13.603 16H2.39702C1.07866 16 0 14.9213 0 13.603V2.39702C0 1.07866 1.07866 0 2.39702 0ZM6.27232 9.36815L11.7854 3.85506C12.0451 3.59542 12.4445 3.59542 12.6843 3.85506L13.4034 4.55419C13.6631 4.81383 13.6631 5.2133 13.4034 5.45312L6.71176 12.1448C6.47207 12.4044 6.07259 12.4044 5.81283 12.1448L2.59676 8.90878C2.33712 8.66909 2.33712 8.26961 2.59676 8.00985L3.29589 7.31071C3.55553 7.05108 3.955 7.05108 4.19482 7.31071L6.27232 9.36815Z" fill="#CDB560"/>
                            </svg>
                            <span class="font-sans font-medium text-[13px] leading-5 text-dark-cool">{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>

            </div>

            {{-- Right: Booking Form Sidebar --}}
            <div class="flex-1 w-full min-w-0 bg-charcoal rounded-[20px] flex flex-col" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                {{-- Price + Login Warning --}}
                <div class="px-6 pt-8 pb-4 flex flex-col gap-2">
                    <p class="font-sans font-semibold text-lg leading-7 text-light-gold px-[10px]">£367 per day (3 days)</p>
                    <p class="font-sans font-medium text-[12px] leading-4 text-white px-[10px]">
                        Not logged in. You must be
                        <flux:link href="{{ route('home') }}">registered</flux:link>
                        and
                        <flux:link href="{{ route('home') }}">logged in</flux:link>,
                        in order to secure this booking.
                    </p>
                </div>

                {{-- White Form Card --}}
                <div class="mx-[14px] bg-white border border-border-light rounded-[14px] flex flex-col">

                    {{-- Date & Time section --}}
                    <div class="px-5 pt-5 pb-3">
                        <p class="font-sans font-semibold text-sm leading-5 text-[rgba(38,37,29,0.65)]">Date &amp; Time</p>
                    </div>

                    {{-- Pickup & Dropoff --}}
                    <div class="px-5 pb-4 flex flex-col gap-2">
                        <flux:field>
                            <flux:label class="font-sans font-semibold text-sm leading-5 text-muted-gray!">Pickup &amp; Dropoff</flux:label>
                            <flux:select
                                wire:model.live="pickupDropoff"
                                class="w-full bg-white! border-off-white! text-mid-gray! shadow-none! rounded-lg! font-sans font-medium text-base leading-6 tracking-[-0.3px]!"
                            >
                                <flux:select.option value="16/10/2025 - 19/10/2025">16/10/2025 - 19/10/2025</flux:select.option>
                                <flux:select.option value="17/10/2025 - 20/10/2025">17/10/2025 - 20/10/2025</flux:select.option>
                                <flux:select.option value="20/10/2025 - 23/10/2025">20/10/2025 - 23/10/2025</flux:select.option>
                                <flux:select.option value="01/11/2025 - 05/11/2025">01/11/2025 - 05/11/2025</flux:select.option>
                            </flux:select>
                        </flux:field>
                    </div>

                    {{-- Pickup Time --}}
                    <div class="px-5 pb-4 flex flex-col gap-2">
                        <flux:field>
                            <flux:label class="font-sans font-semibold text-sm leading-5 text-muted-gray!">Pickup Time</flux:label>
                            <flux:select
                                wire:model.live="pickupTime"
                                class="w-full bg-white! border-off-white! text-mid-gray! shadow-none! rounded-lg! font-sans font-medium text-base leading-6 tracking-[-0.3px]!"
                            >
                                <flux:select.option value="09:00">09:00</flux:select.option>
                                <flux:select.option value="10:00">10:00</flux:select.option>
                                <flux:select.option value="12:00">12:00</flux:select.option>
                                <flux:select.option value="14:00">14:00</flux:select.option>
                                <flux:select.option value="16:00">16:00</flux:select.option>
                                <flux:select.option value="18:00">18:00</flux:select.option>
                            </flux:select>
                        </flux:field>
                    </div>

                    {{-- Availability Confirmation --}}
                    <div class="border-b border-border-light px-5 pb-4">
                        <p class="font-sans text-[12px] leading-4 text-muted-gray">
                            <span class="font-bold text-muted-gray">Congrats!</span>
                            <span class="font-medium"> This car is available on the date/time above.</span>
                        </p>
                    </div>

                    {{-- Pickup Location --}}
                    <div class="px-5 py-4 flex flex-col gap-2">
                        <flux:field>
                            <flux:label class="font-sans font-semibold text-sm leading-5 text-[rgba(38,37,29,0.65)]!">Pickup Location</flux:label>
                            <flux:select
                                wire:model.live="pickupLocation"
                                class="w-full bg-white! border-off-white! text-mid-gray! shadow-none! rounded-lg! font-sans font-medium text-base leading-6 tracking-[-0.3px]!"
                            >
                                <flux:select.option value="Autofusion Glasgow (Primary)">Autofusion Glasgow (Primary)</flux:select.option>
                                <flux:select.option value="Autofusion Edinburgh">Autofusion Edinburgh</flux:select.option>
                                <flux:select.option value="Autofusion Manchester">Autofusion Manchester</flux:select.option>
                                <flux:select.option value="Custom location (quote required)">Custom location (quote required)</flux:select.option>
                            </flux:select>
                        </flux:field>
                    </div>

                    {{-- Chauffeur Option --}}
                    <div class="px-5 pb-3">
                        <flux:checkbox wire:model="includeChauffeur" label="INCLUDE A CHAUFFEUR FOR £120/day" class="[&_label]:font-sans [&_label]:text-[12px] [&_label]:uppercase [&_label]:tracking-wide [&_label]:text-muted-gray" />
                    </div>

                    {{-- Deposit Note --}}
                    <div class="border-b border-border-light px-5 pb-4">
                        <p class="font-sans font-medium text-[12px] leading-4 text-[rgba(38,37,29,0.65)]">
                            No deposit will be required for chauffeur bookings.
                        </p>
                    </div>

                    {{-- Total --}}
                    <div class="px-5 py-4 flex items-center justify-between">
                        <div class="flex flex-col gap-1">
                            <p class="font-sans font-semibold text-base leading-6 text-muted-gray">Total</p>
                            <p class="font-sans font-medium text-sm leading-5 text-[rgba(38,37,29,0.65)]">Incl. VAT</p>
                        </div>
                        <p class="font-sans font-semibold text-[26px] leading-[39px] text-dark-gold">£1,100.00</p>
                    </div>

                    {{-- Deposit Notice --}}
                    <div class="px-5 pb-5">
                        <p class="font-sans font-normal text-sm leading-5 text-muted-gray">Deposit of £500.00 will be payable in branch.</p>
                    </div>

                </div>

                {{-- CTA --}}
                <div class="px-[14px] pt-6 pb-8 flex flex-col items-center gap-[15px]">
                    <p class="font-sans font-medium text-[12px] leading-4 text-white/40 text-center">
                        Next we will ask you for your payment details
                    </p>
                    <flux:button wire:click="proceedToBooking" variant="primary" class="w-full">
                        Login to Book
                    </flux:button>
                </div>

            </div>

        </section>

    @endif

    {{-- ==============================
         STEPS 2 & 3: Review + Form
         ============================== --}}
    @if ($step === 2 || $step === 3)

        <section class="bg-white container py-16 sm:py-24 lg:py-[120px] w-full">
            <div class="flex flex-col gap-6 sm:gap-7 sm:p-6 lg:p-10">

                <h1 class="font-heading font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight sm:leading-[45px] tracking-[-1px] text-charcoal" wire:ignore.self data-aos="fade-up" data-aos-duration="700">
                    Please review and confirm your booking
                </h1>

                <div class="flex flex-col lg:flex-row gap-6 lg:gap-5 items-stretch lg:items-start w-full">

                    {{-- Left: Shared Booking Summary --}}
                    <div class="flex-1 min-w-0 w-full" wire:ignore.self data-aos="fade-up" data-aos-duration="650">
                        <x-public.booking-summary
                            vehicle="BMW X5 M-Sport"
                            pickup-location="Autofusion Glasgow"
                            pickup-datetime="19/10/2025 at 09:00"
                            dropoff-location="Autofusion Glasgow"
                            dropoff-datetime="21/10/2025 at 09:00"
                            hire-duration="2 Days"
                            deposit="500"
                            total="£800.00"
                        />
                    </div>

                    {{-- Right: Step-specific panel --}}
                    @if ($step === 2)

                        {{-- Step 2: Licence Verification --}}
                        <div class="w-full max-w-[472px] shrink-0 mx-auto lg:mx-0 bg-white border border-[rgba(35,38,46,0.1)] rounded-[15px] overflow-hidden">
                            <div class="flex flex-col gap-4 p-4">

                                {{-- Header --}}
                                <div class="border-b border-border-subtle pb-2 flex flex-col gap-1.5">
                                    <p class="font-sans font-semibold text-xl leading-[30px] tracking-[-0.3px] text-charcoal">
                                        Mr Mahmud, let's confirm your details
                                    </p>
                                    <p class="font-sans font-medium text-[12px] leading-4 text-[rgba(35,38,46,0.8)]">
                                        Not you? Click here to
                                        <a href="#" class="text-light-gold">switch accounts</a>.
                                    </p>
                                </div>

                                {{-- Licence inputs --}}
                                <div class="flex gap-3 items-start">
                                    <div class="flex-1">
                                        <flux:input variant="filled" wire:model="licenceNumber" placeholder="Licence Number" />
                                        @error('licenceNumber')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="w-[140px]">
                                        <flux:input variant="filled" wire:model="dvlaCode" placeholder="DVLA Code" />
                                        @error('dvlaCode')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- DVLA Instructions --}}
                                <div class="border-t border-[rgba(35,38,46,0.1)] pt-4 flex flex-col gap-4">
                                    <p class="font-sans font-medium text-sm leading-[22px] tracking-[-0.2px] text-[rgba(35,38,46,0.7)]">
                                        Please copy &amp; paste your DVLA check code here. You can generate a DVLA
                                        <a href="#" class="underline font-semibold text-charcoal">check code here.</a>
                                    </p>
                                    <p class="font-sans text-sm leading-[22px] tracking-[-0.2px] text-[rgba(35,38,46,0.7)]">
                                        <span class="font-bold text-charcoal">Note:</span>
                                        If you hold a non-GB licence, please call us to make a booking.
                                    </p>
                                </div>

                                {{-- Validate Button --}}
                                <flux:button wire:click="validateLicence" variant="primary" class="w-full">
                                    Validate Licence
                                </flux:button>

                            </div>
                        </div>

                    @else

                        {{-- Step 3: Payment --}}
                        <div class="w-full max-w-[455px] shrink-0 mx-auto lg:mx-0 bg-white border border-[rgba(35,38,46,0.1)] rounded-[15px] overflow-hidden">
                            <div class="flex flex-col gap-4 p-4">

                                {{-- Header --}}
                                <div class="border-b border-border-subtle pb-2 flex flex-col gap-2">
                                    <p class="font-sans font-semibold text-xl leading-[30px] tracking-[-0.3px] text-charcoal">
                                        Please make a payment
                                    </p>
                                    <p class="font-sans font-medium text-[12px] leading-4 text-[rgba(35,38,46,0.8)]">
                                        Not you? Click here to
                                        <a href="#" class="text-light-gold">switch accounts</a>.
                                    </p>
                                </div>

                                {{-- Card Number --}}
                                <flux:input variant="filled" wire:model="cardNumber" placeholder="Card Number" />
                                @error('cardNumber')
                                    <p class="text-red-500 text-xs -mt-2">{{ $message }}</p>
                                @enderror

                                {{-- Terms --}}
                                <div class="border-t border-[rgba(35,38,46,0.1)] pt-2">
                                    <p class="font-sans font-normal text-sm leading-[22px] tracking-[-0.2px] text-[rgba(35,38,46,0.7)]">
                                        By submitting your reservation via our website, you agree with our
                                        <a href="#" class="underline">terms &amp; conditions</a>.
                                        Please do not close this page once payment is processing, until your booking is complete.
                                    </p>
                                </div>

                                {{-- Licence Validated Notice --}}
                                <div class="bg-[rgba(205,181,96,0.1)] border-l-4 border-light-gold rounded-[4px] px-5 py-4">
                                    <p class="font-sans font-bold text-base leading-6 tracking-[-0.3px] text-dark-cool">
                                        Your licence has been successfully validated.
                                    </p>
                                </div>

                                {{-- Confirm & Pay --}}
                                <flux:button wire:click="confirmPayment" variant="primary" class="w-full">
                                    Confirm &amp; Pay Reservation
                                </flux:button>

                            </div>
                        </div>

                    @endif

                </div>
            </div>
        </section>

    @endif

    {{-- ==============================
         Payment Success Modal
         ============================== --}}
    <flux:modal name="payment-success" class="max-w-[526px]!" :dismissible="false" :closable="false">
        <div class="flex flex-col items-center gap-6 px-4 pt-8 pb-4">

            {{-- Success Illustration --}}
            <div class="relative flex items-center justify-center size-[144px]">
                {{-- Sparkle dots --}}
                <div class="absolute top-2 left-10 size-2 rounded-full bg-light-gold opacity-60"></div>
                <div class="absolute top-1 right-8 size-1.5 rounded-full bg-light-gold opacity-40"></div>
                <div class="absolute bottom-4 left-5 size-1 rounded-full bg-light-gold opacity-50"></div>
                <div class="absolute bottom-2 right-10 size-2 rounded-full bg-light-gold opacity-60"></div>
                <div class="absolute top-8 left-1 size-1.5 rounded-full bg-light-gold opacity-40"></div>
                <div class="absolute bottom-8 right-0 size-1.5 rounded-full bg-light-gold opacity-40"></div>
                <div class="absolute top-4 right-2 size-1 rounded-full bg-light-gold opacity-50"></div>
                {{-- Gold circle with checkmark --}}
                <div class="size-24 rounded-full bg-light-gold flex items-center justify-center shadow-lg">
                    <svg class="size-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
            </div>

            {{-- Text --}}
            <div class="flex flex-col gap-2 items-center text-center">
                <h2 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-charcoal">
                    Payment Successful!
                </h2>
                <p class="font-sans font-medium text-[22px] leading-8 tracking-[-0.3px] text-[rgba(38,37,29,0.6)]">
                    Your reservation has been successfully completed. Enjoy your Journey!
                </p>
            </div>

            {{-- CTA --}}
            <flux:button href="{{ route('home') }}" variant="primary" class="w-full max-w-[294px]!">
                Back To Home
            </flux:button>

        </div>
    </flux:modal>

</div>
