<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component
{
    //
};
?>

@php
    use Illuminate\Support\Str;

    $blogPosts = [
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'Top 5 Supercars You Can Hire in the UK Right Now',
            'excerpt' => 'From the roar of a Lamborghini to the precision of a McLaren, discover the most sought-after supercars available for hire across Britain.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'Why Prestige Car Hire Is the New Standard for Corporate Travel',
            'excerpt' => 'Business travel has evolved. Find out why more executives are choosing luxury car hire over traditional transport for client meetings and events.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'How to Choose the Perfect Wedding Car: A Complete Guide',
            'excerpt' => 'Your wedding day deserves a vehicle as exceptional as the moment. Here\'s everything you need to know about hiring the perfect wedding car.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'The Rise of Exotic Car Culture in Scotland',
            'excerpt' => 'Scotland is quickly becoming a hub for exotic car enthusiasts. We explore the growing demand for supercar experiences north of the border.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'Range Rover vs Bentley Bentayga: Which Luxury SUV Should You Hire?',
            'excerpt' => 'Two icons, one decision. We break down the key differences to help you choose the ideal luxury SUV for your next hire.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => '7 Unforgettable Driving Routes Across the UK',
            'excerpt' => 'The UK has some of Europe\'s most scenic roads. Pair them with a prestige hire vehicle and you have the recipe for an extraordinary drive.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'What to Expect from a Chauffeur Service: Your Questions Answered',
            'excerpt' => 'First time booking a chauffeur? We cover everything from etiquette and what\'s included, to why it\'s the ultimate way to travel in style.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'Ferrari vs Lamborghini: The Ultimate Supercar Hire Showdown',
            'excerpt' => 'Both are icons of performance. But which one is right for your hire experience? We put the prancing horse against the raging bull.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'How Dubai\'s Luxury Car Culture Inspired Lux Rentals',
            'excerpt' => 'Our story began in the gleaming streets of Dubai. Here\'s how we brought that world-class exotic car culture to the roads of Scotland and beyond.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'The Best Luxury Cars for a Weekend Getaway in the Scottish Highlands',
            'excerpt' => 'Wide open roads, dramatic landscapes, and the hum of a high-performance engine — here are the best cars for exploring Scotland in style.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => 'Rolls-Royce Phantom vs Ghost: Which is Right for Your Event?',
            'excerpt' => 'Both command attention, but for different reasons. We compare two of Rolls-Royce\'s finest to help you pick the perfect car for your occasion.',
        ],
        [
            'image' => 'dubai-extravagance.webp',
            'title' => '5 Reasons to Choose a Luxury Car Hire for Your Next Birthday Celebration',
            'excerpt' => 'Birthdays deserve more than a taxi. Discover why a prestige car hire experience is the gift that turns a special day into an unforgettable memory.',
        ],
    ];
@endphp

<div>
    {{-- Hero Section --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-blog.webp') }}"
        overlay-class="bg-black/80"
        section-class="min-h-[min(100dvh,420px)] sm:min-h-[514px]"
    >
        <div class="flex flex-col gap-4 sm:gap-5 items-start text-[#e9e9e9]" data-aos="fade-up" data-aos-duration="750">
            <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase max-w-[864px]">
                The Art Of Driving Luxury
            </h1>
            <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] text-[#e9e9e9]/95">
                Insights, guides, and stories from the world of prestige car hire — curated for those who expect the extraordinary.
            </p>
        </div>
    </x-public.hero-section>

    {{-- Blog Grid --}}
    <section class="bg-white container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex flex-col gap-10 sm:gap-12 items-center w-full">

            @foreach (array_chunk($blogPosts, 3) as $rowIndex => $row)
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 sm:gap-[30px] items-stretch w-full">
                    @foreach ($row as $post)
                        <article
                            class="flex flex-col relative gap-5 items-start min-w-0 w-full"
                            data-aos="fade-up"
                            data-aos-delay="{{ $rowIndex * 120 + $loop->index * 70 }}"
                            data-aos-duration="650"
                        >
                            <div class="w-full min-h-[200px] sm:min-h-[240px] h-[220px] sm:h-[280px] rounded-2xl overflow-hidden bg-[#d9d9d9]">
                                <img src="{{ asset('assets/images/'.$post['image']) }}" alt="{{ $post['title'] }}" class="size-full object-cover" />
                            </div>
                            <div class="flex flex-col gap-4 items-start border-l-2 border-light-gold pl-4 sm:pl-6 w-full">
                                <h3 class="font-heading font-semibold text-lg sm:text-xl md:text-2xl leading-snug sm:leading-[32px] tracking-[-0.5px] text-[#26251D] line-clamp-1">
                                    {{ $post['title'] }}
                                </h3>
                                <p class="font-sans font-normal text-sm sm:text-base leading-6 tracking-[-0.3px] text-[#585d64]">
                                    {{ $post['excerpt'] }}
                                </p>
                                <a
                                    href="{{ route('blog.show', Str::slug($post['title'])) }}"
                                    wire:navigate
                                    class="font-sans stretched-link font-medium text-sm sm:text-base leading-6 tracking-[-0.3px] text-light-gold underline hover:text-dark-gold"
                                >
                                    Read more
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endforeach

            {{-- Load More --}}
            <div data-aos="fade-up" data-aos-duration="700">
                <flux:button href="#" variant="primary" class="w-full sm:w-auto justify-center">
                    Load More
                </flux:button>
            </div>
        </div>
    </section>

    {{-- Corporate CTA --}}
    <section class="flex flex-col items-start px-4 sm:px-8 lg:px-20 pb-16 sm:pb-24 lg:pb-[120px] w-full">
        <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4 sm:gap-5 items-center text-white text-center px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full max-w-[864px]">
                    Experience Corporate Luxury Like Never Before
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] w-full max-w-[654px]">
                    Elevate your business travel with our world-class fleet. From client entertaining to executive transport, we set the standard.
                </p>
            </div>
            <flux:button href="{{ route('corporate-car-hire') }}" variant="primary" size="lg">
                Rent Luxury Car
            </flux:button>
        </div>
    </section>
</div>
