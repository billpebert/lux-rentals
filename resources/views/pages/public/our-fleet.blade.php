<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component
{
    //
};
?>

@php
    $supercarHighlightCards = [
        ['title' => 'Ferraris', 'body' => 'Sleek design, razor-sharp handling and an unmistakable presence.'],
        ['title' => 'Lamborghinis', 'body' => 'Bold, powerful and built for those who want to be noticed.'],
        ['title' => 'McLarens', 'body' => 'Cutting-edge performance and British engineering at its finest.'],
    ];
    $prestigeSedanHighlightCards = [
        ['title' => 'Rolls-Royces', 'body' => 'Unmatched comfort and timeless design.'],
        ['title' => 'Bentleys', 'body' => 'Choose a blend of British craftsmanship and power.'],
        ['title' => 'Mercedes Benz', 'body' => 'Experience the classiest drive combined with modern technology.'],
    ];
    $luxurySuvHighlightCards = [
        ['title' => 'Range Rovers', 'body' => 'The gold standard in luxury SUV car rentals.'],
        ['title' => 'Porsches', 'body' => 'Experience the sports car spirit in an SUV body.'],
        ['title' => 'BMWs', 'body' => 'Command bold presence with unmatched comfort.'],
    ];
    $sportsCarsHighlightCards = [
        ['title' => 'Porsches', 'body' => 'A true icon of automotive engineering, delivering precision handling and timeless design.'],
        ['title' => 'Aston Martins', 'body' => 'The perfect blend of British craftsmanship, refined performance, and movie-star appeal.'],
        ['title' => 'Audis', 'body' => 'Quattro grip and breathtaking acceleration, offering a thrilling driving experience.'],
    ];
@endphp

<div>
    {{-- Hero Section --}}
    <x-public.hero-section image="{{ asset('assets/images/bg-our-fleet.webp') }}">
        <div class="flex flex-col gap-4 sm:gap-6 items-start text-off-white" data-aos="fade-up" data-aos-duration="750">
            <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase max-w-[864px]">
                Hire Exotic Cars That Make A Statement
            </h1>
            <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] text-off-white/95">
                Choose from a luxury car rental collection that is handpicked to deliver prestige, performance and presence.
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="120" data-aos-duration="750">
            <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                Book A Luxury Car Hire
            </flux:button>
        </div>
    </x-public.hero-section>

    @foreach ([
        ['heading' => 'Supercar Hire', 'tagline' => 'Pure Adrenaline', 'intro' => "Few things compare to the thrill of a supercar. The roar of a Lamborghini. The precision of a Ferrari. The elegance of a McLaren. These cars are more than machines; they're moments of pure excitement. Some of our supercar hire options include:", 'cards' => $supercarHighlightCards, 'cta' => 'Book Your Supercar Rental'],
        ['heading' => 'Prestige Sedan Hire', 'tagline' => 'Elegance In Motion', 'intro' => "Our prestige car hire collection includes world-class sedans designed to impress at every occasion. Whether you're arriving at a business meeting or celebrating a wedding, these cars set the standard for luxury travel.", 'cards' => $prestigeSedanHighlightCards, 'cta' => 'Hire A Luxury Sedan'],
        ['heading' => 'Luxury SUVs Hire', 'tagline' => 'Prestige That Goes The Distance', 'intro' => 'Combine versatile cargo and passenger space with high-end interiors and advanced technology. Our SUV luxury car hire collection has vehicles that are perfect for family drives, business travel.', 'cards' => $luxurySuvHighlightCards, 'cta' => 'Reserve Your Luxury SUV Rental'],
        ['heading' => 'Sports Cars Hire', 'tagline' => 'Unparalleled Performance & Style', 'intro' => 'Our sports car rental collection shines when you are looking for the perfect balance of speed, handling and, of course, style. Book your luxury car rental ride with our fleet options that include:', 'cards' => $sportsCarsHighlightCards, 'cta' => 'Hire A Sports Car'],
    ] as $section)
        <section class="bg-white flex flex-col items-center container w-full">
            <div class="flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-16 sm:py-24 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full">

                <div class="flex flex-col gap-4 sm:gap-5 items-center text-center w-full px-2" data-aos="fade-up" data-aos-duration="700">
                    <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize text-charcoal w-full">
                        {{ $section['heading'] }}
                    </h2>
                    <div class="flex flex-col gap-2 items-center font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] text-body-gray max-w-full">
                        <p class="w-full max-w-[587px]">{{ $section['tagline'] }}</p>
                        <p class="w-full max-w-[882px]">{{ $section['intro'] }}</p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-6 lg:gap-[30px] items-stretch w-full min-h-0">
                    @foreach ($section['cards'] as $card)
                        <div class="flex-1 min-w-0 w-full" data-aos="fade-up" data-aos-delay="{{ $loop->index * 90 }}" data-aos-duration="650">
                            <x-public.highlight-card :title="$card['title']" :body="$card['body']" />
                        </div>
                    @endforeach
                </div>

                <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                    {{ $section['cta'] }}
                </flux:button>
            </div>
        </section>
    @endforeach

    <div data-aos="fade-up" data-aos-duration="750">
        <x-public.drive-away-cta />
    </div>
</div>
