@php
$fleetShowcaseCards = [
    [
        'image' => 'placeholder-image-1.webp',
        'title' => 'Super Car Hire',
        'body' => 'Experience the world\'s most exhilarating drives with iconic Ferrari, Lamborghini and McLaren.',
    ],
    [
        'image' => 'placeholder-image-2.webp',
        'title' => 'Prestige Sedan Hire',
        'body' => null,
    ],
    [
        'image' => 'placeholder-image-3.webp',
        'title' => 'Luxury SUV Hire',
        'body' => null,
    ],
    [
        'image' => 'placeholder-image-4.webp',
        'title' => 'Sports Car Hire',
        'body' => null,
    ],
];
@endphp

{{-- Fleet Section --}}
<section class="flex flex-col items-center container py-16 sm:py-24 lg:py-[120px] w-full">
    <div class="flex flex-col gap-10 sm:gap-16 items-center w-full">

        {{-- Header row --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 lg:gap-8 w-full">
            <div class="flex flex-col gap-4 items-start w-full max-w-[724px]">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-deep-navy w-full">
                    Our Exclusive Luxury Car Hire Fleet
                </h2>
                <p class="font-sans font-normal text-base sm:text-lg leading-[27px] tracking-[-0.3px] text-body-gray">
                    Because ordinary simply doesn't exist in our vocabulary.
                </p>
            </div>
            <flux:button href="#" variant="outline" icon:trailing="chevron-right" class="w-full sm:w-auto shrink-0 justify-center lg:justify-start">
                Hire Luxury Cars
            </flux:button>
        </div>

        {{-- Cars grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-2 sm:gap-5 max-w-[1320px] items-center w-full justify-center">
            @foreach ($fleetShowcaseCards as $card)
                <a href="#" class="relative rounded-xl max-sm:aspect-[3/4] sm:h-[398px] flex items-end p-3 sm:p-5 overflow-hidden shrink-0">
                    <img
                        src="{{ asset('assets/images/'.$card['image']) }}"
                        alt="{{ $card['title'] }}"
                        class="w-full h-full absolute inset-0 size-full object-cover"
                    />
                    {{-- overlay gradient --}}
                    <div class="absolute inset-0 bg-linear-to-b from-transparent from-23% to-black to-88%"></div>
                    <div class="w-full flex flex-col gap-2 relative z-10">
                        <h3 class="font-heading font-semibold text-base leading-snug sm:text-xl sm:leading-8 lg:text-2xl lg:leading-9 tracking-[-0.4px] text-white sm:whitespace-nowrap">
                            {{ $card['title'] }}
                        </h3>
                        @if (filled($card['body'] ?? null))
                            <p class="font-sans font-normal text-sm leading-snug sm:text-base sm:leading-6 tracking-[-0.3px] text-white/80">
                                {{ $card['body'] }}
                            </p>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
