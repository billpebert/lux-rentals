<x-public-layout>
    {{-- Hero --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-corporate-car.webp') }}"
        overlay-class="bg-black/80"
        content-max-class="max-w-[907px]"
    >
        <div class="flex flex-col gap-6 sm:gap-10 items-start text-off-white w-full">
            <div class="flex flex-col gap-4 items-start w-full" data-aos="fade-up" data-aos-duration="750">
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase w-full">
                    Command Authority With Luxury Corporate Car Hires
                </h1>
                <div class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] w-full max-w-[746px] text-off-white/95">
                    <p class="mb-0">Elevate your professional image with our premium fleet of prestige vehicles that</p>
                    <p>reflect success, style, and sophistication.</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
                <flux:button href="{{ route('contact-us') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Book A Luxury Car
                </flux:button>
            </div>
        </div>
    </x-public.hero-section>

    @php
        $corporateFleetHighlightCards = [
            [
                'title' => 'Prestige Sedans',
                'body' => 'Our Rolls-Royces, Bentleys and Mercedes bring refined elegance that is perfect for business meetings, client visits and corporate events to exude unmatched authority.',
            ],
            [
                'title' => 'Luxury SUVs',
                'body' => 'Our Range Rovers, Porsches and BMWs combine power and prestige so that your VIP clients or team travel in a professional environment.',
            ],
            [
                'title' => 'Sports Cars & Supercars',
                'body' => 'For high-profile corporate events, impress clients and partners with Lamborghini, Ferrari, or Aston Martin to convey confidence and sophistication.',
            ],
        ];
    @endphp

    {{-- Our fleet of luxurious success --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-10 sm:gap-[60px] items-center justify-center w-full">
            <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-charcoal text-center w-full px-2" data-aos="fade-up" data-aos-duration="700">
                Our Fleet Of Luxurious Success
            </h2>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-[30px] items-stretch w-full min-h-0">
                @foreach ($corporateFleetHighlightCards as $card)
                    <div class="flex-1 min-w-0 w-full" data-aos="fade-up" data-aos-delay="{{ $loop->index * 90 }}" data-aos-duration="650">
                        <x-public.highlight-card :title="$card['title']" :body="$card['body']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why choose Lux Rentals UK --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full justify-center">
            <div class="flex-1 w-full min-h-[240px] sm:min-h-[320px] lg:min-h-[400px] rounded-2xl overflow-hidden shrink-0" data-aos="fade-up" data-aos-duration="700">
                <img
                    src="{{ asset('assets/images/corporate-car-hire-1.webp') }}"
                    alt="Executive with luxury corporate vehicles"
                    class="w-full h-full min-h-[240px] sm:min-h-[320px] lg:min-h-[400px] object-cover rounded-2xl"
                />
            </div>
            <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[652px]" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-deep-navy w-full">
                    Why Choose Lux Rentals UK For Corporate Car Hire Services?
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-body-gray w-full">
                    Every vehicle in our fleet is meticulously maintained, ready for executives, directors and clients. Beyond the cars themselves, we offer chauffeur services, nationwide delivery and flexible rental duration that guarantees a seamless high-class experience every time you book with us.
                </p>
                <flux:button href="{{ route('our-fleet') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Our Corporate Luxury Hire Fleet
                </flux:button>
            </div>
        </div>
    </section>

    {{-- Corporate events and executive travel --}}
    <section class="bg-white flex flex-col gap-10 sm:gap-[60px] items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-4 items-center text-center max-w-[894px] px-2" data-aos="fade-up" data-aos-duration="700">
            <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-charcoal w-full">
                Corporate Events And Executive Travel
            </h2>
            <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-dark-mid w-full">
                Lux Rentals UK elevates every corporate occasion with vehicles that don't just transport, but make a statement that reflects professionalism, prestige and immaculacy. Our luxury car hire services are also fully customisable as per your event, schedule and client expectations.
            </p>
        </div>

        <div class="flex flex-col gap-6 sm:gap-[30px] items-start w-full max-w-[1320px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-[30px] items-stretch w-full">
                @foreach ([
                    ['title' => 'Client hosting and transfers', 'body' => 'Impress clients arriving at meetings, conferences and events with luxury cars and optional chauffeur services.'],
                    ['title' => 'Executive Rentals', 'body' => 'Flexible daily, weekly, or long-term hire packages to suit company directors and VIP staff with reliability and style.'],
                    ['title' => 'Corporate Events & Launches', 'body' => 'Make product launches, galas, or award nights unforgettable with sports car rentals and luxury sedans.'],
                    ['title' => 'Airport Transfers', 'body' => 'Ensure timely, stress-free arrivals and departures for high-profile individuals, combining comfort and safety.'],
                ] as $pillar)
                    <div class="flex flex-1 gap-4 sm:gap-5 items-start min-w-0" data-aos="fade-up" data-aos-delay="{{ $loop->index * 70 }}" data-aos-duration="650">
                        <div class="w-px min-h-[4rem] sm:min-h-[124px] self-stretch bg-light-gold shrink-0" aria-hidden="true"></div>
                        <div class="flex flex-col gap-3 sm:gap-4 items-start min-w-0 flex-1">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl md:text-2xl leading-snug sm:leading-9 tracking-[-0.4px] text-near-black w-full">
                                {{ $pillar['title'] }}
                            </h3>
                            <p class="font-sans font-normal text-sm sm:text-base leading-6 tracking-[-0.3px] text-mid-gray w-full">
                                {{ $pillar['body'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="bg-white flex flex-col items-start px-4 sm:px-8 lg:px-20 pb-16 sm:pb-24 lg:pb-[120px] w-full">
        <div class="bg-charcoal flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4 sm:gap-5 items-center text-white text-center max-w-[900px] px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full">
                    Experience Corporate Luxury Like Never Before
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] w-full">
                    Make an impression before even stepping into the building. With our corporate luxury car hire, every trip, meeting, or event reflects professionalism and uncompromising style.
                </p>
            </div>
            <flux:button href="{{ route('contact-us') }}" variant="primary" size="lg">
                Rent Luxury Car
            </flux:button>
        </div>
    </section>
</x-public-layout>
