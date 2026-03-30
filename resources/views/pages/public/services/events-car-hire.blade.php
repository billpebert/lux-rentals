<x-public-layout>
    {{-- Hero --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-events-car-hire.webp') }}"
        overlay-class="bg-black/80"
        content-max-class="max-w-[866px]"
    >
        <div class="flex flex-col gap-6 sm:gap-10 items-start text-off-white w-full">
            <div class="flex flex-col gap-4 items-start w-full" data-aos="fade-up" data-aos-duration="750">
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase w-full">
                    Make A Grand Entrance With Our Event Car Hire Service
                </h1>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] text-off-white/95">
                    Arrive at glamorous red carpet nights, milestone birthdays, corporate functions and VIP celebrations with our luxury car rentals for events in the UK.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
                <flux:button href="{{ route('our-fleet') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Browse Our Fleet
                </flux:button>
            </div>
        </div>
    </x-public.hero-section>

    {{-- Collection overview --}}
    <section class="bg-white flex flex-col items-start px-4 sm:px-8 lg:px-20 py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="bg-charcoal flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-20 rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col items-center text-white text-center max-w-[876px] px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full">
                    Our Collection Of Luxury Car Hire For Your Event
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-[60px] items-start w-full text-white max-w-[1260px] mx-auto">
                @foreach ([
                    [
                        'title' => 'Rolls-Royce & Bentley',
                        'body' => 'Set the mood for the night with these timeless icons of elegance, perfect for black-tie galas, milestone birthdays, and VIP arrivals.',
                    ],
                    [
                        'title' => 'Range Rovers & Luxury SUVs',
                        'body' => 'Great for group arrivals at concerts, sports events or even family celebrations. Our luxury SUVs for rent are spacious, bold and well-maintained.',
                    ],
                    [
                        'title' => 'Sports Cars & Supercars',
                        'body' => 'For when you want all eyes on you, our Porsches, Aston Martins, and Audi R8s luxury car rentals bring you just that.',
                    ],
                ] as $block)
                    <div class="flex flex-col gap-[10px] items-start flex-1 min-w-0" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}" data-aos-duration="650">
                        <h3 class="font-heading font-semibold text-lg sm:text-xl md:text-2xl leading-snug sm:leading-9 tracking-[-0.4px] w-full">
                            {{ $block['title'] }}
                        </h3>
                        <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full">
                            {{ $block['body'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Luxury car rentals — image left, content right --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full justify-center">
            <div class="flex-1 w-full min-h-[240px] sm:min-h-[320px] lg:min-h-[462px] flex items-center justify-center rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-duration="700">
                <img
                    src="{{ asset('assets/images/events-car-hire-1.webp') }}"
                    alt="Guests celebrating in a luxury vehicle"
                    class="size-full max-h-[420px] lg:max-h-none object-cover rounded-2xl"
                />
            </div>

            <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[652px] shrink-0" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-deep-navy w-full">
                    Luxury Car Rentals That Elevate Your Occasion
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-body-gray w-full">
                    No two events are the same, and neither are our cars. Whether it’s corporate car hire for an awards night, chauffeured transport for a gala, or VIP &amp; celebrity transport with our security fleet hire, our event car hire is all about detail, presence, and making your entrance matter.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 items-stretch sm:items-center w-full">
                    <flux:button href="{{ route('contact-us') }}" variant="primary" class="w-full sm:w-auto justify-center">
                        Book Your Luxury Car Hire
                    </flux:button>
                    <flux:button href="{{ route('chauffeur-service') }}" variant="outline" class="w-full sm:w-auto justify-center">
                        Book A Chauffeur Service
                    </flux:button>
                </div>
            </div>
        </div>
    </section>

    {{-- Popular picks --}}
    <section class="bg-white flex flex-col gap-10 sm:gap-16 items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-4 items-center text-center max-w-[894px] px-2" data-aos="fade-up" data-aos-duration="700">
            <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-charcoal w-full">
                Our Most Popular Event Car Hire Picks
            </h2>
            <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-dark-mid w-full">
                Our event car hire collection includes some of the most sought-after luxury vehicles in the world. Many hosts choose the timeless presence of a Rolls-Royce or Bentley for galas and black-tie evenings. For group arrivals at concerts, premiers, and celebrations, Range Rovers offer space with sleek luxury. And when you want every head to turn, nothing matches the impact of a Lamborghini or Ferrari on the approach. We have it all.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full justify-center">
            <div class="flex flex-col gap-8 sm:gap-[60px] items-start w-full max-w-[518px] lg:flex-1" data-aos="fade-up" data-aos-duration="700">
                <h3 class="font-heading font-bold text-xl sm:text-2xl md:text-[32px] leading-tight sm:leading-[42px] tracking-[-0.5px] text-charcoal w-full">
                    Our Luxury Car Rentals For Your Events Are:
                </h3>
                <ul class="flex flex-col gap-4 sm:gap-5 items-start list-none p-0 m-0 w-full">
                    @foreach ([
                        'Serviced daily for peak performance, safety and reliability so you can have the true luxury car hire experience.',
                        'Undergone strict safety inspections from engine checks to tyre performance, giving you complete peace of mind.',
                        'Presented in pristine, showroom-ready conditions with squeaky-clean interiors and immaculate exteriors for every rental and chauffeur service.',
                        'Maintained for every detail. From polished alloys to perfectly detailed leather seats, our team ensures each vehicle feels brand new.',
                    ] as $item)
                        <li class="flex gap-3 items-start w-full">
                            <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="" class="size-6 shrink-0 mt-0.5" />
                            <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-charcoal flex-1 min-w-0">
                                {{ $item }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="relative flex-1 w-full max-w-[628px] min-h-[280px] sm:min-h-[360px] lg:min-h-[462px] shrink-0" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <div class="absolute h-[236px] left-1/2 -translate-x-1/2 lg:left-[35%] lg:translate-x-0 top-16 opacity-20 w-[384px] max-w-[90vw] pointer-events-none overflow-hidden -z-0" aria-hidden="true">
                    <div class="absolute inset-0 bg-light-gold/30 blur-3xl rounded-full scale-150"></div>
                </div>
                <div class="relative z-10 flex gap-3 items-center h-full min-h-[280px] sm:min-h-[360px] lg:min-h-[462px] justify-center lg:justify-start">
                    <img
                        src="{{ asset('assets/images/events-car-hire-2.webp') }}"
                        alt="Chauffeur and vehicle detail"
                        class="size-full max-h-[420px] lg:max-h-none object-cover rounded-2xl"
                    />
                </div>
            </div>
        </div>
    </section>

    <div data-aos="fade-up" data-aos-duration="750">
        <x-public.section-exclusive-lux-card />
    </div>

    {{-- Final CTA --}}
    <section class="bg-white flex flex-col items-start px-4 sm:px-8 lg:px-20 pb-16 sm:pb-24 lg:pb-[120px] w-full">
        <div class="bg-charcoal flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4 sm:gap-5 items-center text-white text-center max-w-[900px] px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full">
                    Make Your Event More Than A Date On The Calendar
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px]">
                    Let our fleet set the tone before the first toast.
                </p>
            </div>
            <flux:button href="{{ route('contact-us') }}" variant="primary" size="lg">
                Reserve Your Luxury Car Rental
            </flux:button>
        </div>
    </section>
</x-public-layout>
