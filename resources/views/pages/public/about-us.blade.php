<x-public-layout>

    {{-- Hero Section --}}
    <x-public.hero-section image="{{ asset('assets/images/bg-homepage-default.webp') }}">
        <div class="flex flex-col gap-4 sm:gap-5 w-full items-start text-[#e9e9e9]" data-aos="fade-up" data-aos-duration="750">
            <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase w-full max-w-[864px]">
                We Deliver Phenomenal Car Rental Experiences
            </h1>
            <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] text-[#e9e9e9]/95">
                Lux Rentals has built its name on prestige car hire, exceptional service, and a fleet that turns heads wherever it goes.
            </p>
        </div>
    </x-public.hero-section>

    {{-- Stats — Our Fleet, Our Expertise, Our Promise --}}
    <div class="bg-[#F8F8F8]">
        <section class="flex flex-col items-start container py-16 sm:py-24 lg:py-[120px] w-full">
            <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-20 rounded-2xl sm:rounded-[30px] w-full">

                <h2 class="font-heading font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-[48px] leading-tight lg:leading-[56px] tracking-[-1px] text-white text-center px-2 lg:whitespace-nowrap" data-aos="fade-up" data-aos-duration="700">
                    Our Fleet, Our Expertise, Our Promise
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-[30px] items-stretch w-full">
                    <div class="flex flex-1 flex-col items-center justify-center px-4 sm:px-5 py-8 sm:py-10 rounded-2xl overflow-hidden text-white text-center gap-4 sm:gap-5 min-h-0" data-aos="fade-up" data-aos-delay="0" data-aos-duration="650">
                        <p class="font-heading font-bold text-4xl sm:text-5xl md:text-6xl lg:text-[72px] leading-none sm:leading-[85px] tracking-[-2.3px] uppercase">50+</p>
                        <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full max-w-[294px] mx-auto">Exotic, Luxury &amp; Supercars Maintained to Showroom Standard</p>
                    </div>
                    <div class="flex flex-1 flex-col items-center justify-center px-4 sm:px-5 py-8 sm:py-10 rounded-2xl overflow-hidden text-white text-center gap-3 sm:gap-[10px] min-h-0" data-aos="fade-up" data-aos-delay="90" data-aos-duration="650">
                        <p class="font-heading font-bold text-4xl sm:text-5xl md:text-6xl lg:text-[72px] leading-none sm:leading-[85px] tracking-[-2.3px] uppercase">100+</p>
                        <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full max-w-[268px] mx-auto">Vehicles Available for Luxury Car Hire Across the UK</p>
                    </div>
                    <div class="flex flex-1 flex-col items-center justify-center px-4 sm:px-5 py-8 sm:py-10 rounded-2xl overflow-hidden text-white text-center gap-3 sm:gap-[10px] min-h-0 md:col-span-2 lg:col-span-1" data-aos="fade-up" data-aos-delay="180" data-aos-duration="650">
                        <p class="font-heading font-bold text-4xl sm:text-5xl md:text-6xl lg:text-[72px] leading-none sm:leading-[85px] tracking-[-2.3px] uppercase">2000+</p>
                        <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full max-w-[296px] mx-auto">Happy Clients Experiencing Prestige, Performance &amp; Style</p>
                    </div>
                </div>

                <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-white text-center w-full max-w-[654px] px-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="650">
                    Our sports car rental, prestige car hire, and chauffeur services are available across Glasgow, Scotland, and nationwide.
                </p>

            </div>
        </section>
    </div>

    {{-- Bringing Dubai Luxury to the UK — text left, stacked images right --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col xl:flex-row gap-10 xl:gap-16 items-center w-full">

            {{-- Left: text --}}
            <div class="flex flex-col gap-6 sm:gap-8 items-start shrink-0 w-full xl:max-w-[628px] order-1" data-aos="fade-up" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                    Bringing Dubai Luxury to the UK
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                    What makes us different? We're the first company to bring Dubai's iconic luxury supercar culture to Scotland and beyond. That means access to exotic fleet options rarely seen on British roads, paired with the refinement and service that UK clients expect.
                </p>
            </div>

            {{-- Right: images — stacked on mobile, overlap on xl --}}
            <div class="relative w-full xl:flex-1 xl:min-h-[462px] order-2" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <img src="{{ asset('assets/images/about-us-1.webp') }}" alt="Luxury fleet" class="size-full object-cover" />
            </div>

        </div>
    </section>

    {{-- Not Just Cars. Connections. — images left, text right --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col xl:flex-row gap-10 xl:gap-16 items-center w-full">

            {{-- Text first on mobile --}}
            <div class="flex flex-col gap-6 sm:gap-8 items-start shrink-0 w-full xl:max-w-[628px] order-1 xl:order-2" data-aos="fade-up" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                    Not Just Cars. Connections.
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                    We know the difference between driving a car and experiencing one. A sports car rental isn't about point A to B; it's about the moment your heart races as the engine starts and the way people turn their heads when you arrive.
                </p>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                    We treat every client as part of the Lux Rentals family. Whether you're here for a single day or a long-term arrangement, you'll feel the same attention to detail, the same personal touch, and the same passion for excellence.
                </p>
            </div>

            {{-- Images --}}
            <div class="relative w-full xl:flex-1 xl:min-h-[462px] order-2 xl:order-1" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <img src="{{ asset('assets/images/about-us-2.webp') }}" alt="Lux Rentals client experience" class="size-full object-cover" />
            </div>

        </div>
    </section>

    {{-- A New Standard in Luxury Car Rental — dark card, checklist + image --}}
    <div class="bg-[#F8F8F8]">
        <section class="flex flex-col items-start container py-16 sm:py-24 lg:py-[120px] w-full">
            <div class="bg-[#26251D] flex flex-col lg:flex-row gap-10 lg:gap-[60px] items-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-20 rounded-2xl sm:rounded-[30px] w-full">

                {{-- Left: heading + checklist --}}
                <div class="flex flex-col gap-10 sm:gap-[60px] items-start shrink-0 w-full lg:max-w-[654px] lg:flex-1">
                    <div class="flex flex-col gap-4 items-start text-white w-full" data-aos="fade-up" data-aos-duration="700">
                        <h2 class="font-heading font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-[48px] leading-tight lg:leading-[56px] tracking-[-1px]">
                            A New Standard in Luxury Car Rental
                        </h2>
                        <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-white/95">
                            We didn't enter the UK market to blend in; we came to redefine it. Traditional car hire services give you a key, we give you an experience.
                        </p>
                    </div>

                    <ul class="flex flex-col gap-4 sm:gap-5 items-start w-full">
                        @foreach([
                            'Exotic, Dubai-inspired fleet rarely seen in Britain.',
                            'Flexible rentals, daily, weekly, or monthly.',
                            'Bespoke services for weddings, events, and VIP clients.',
                            'Professional chauffeur service for a premium journey.',
                        ] as $item)
                            <li class="flex gap-3 items-start sm:items-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 70 }}" data-aos-duration="600">
                                {{-- Gold slash/check icon --}}
                                <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="ornament" class="size-6">
                                <span class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-white">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Right: image --}}
                <div class="flex-1 w-full min-h-[200px] sm:min-h-[280px] lg:aspect-auto lg:min-h-[280px] relative rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                    <img src="{{ asset('assets/images/about-us-4.webp') }}" alt="Luxury car rental showroom" class="size-full object-cover" />
                </div>

            </div>
        </section>
    </div>

    {{-- Driving the Experience Forward — text left, image right --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full">

            {{-- Left: text --}}
            <div class="flex-1 flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[628px]" data-aos="fade-up" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                    Driving the Experience Forward
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                    A great drive is more than horsepower or leather seats. It's the confidence of knowing your car is flawless, the comfort of a team that's always available, and the feeling of being treated like a VIP. That's what makes us the trusted choice for sports car rental and corporate car hire across the UK.
                </p>
            </div>

            {{-- Right: image --}}
            <div class="flex-1 w-full min-w-0 relative rounded-2xl overflow-hidden aspect-[490/317] max-h-[400px] lg:max-h-none lg:aspect-auto lg:min-h-[280px]" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <img src="{{ asset('assets/images/chauffeur-service-1.webp') }}" alt="Driver in luxury car" class="size-full object-cover" />
            </div>

        </div>
    </section>

    {{-- Our Promise — image left, text + buttons right --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full max-w-[1320px] mx-auto">

            {{-- Left: image --}}
            <div class="flex-1 w-full min-w-0 relative rounded-2xl overflow-hidden min-h-[200px] sm:min-h-[280px] aspect-[4/3] lg:aspect-auto lg:h-[430px]" data-aos="fade-up" data-aos-duration="700">
                <img src="{{ asset('assets/images/about-us-5.webp') }}" alt="Luxury car in showroom" class="size-full object-cover" />
            </div>

            {{-- Right: text + buttons --}}
            <div class="shrink-0 w-full lg:max-w-[766px] flex flex-col gap-6 sm:gap-8 items-start" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[628px]">
                    <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                        Our Promise
                    </h2>
                    <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] w-full max-w-[587px]">
                        We want you to feel our passion through our luxuriously maintained rental cars in the UK. Whether it's the growl of a supercar or the quiet elegance of a Bentley with a chauffeur, you'll know you're in good hands.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-center w-full sm:w-auto">
                    <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                        Hire A Luxury Car
                    </flux:button>
                    <flux:button href="#" variant="outline" class="w-full sm:w-auto justify-center">
                        Book A Chauffeur Service
                    </flux:button>
                </div>
            </div>

        </div>
    </section>

    {{-- Drive Away CTA --}}
    <div data-aos="fade-up" data-aos-duration="750">
        <x-public.drive-away-cta />
    </div>

</x-public-layout>
