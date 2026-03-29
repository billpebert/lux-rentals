<x-public-layout>
    {{-- Hero --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-wedding-car-hire.webp') }}"
        overlay-class="bg-black/80"
        content-max-class="max-w-[1236px]"
    >
        <div class="flex flex-col gap-6 sm:gap-10 items-start text-[#e9e9e9] w-full">
            <div class="flex flex-col gap-4 items-start w-full" data-aos="fade-up" data-aos-duration="750">
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase w-full">
                    Luxury Wedding Car Hires, Designed To Make Your Nuptials Extra Special
                </h1>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] text-[#e9e9e9]/95">
                    Choose from a fleet of prestige cars and luxury car rental options that transform your big day commute into a statement of elegance.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 items-stretch sm:items-center w-full sm:w-auto" data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
                <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                    Book Your Luxury Car
                </flux:button>
                <flux:button href="#" variant="outline" class="w-full sm:w-auto justify-center">
                    Book Your Wedding Car Hire
                </flux:button>
            </div>
        </div>
    </x-public.hero-section>

    {{-- Luxury wedding car hire for every style --}}
    <section class="bg-white flex flex-col items-start px-4 sm:px-8 lg:px-20 py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-20 rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4 items-center text-white text-center max-w-[796px] px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full">
                    Luxury Wedding Car Hire For Every Style
                </h2>
                <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full">
                    We have a wedding car hire collection that will suit your theme perfectly, be it modern, classic or glamorous extravaganza. Our Wedding car hire collection includes, but is not limited to:
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-[60px] items-start w-full justify-center">
                @foreach ([
                    ['title' => 'Rolls-Royce & Bentley', 'body' => 'Continue the timeless elegance of your big day by choosing a Rolls-Royce or Bentley for your wedding car hire.'],
                    ['title' => 'Luxury SUVs & Range Rovers', 'body' => 'Our luxury SUV rental options are perfect for bridal parties or grand arrivals, combining space and elegance for a memorable wedding day.'],
                    ['title' => 'Sports Cars & Supercars', 'body' => 'Turn heads with our sports car rental and supercars. Make a bold wedding entrance, enjoy a thrilling performance, and create lasting memories for your special day.'],
                ] as $col)
                    <div class="flex gap-5 items-start w-full max-w-[380px]" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}" data-aos-duration="650">
                        <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="ornament" class="size-6">
                        <div class="flex flex-col gap-[10px] items-start text-white min-w-0">
                            <h3 class="font-heading font-semibold text-lg sm:text-xl md:text-2xl leading-snug sm:leading-9 tracking-[-0.4px] w-full">
                                {{ $col['title'] }}
                            </h3>
                            <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full">
                                {{ $col['body'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <flux:button href="#" variant="primary" size="lg">
                Book Your Wedding Car Hire
            </flux:button>
        </div>
    </section>

    {{-- Wedding chauffeur service --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-center w-full justify-center">
            <div class="relative flex-1 w-full max-w-[628px] min-h-[280px] sm:min-h-[360px] lg:min-h-[462px] shrink-0 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-duration="700">
                <img
                    src="{{ asset('assets/images/wedding-car-hire-1.webp') }}"
                    alt="Couple with a luxury wedding car"
                    class="size-full object-cover rounded-2xl"
                />
            </div>

            <div class="flex flex-col gap-6 sm:gap-8 items-start w-full max-w-[628px]" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                    Wedding Chauffeur Service For A Stress-Free Day
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-[#585d64] max-w-[587px] w-full">
                    You have a million things to think about for the big day, and the last thing you need is to worry about the ride. Step into the cool, quiet cabin of a luxury car hire with a professional chauffeur who will lead the perfect arrival and a getaway that feels like the start of your very own fairy tale.
                </p>
                <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                    Get A Wedding Chauffeur
                </flux:button>
            </div>
        </div>
    </section>

    {{-- Popular picks & packages --}}
    <section class="bg-white flex flex-col items-start px-4 sm:px-8 lg:px-20 py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-20 rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4 items-center text-white text-center max-w-[894px] px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full">
                    Our Most Popular Wedding Car Hire Picks
                </h2>
                <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full">
                    Our wedding car hire collection includes some of the most sought-after luxury vehicles in the world. Many couples choose the timeless elegance of a Rolls-Royce or Bentley, both of which offer refined comfort and prestige that perfectly match the sophistication of a fairy tale wedding. For the brides and grooms who want a touch of modern glamour, Range Rovers are popular among bridal parties as they combine space with sleek luxury. And for those who want to make a bold statement, nothing compares to the thrill of arriving in a Lamborghini or Ferrari. We have it all.
                </p>
            </div>

            <div class="flex flex-col-reverse lg:flex-row gap-10 lg:gap-[60px] items-center w-full justify-between">
                <div class="flex flex-col gap-8 sm:gap-[60px] items-start w-full max-w-[654px]" data-aos="fade-up" data-aos-duration="700">
                    <div class="flex flex-col gap-4 items-start text-white">
                        <h3 class="font-heading font-bold text-xl sm:text-2xl md:text-[32px] leading-tight sm:leading-[42px] tracking-[-0.5px] w-full">
                            Tailored Wedding Car Hire Packages
                        </h3>
                        <p class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] w-full">
                            We offer fully tailored wedding car hire packages, designed to suit your schedule, venue, and style preferences.
                        </p>
                    </div>
                    <ul class="flex flex-col gap-4 sm:gap-5 items-start list-none p-0 m-0 w-full">
                        @foreach ([
                            'Flexible rental periods: daily, weekly, or special occasion hire.',
                            'Options for single vehicles or multiple cars for bridal parties.',
                            'Complimentary consultation to match the perfect prestige car hire to your theme.',
                        ] as $line)
                            <li class="flex gap-3 items-start sm:items-center w-full">
                                <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="ornament" class="size-4">
                                <span class="font-sans font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-white flex-1 min-w-0">
                                    {{ $line }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relative flex-1 w-full max-w-[628px] min-h-[280px] sm:min-h-[360px] lg:min-h-[462px] shrink-0 rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                    <img
                        src="{{ asset('assets/images/wedding-car-hire-2.webp') }}"
                        alt="Wedding car decoration"
                        class="size-full object-cover rounded-2xl"
                    />
                </div>
            </div>
        </div>
    </section>

    @php
        $weddingFleetShowcaseCards = [
            ['image' => 'placeholder-image-1.webp', 'title' => 'Wedding car hire', 'body' => null],
            ['image' => 'placeholder-image-2.webp', 'title' => 'Wedding chauffeur', 'body' => null],
            ['image' => 'placeholder-image-3.webp', 'title' => 'Luxury SUV Hire', 'body' => null],
            ['image' => 'placeholder-image-4.webp', 'title' => 'Sports Car Hire', 'body' => null],
        ];
    @endphp

    {{-- Because ordinary + fleet-style cards --}}
    <section class="bg-white flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-10 sm:gap-16 items-center w-full">

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-8 w-full">
                <div class="flex flex-col gap-4 items-start w-full max-w-[724px]" data-aos="fade-up" data-aos-duration="700">
                    <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-[#112336] w-full">
                        Because Ordinary Just Won’t Do
                    </h2>
                    <p class="font-sans font-normal text-base sm:text-lg leading-[27px] tracking-[-0.3px] text-[#585d64]">
                        On the biggest day of your life, don’t settle for anything less than breathtaking. Choose the perfect wedding car hire to match your perfect day.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                    <flux:button href="#" variant="outline" icon:trailing="chevron-right" class="w-full sm:w-auto shrink-0 justify-center lg:justify-start">
                        Book Your Wedding Car Hire
                    </flux:button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-[1320px] items-center w-full justify-center">
                @foreach ($weddingFleetShowcaseCards as $card)
                    <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 90 }}" data-aos-duration="650" class="min-w-0">
                        <a href="#" class="relative rounded-xl h-[398px] flex items-end p-5 overflow-hidden shrink-0 w-full">
                            <img
                                src="{{ asset('assets/images/'.$card['image']) }}"
                                alt="{{ $card['title'] }}"
                                class="w-full h-full absolute inset-0 size-full object-cover"
                            />
                            {{-- overlay gradient --}}
                            <div class="absolute inset-0 bg-linear-to-b from-transparent from-23% to-black to-88%"></div>
                            <div class="w-full flex flex-col gap-2 relative z-10">
                                <h3 class="font-heading font-semibold text-lg leading-snug sm:text-xl sm:leading-8 lg:text-2xl lg:leading-9 tracking-[-0.4px] text-white sm:whitespace-nowrap">
                                    {{ $card['title'] }}
                                </h3>
                                @if (filled($card['body'] ?? null))
                                    <p class="font-sans font-normal text-sm leading-snug sm:text-base sm:leading-6 tracking-[-0.3px] text-white/80">
                                        {{ $card['body'] }}
                                    </p>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-public-layout>
