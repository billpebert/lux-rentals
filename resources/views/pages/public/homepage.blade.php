<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component
{
    //
};
?>

<div>

    {{-- Hero Section --}}
    <x-public.hero-section image="{{ asset('assets/images/bg-homepage-default.webp') }}">
        <div class="flex flex-col gap-4 sm:gap-5 items-start text-[#e9e9e9]" data-aos="fade-up" data-aos-duration="750">
            <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase max-w-[864px]">
                Luxury Car Hire In The UK, Redefined
            </h1>
            <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] text-[#e9e9e9]/95">
                Think Dubai's supercar culture and world-class service right here in the UK. We deliver an
                unparalleled standard of prestige car hire backed by an exclusive fleet.
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
            <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                Hire A Luxury Car
            </flux:button>
        </div>
    </x-public.hero-section>

    {{-- About / Dubai Extravagance Section --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col xl:flex-row gap-10 xl:gap-16 items-center w-full">

            {{-- Left: text content --}}
            <div class="flex flex-col gap-8 sm:gap-10 items-start shrink-0 w-full xl:max-w-[628px]" data-aos="fade-up" data-aos-duration="700">
                <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-full">
                    <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                        Dubai Extravagance, Now In The UK
                    </h2>
                    <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                        For almost half a decade, Lux Rentals has been setting the standard for luxury car hire in Dubai. Now, we're bringing the same legacy to the UK with a fleet of world-class supercars, sedans and SUVs rarely seen on UK roads paired with an unparalleled VVIP experience.
                    </p>
                    <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                        Whether you want to make an entrance at your wedding, impress VIPs at your corporate event, or simply indulge in the thrill of driving a world-class sports car, our luxury car rental fleet is waiting to make you feel truly grand.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-center w-full sm:w-auto">
                    <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                        Explore Our Fleet
                    </flux:button>
                    <flux:button href="#" variant="outline" class="w-full sm:w-auto justify-center">
                        Learn More About Us
                    </flux:button>
                </div>
            </div>

            {{-- Right: image --}}
            <div class="flex flex-1 self-stretch items-center w-full min-h-[220px] sm:min-h-[300px] xl:min-h-0" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <div class="flex-1 w-full min-h-[220px] sm:min-h-[300px] xl:min-h-[400px] relative rounded-2xl overflow-hidden aspect-[4/3] xl:aspect-auto xl:h-full">
                    <img
                        src="{{ asset('assets/images/dubai-extravagance.webp') }}"
                        alt="Lux Rentals luxury car"
                        class="absolute inset-0 size-full object-cover rounded-2xl"
                    />
                </div>
            </div>

        </div>
    </section>

    @php
        $whiteGloveServiceCards = [
            [
                'title' => '24/7 VIP Support',
                'body' => 'From your first inquiry when you hand back the keys, our round-the-clock personal service is a hallmark of our brand, providing you with true VIP treatment.',
            ],
            [
                'title' => 'Elite Chauffeur Service',
                'body' => 'From your first inquiry when you hand back the keys, our round-the-clock personal service is a hallmark of our brand, providing you with true VIP treatment.',
            ],
            [
                'title' => 'Tailored Luxury Car Rentals',
                'body' => 'From your first inquiry when you hand back the keys, our round-the-clock personal service is a hallmark of our brand, providing you with true VIP treatment.',
            ],
        ];
    @endphp

    {{-- White-Glove Service Section --}}
    <div class="bg-[#F8F8F8]">
        <section class="flex flex-col gap-10 sm:gap-[60px] items-center container py-16 sm:py-24 lg:py-[120px] w-full rounded-2xl sm:rounded-[30px]">
            <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#26251D] w-full text-center sm:text-start" data-aos="fade-up" data-aos-duration="700">
                White-Glove Service
            </h2>

            <div class="flex flex-col md:flex-row flex-wrap gap-6 md:gap-[30px] items-stretch w-full">
                @foreach ($whiteGloveServiceCards as $card)
                    <div class="flex-1 min-w-0 w-full md:w-auto" data-aos="fade-up" data-aos-delay="{{ $loop->index * 90 }}" data-aos-duration="650">
                        <x-public.highlight-card :title="$card['title']" :body="$card['body']" />
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <div data-aos="fade-up" data-aos-duration="750">
        <x-public.section-exclusive-lux-card />
    </div>

    {{-- Drive Luxury, Live Prestige — Services Section --}}
    <section class="flex flex-col items-start px-4 sm:px-8 lg:px-20 w-full">
        <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full">

            <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-white w-full text-center lg:text-start" data-aos="fade-up" data-aos-duration="700">
                Drive Luxury, Live Prestige
            </h2>

            <div class="flex flex-col gap-[30px] items-start w-full">

                {{-- Row 1 --}}
                <div class="flex flex-col xl:flex-row gap-[30px] items-stretch xl:min-h-0 w-full">
                    <div class="flex-1 bg-white/4 flex flex-col items-start px-5 py-10 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="0" data-aos-duration="650">
                        <div class="flex flex-col gap-5 items-start text-white w-full">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl lg:text-2xl leading-snug sm:leading-8 lg:leading-9 tracking-[-0.4px]">
                                Weddings, Events &amp; Special Occasions
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-snug sm:leading-6 tracking-[-0.3px]">
                                Make your big day unforgettable with our prestige car hire. From Rolls-Royce weddings to Lamborghini event entrances, rent luxury cars that turn every celebration into a statement.
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 bg-white/4 flex flex-col items-start px-5 py-10 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="100" data-aos-duration="650">
                        <div class="flex flex-col gap-[10px] items-start text-white w-full">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl lg:text-2xl leading-snug sm:leading-8 lg:leading-9 tracking-[-0.4px]">
                                Chauffeur Services UK
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-snug sm:leading-6 tracking-[-0.3px]">
                                Sometimes luxury is letting someone else take the wheel. We deliver true VVIP treatment in prestige car hires, perfect for events or simply indulging in luxury travel because you can.
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 bg-white/4 flex flex-col items-start px-5 py-10 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="200" data-aos-duration="650">
                        <div class="flex flex-col gap-[10px] items-start text-white w-full">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl lg:text-2xl leading-snug sm:leading-8 lg:leading-9 tracking-[-0.4px]">
                                Corporate Car Hire
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-snug sm:leading-6 tracking-[-0.3px]">
                                Impress high-profile clients and partners with our luxury car hire services. Choose from luxe sedans, SUVs, or supercars for the thrill-seekers and young at heart; we've got it all.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Row 2 --}}
                <div class="flex flex-col xl:flex-row gap-[30px] items-stretch w-full">
                    <div class="flex-1 bg-white/4 flex flex-col items-start px-5 py-10 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="0" data-aos-duration="650">
                        <div class="flex flex-col gap-5 items-start text-white w-full">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl lg:text-2xl leading-snug sm:leading-8 lg:leading-9 tracking-[-0.4px]">
                                VIP &amp; Celebrity Transport
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-snug sm:leading-6 tracking-[-0.3px]">
                                For those who expect nothing less than excellence, our VIP and celebrity transport delivers privacy, security, and the ultimate luxury car hire experience across the UK.
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 bg-white/4 flex flex-col items-start px-5 py-10 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="100" data-aos-duration="650">
                        <div class="flex flex-col gap-[10px] items-start text-white w-full">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl lg:text-2xl leading-snug sm:leading-8 lg:leading-9 tracking-[-0.4px]">
                                Security Fleet Hire
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-snug sm:leading-6 tracking-[-0.3px]">
                                Our specialist security fleet hire combines premium vehicles with discreet protection, ensuring safety without ever compromising the prestige or luxury of your journey.
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 bg-white/4 flex flex-col items-start px-5 py-10 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="200" data-aos-duration="650">
                        <div class="flex flex-col gap-[10px] items-start text-white w-full">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl lg:text-2xl leading-snug sm:leading-8 lg:leading-9 tracking-[-0.4px]">
                                Daily, Weekly &amp; Monthly Rentals
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-snug sm:leading-6 tracking-[-0.3px]">
                                Whether it's a quick thrill or an extended escape, our daily, weekly, and monthly car rentals make luxury car hire flexible, simple, and of course, unforgettable.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="flex flex-col items-center px-4 sm:px-8 lg:px-20 py-16 sm:py-24 lg:py-[120px] w-full">
                    <div class="flex flex-col gap-10 sm:gap-16 items-start w-full max-w-desktop-lg mx-auto">

            {{-- Header --}}
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6 lg:gap-8 w-full" data-aos="fade-up" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full lg:max-w-[859px]">
                    Why Choose Our Luxury Car Rentals In the UK?
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full lg:max-w-[358px] lg:shrink-0">
                    We have a proven track record of delivering quality service and an outstanding fleet to match.
                </p>
            </div>

            {{-- 4 feature pillars --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8 sm:gap-10 xl:gap-6 w-full xl:justify-between">

                @foreach([
                    ['title' => 'Exclusive',    'body' => "Access to luxury cars you won't find anywhere else in the country."],
                    ['title' => 'Flexible',     'body' => 'Book luxury car hires around your needs, your time and your lifestyle.'],
                    ['title' => 'Transparent',  'body' => 'No hidden charges and professionalism you can count on.'],
                    ['title' => 'Effortless',   'body' => 'Seamless bookings, punctual deliveries, and VIP service at every step.'],
                ] as $feature)
                    <div class="flex gap-5 items-start sm:items-center max-w-full xl:max-w-[300px]" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}" data-aos-duration="650">
                        {{-- Gold vertical bar --}}
                        <div class="w-px min-h-[6rem] sm:h-[124px] self-stretch sm:self-auto bg-light-gold shrink-0"></div>

                        <div class="flex flex-col gap-4 items-start flex-1 min-w-0">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl md:text-2xl leading-snug sm:leading-9 tracking-[-0.4px] text-[#181818]">
                                {{ $feature['title'] }}
                            </h3>
                            <p class="font-sans font-normal text-xs sm:text-sm md:text-base leading-relaxed sm:leading-6 tracking-[-0.3px] text-[#7b7b7b]">
                                {{ $feature['body'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Drive Away CTA --}}
    <div data-aos="fade-up" data-aos-duration="750">
        <x-public.drive-away-cta />
    </div>

</div>
