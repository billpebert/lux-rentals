<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component
{
    //
};
?>

<div>
    {{-- Hero --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-contact-us.webp') }}"
        overlay-class="bg-black/80"
        content-max-class="max-w-[812px]"
        section-class="min-h-[400px] sm:min-h-[514px]"
    >
        <div class="flex flex-col gap-6 sm:gap-10 items-start text-off-white w-full">
            <div class="flex flex-col gap-4 items-start w-full" data-aos="fade-up" data-aos-duration="750">
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase max-w-[864px] w-full">
                    Let's Get You Behind The Wheel
                </h1>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] w-full text-off-white/95">
                    We make it easy for you to rent a luxury car. Connect with us to discuss bookings or arrange your next VVIP experience.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
                <flux:button href="{{ route('our-fleet') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Luxury Car Hire
                </flux:button>
            </div>
        </div>
    </x-public.hero-section>

    {{-- Find us on the road --}}
    <section class="bg-white flex items-start justify-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-10 sm:gap-16 items-center w-full max-w-[1320px]">
            <div class="flex flex-col gap-6 sm:gap-8 items-start text-center w-full max-w-[940px] mx-auto px-2" data-aos="fade-up" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-deep-navy w-full">
                    Find Us On The Road
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-body-gray w-full">
                    Headquartered in Glasgow, Scotland, we are here to bring the Dubai bling culture to the UK. Drop by to explore our luxury car hire fleet, discuss bespoke bookings and even take your dream car for a test drive.
                </p>
            </div>

            {{-- Map: Glasgow city centre (OpenStreetMap embed, no API key) --}}
            <div class="relative w-full max-w-[1320px] h-[min(623px,70vh)] min-h-[280px] sm:min-h-[320px] rounded-2xl overflow-hidden shadow-[0px_0px_60px_0px_rgba(0,0,0,0.06)]" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <iframe
                    title="Map of Glasgow — Lux Rentals headquarters area"
                    class="absolute inset-0 size-full border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=-4.3054%2C55.8480%2C-4.2244%2C55.8700&amp;layer=mapnik&amp;marker=55.859%2C-4.264"
                ></iframe>
            </div>
        </div>
    </section>
</div>
