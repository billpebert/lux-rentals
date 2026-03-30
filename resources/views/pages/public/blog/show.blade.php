<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.public')] #[Title('Blog')] class extends Component
{
    public string $slug;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }
};
?>

@php
    // Sample post — replace with real Eloquent query when the model is ready
    $post = [
        'title'   => 'Top 5 Supercars You Can Hire in the UK Right Now',
        'image'   => asset('assets/images/dubai-extravagance.webp'),
        'date'    => '12 March 2025',
        'author'  => 'Lux Rentals',
    ];
@endphp

<div>

    {{-- Hero --}}
    <x-public.hero-section
        :image="$post['image']"
        overlay-class="bg-black/70"
        section-class="min-h-[min(100dvh,420px)] sm:min-h-[514px]"
    >
        <div class="flex flex-col gap-4 sm:gap-5 items-start text-[#e9e9e9]" data-aos="fade-up" data-aos-duration="750">
            <div class="flex items-center gap-3 font-sans text-sm leading-6 tracking-[-0.3px] text-[#e9e9e9]/70">
                <span>{{ $post['date'] }}</span>
                <span>&middot;</span>
                <span>{{ $post['author'] }}</span>
            </div>
            <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-[56px] leading-tight tracking-[-0.05em] uppercase max-w-[864px]">
                {{ $post['title'] }}
            </h1>
        </div>
    </x-public.hero-section>

    {{-- Article content --}}
    <section class="bg-white w-full">
        <div class="container py-16 sm:py-24 lg:py-[120px]">
            <div class="max-w-[820px] mx-auto flex flex-col gap-6 font-sans text-base leading-relaxed tracking-[-0.3px] text-[#26251D]">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In part, that's because it's a common issue that naturally happens to prestige vehicles throughout the year, usually from a combination of high-performance driving, road conditions, and the demands of luxury hire. Here's what typically contributes:
                </p>

                <ul class="list-disc pl-6 space-y-1.5 text-[#585d64]">
                    <li>Hitting kerbs, potholes, or speed bumps, especially at speed.</li>
                    <li>Road traffic incidents and unforeseen collisions.</li>
                    <li>Suspension modifications made without proper recalibration.</li>
                    <li>General wear on high-mileage performance components.</li>
                </ul>

                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                </p>

                <p class="font-bold">
                    What Makes a Supercar Hire Experience Truly Exceptional?
                </p>

                <p>
                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint.
                </p>

                <ul class="list-disc pl-6 space-y-1.5 text-[#585d64]">
                    <li>Your steering response feels sharper and more immediate than any standard hire.</li>
                    <li>The vehicle's tyres maintain even contact across the full width of the tread.</li>
                    <li>There is no unusual vibration transmitted through the wheel at motorway speeds.</li>
                    <li>The chassis communicates clearly with the driver at all times.</li>
                </ul>

                <p>
                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Et harum quidem rerum facilis est et expedita distinctio.
                </p>

                <p class="font-bold">
                    The Performance Factor
                </p>

                <p>
                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </p>

                <p class="font-bold">
                    Comfort &amp; Refinement
                </p>

                <p>
                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                </p>

                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione sequi nesciunt.
                </p>

            </div>
        </div>
    </section>

    {{-- Back to blog CTA --}}
    <section class="flex flex-col items-start px-4 sm:px-8 lg:px-20 pb-16 sm:pb-24 lg:pb-[120px] w-full">
        <div class="bg-[#26251D] flex flex-col gap-10 sm:gap-[60px] items-center justify-center px-4 sm:px-8 lg:px-[60px] py-12 sm:py-16 lg:py-[120px] rounded-2xl sm:rounded-[30px] w-full" data-aos="fade-up" data-aos-duration="700">
            <div class="flex flex-col gap-4 sm:gap-5 items-center text-white text-center px-2">
                <h2 class="font-heading font-bold text-3xl sm:text-4xl md:text-5xl lg:text-[64px] leading-tight lg:leading-[75px] tracking-[-2.3px] capitalize w-full max-w-[864px]">
                    Explore More From Our Blog
                </h2>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] w-full max-w-[654px]">
                    Discover more insights, guides, and stories from the world of prestige car hire.
                </p>
            </div>
            <flux:button href="{{ route('blog') }}" wire:navigate variant="primary" size="lg">
                Back to Blog
            </flux:button>
        </div>
    </section>

</div>
