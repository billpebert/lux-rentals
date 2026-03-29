<x-public-layout>
    {{-- Hero --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-chauffeur-service.webp') }}"
        overlay-class="bg-black/80"
        content-max-class="max-w-[797px]"
    >
        <div class="flex flex-col gap-6 sm:gap-10 items-start text-[#e9e9e9] w-full">
            <div class="flex flex-col gap-4 items-start w-full" data-aos="fade-up" data-aos-duration="750">
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase w-full">
                    Luxury Chauffeur Service In The UK, On Time, Every Time
                </h1>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] w-full max-w-[746px] text-[#e9e9e9]/95">
                    Our highly trained Chauffeur drivers combine expert driving skills, local knowledge and attention to detail so that you travel safely, smoothly and luxuriously.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
                <flux:button href="{{ route('contact-us') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Hire A Chauffeur Driver
                </flux:button>
            </div>
        </div>
    </x-public.hero-section>

    @php
        $chauffeurHireHighlightCards = [
            [
                'title' => 'Professional Chauffeur Drivers',
                'body' => 'Our chauffeur drivers are handpicked for professionalism, discretion and local knowledge so that you are guaranteed to arrive on time and in comfort.',
            ],
            [
                'title' => 'Tailored For UK Chauffeur Hires',
                'body' => 'From airport runs to private tours, relax knowing every detail is handled with precision by our UK chauffeur hire that adapts to your schedule.',
            ],
            [
                'title' => 'Experts For Every Luxury Vehicle',
                'body' => 'Our professional Chauffeur drivers are skilled with supercars to luxury sedans. Choose your dream ride and we\'ll provide both expert driving and our exclusive fleet for you.',
            ],
        ];
    @endphp

    {{-- Why choose our chauffeur hire --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-10 sm:gap-[60px] items-center justify-center w-full">
            <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#26251D] text-center w-full max-w-[900px] px-2" data-aos="fade-up" data-aos-duration="700">
                Why Choose Our Chauffeur Hire Service
            </h2>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-[30px] items-stretch w-full min-h-0">
                @foreach ($chauffeurHireHighlightCards as $card)
                    <div class="flex-1 min-w-0 w-full" data-aos="fade-up" data-aos-delay="{{ $loop->index * 90 }}" data-aos-duration="650">
                        <x-public.highlight-card :title="$card['title']" :body="$card['body']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- The experience that sets us apart --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full justify-center">
            <div class="relative flex-1 w-full max-w-[628px] min-h-[280px] sm:min-h-[360px] lg:min-h-[462px] shrink-0 order-2 lg:order-1" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <div class="absolute h-[236px] left-1/2 -translate-x-1/2 lg:left-[35%] lg:translate-x-0 top-24 opacity-20 w-[384px] max-w-[90vw] pointer-events-none overflow-hidden -z-0" aria-hidden="true">
                    <div class="absolute inset-0 bg-light-gold/30 blur-3xl rounded-full scale-150"></div>
                </div>
                <div class="relative z-10 flex gap-3 items-center h-full min-h-[280px] sm:min-h-[360px] lg:min-h-[462px] justify-center lg:justify-start">
                    <img
                        src="{{ asset('assets/images/chauffeur-service-1.webp') }}"
                        alt="Luxury chauffeur vehicle"
                        class="size-full max-h-[420px] lg:max-h-none object-cover rounded-2xl"
                    />
                </div>
            </div>

            <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[652px] order-1 lg:order-2" data-aos="fade-up" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                    The Experience That Sets Us Apart
                </h2>
                <div class="flex flex-col gap-4 items-start text-[#585d64] font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] w-full">
                    <p class="w-full">
                        Our chauffeur drivers are trained to anticipate your needs, offer local insights and ensure you travel with complete safety and peace of mind. From the moment you step into one of our prestige vehicles for rent, you can relax, enjoy the surroundings and let us handle the rest.
                    </p>
                    <p class="w-full">
                        Because for us, luxury isn't just about the car, it's about making every mile an experience you'll remember.
                    </p>
                </div>
                <flux:button href="{{ route('contact-us') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Hire Your Chauffeur Service
                </flux:button>
            </div>
        </div>
    </section>

    {{-- Perfect for every occasion --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-start w-full">
            <div class="flex flex-col gap-10 sm:gap-[60px] items-start w-full max-w-[628px] lg:flex-1" data-aos="fade-up" data-aos-duration="700">
                <div class="flex flex-col gap-4 items-start w-full">
                    <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                        Perfect For Every Occasion
                    </h2>
                    <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] max-w-[587px] w-full">
                        No two journeys are the same, and neither are our chauffeur services. From the bride's big entrance to a CEO's important meeting, our chauffeur drivers adapt and tailor to every single detail so seamlessly that you won't even notice they're there, as if they're simply a part of the day, not a hired presence.
                    </p>
                </div>
                <div class="flex flex-col gap-6 sm:gap-8 items-start w-full">
                    <h3 class="font-heading font-bold text-xl sm:text-2xl md:text-[32px] leading-tight sm:leading-[42px] tracking-[-0.5px] text-[#26251D] w-full max-w-[518px]">
                        Events We Cover:
                    </h3>
                    <ul class="flex flex-col gap-4 sm:gap-5 items-start list-none p-0 m-0 w-full">
                        @foreach ([
                            'Wedding chauffeur hire for your big day',
                            'Corporate and executive travel with discreet chauffeur drivers',
                            'VIP and celebrity transport with complete privacy',
                            'Airport transfers for stress-free arrivals and departures',
                            'Daily, weekly or monthly chauffeur service for regular travel',
                        ] as $line)
                            <li class="flex gap-3 items-start w-full">
                                <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="" class="size-6 shrink-0 mt-0.5" />
                                <span class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-[#26251D] flex-1 min-w-0">
                                    {{ $line }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-3 w-full max-w-[628px] lg:flex-1 lg:min-h-0" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <div class="flex-1 relative rounded-2xl overflow-hidden min-h-[200px] sm:min-h-[240px] aspect-[4/3] lg:aspect-auto lg:min-h-[300px] lg:flex-1">
                    <img
                        src="{{ asset('assets/images/chauffeur-service-2.webp') }}"
                        alt="Professional chauffeur"
                        class="absolute inset-0 size-full object-cover rounded-2xl"
                    />
                </div>
                <div class="flex-1 relative rounded-2xl overflow-hidden min-h-[200px] sm:min-h-[240px] aspect-[4/3] lg:aspect-auto lg:min-h-[300px] lg:flex-1">
                    <img
                        src="{{ asset('assets/images/chauffeur-service-3.webp') }}"
                        alt="Chauffeur with luxury vehicle"
                        class="absolute inset-0 size-full object-cover rounded-2xl"
                    />
                </div>
            </div>
        </div>
    </section>

    {{-- Travel like the VIP you are --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full justify-center">
            <div class="flex-1 w-full max-w-[628px] shrink-0 rounded-2xl overflow-hidden min-h-[240px] sm:min-h-[320px]" data-aos="fade-up" data-aos-duration="700">
                <img
                    src="{{ asset('assets/images/chauffeur-service-4.webp') }}"
                    alt="Chauffeur opening vehicle door for a guest"
                    class="size-full object-cover rounded-2xl"
                />
            </div>
            <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[652px]" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                    Travel Like The VIP You Are
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full">
                    Step into your married life, seal a business deal, or just travel in style with a chauffeur-driven luxury car because you deserve it.
                </p>
                <flux:button href="{{ route('contact-us') }}" variant="primary" class="w-full sm:w-auto justify-center">
                    Hire a Chauffeur Service
                </flux:button>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="bg-white flex flex-col items-start px-4 sm:px-8 lg:px-20 pb-16 sm:pb-24 lg:pb-[120px] w-full">
        <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
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
