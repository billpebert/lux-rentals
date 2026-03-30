<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts.public')] class extends Component
{
    use WithPagination;

    public string $dateFrom = '';

    public string $dateTo = '';

    public string $pickupTime = '09:00';

    public string $carType = '';

    public string $location = '';

    public string $sort = 'price_low';

    /**
     * @return list<array{name: string, category: string, slug: string, image: string}>
     */
    private function allCars(): array
    {
        $base = [
            ['name' => 'BMW X5 M-Sport', 'category' => 'Sports', 'slug' => 'bmw-x5-m-sport', 'image' => 'assets/images/car-1.webp'],
            ['name' => 'Mercedes Benz A-Class Sedan', 'category' => 'Prestige Sedan', 'slug' => 'mercedes-a-class-sedan', 'image' => 'assets/images/car-2.webp'],
            ['name' => 'Range Rover SVR', 'category' => 'Luxury', 'slug' => 'range-rover-svr', 'image' => 'assets/images/car-3.webp'],
            ['name' => 'Lamborghini Aventador', 'category' => 'Super Car', 'slug' => 'lamborghini-aventador', 'image' => 'assets/images/car-4.webp'],
            ['name' => 'Audi R8', 'category' => 'Sports', 'slug' => 'audi-r8', 'image' => 'assets/images/car-5.webp'],
            ['name' => 'Bentley Continental', 'category' => 'Prestige Sedan', 'slug' => 'bentley-continental', 'image' => 'assets/images/car-6.webp'],
            ['name' => 'Ferrari 488', 'category' => 'Super Car', 'slug' => 'ferrari-488', 'image' => 'assets/images/car-7.webp'],
            ['name' => 'Porsche 911', 'category' => 'Sports', 'slug' => 'porsche-911', 'image' => 'assets/images/car-8.webp'],
            ['name' => 'McLaren 720S', 'category' => 'Super Car', 'slug' => 'mclaren-720s', 'image' => 'assets/images/car-9.webp'],
        ];

        $all = [];
        foreach (range(1, 5) as $group) {
            foreach ($base as $index => $car) {
                $n = ($group - 1) * count($base) + $index + 1;
                $all[] = [
                    'name' => $car['name'],
                    'category' => $car['category'],
                    'slug' => $car['slug'].'-'.$n,
                    'image' => $car['image'],
                ];
            }
        }

        return $all;
    }

    // For testing purposes
    #[Computed]
    public function carsPaginator(): LengthAwarePaginator
    {
        $items = collect($this->allCars());
        $perPage = 9;
        $page = $this->getPage();

        return new LengthAwarePaginator(
            $items->forPage($page, $perPage)->values()->all(),
            $items->count(),
            $perPage,
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => 'page',
            ]
        );
    }

    public function search(): void
    {
        $this->resetPage();
        // Reserved for server-side filtering when fleet data is available.
    }
};
?>

<div>
    {{-- Hero + search --}}
    <x-public.hero-section
        image="{{ asset('assets/images/bg-car-hire.webp') }}"
        overlay-class="bg-black/80"
        content-max-class="max-w-[979px]"
        section-class="min-h-[480px] sm:min-h-[600px]"
    >
        <div class="flex flex-col gap-6 sm:gap-10 items-start text-off-white w-full">
            <div class="flex flex-col gap-4 items-start w-full max-w-[979px]" data-aos="fade-up" data-aos-duration="750">
                <h1 class="font-heading font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-[72px] leading-[1.1] sm:leading-tight md:leading-[1.05] xl:leading-[85px] tracking-[-0.08em] sm:tracking-[-2.3px] uppercase w-full">
                    Book Your Favourite Car
                </h1>
                <p class="font-sans font-normal text-sm sm:text-base md:text-lg leading-relaxed sm:leading-[27px] tracking-[-0.3px] max-w-[746px] w-full text-off-white/95">
                    Our highly trained Chauffeur drivers combine expert driving skills, local knowledge and attention to detail so that you travel safely, smoothly and luxuriously.
                </p>
            </div>

            <form wire:submit="search" class="flex flex-col gap-3 w-full max-w-[625px]" data-aos="fade-up" data-aos-delay="100" data-aos-duration="750">
                <div class="flex flex-wrap gap-3 w-full">
                    <div class="flex flex-1 min-w-[200px] gap-3">
                        <flux:input
                            wire:model="dateFrom"
                            type="date"
                            class="min-w-0 flex-1 bg-white! border-off-white! text-charcoal! shadow-none! rounded-lg! placeholder:text-mid-gray!"
                        />
                        <flux:input
                            wire:model="dateTo"
                            type="date"
                            class="min-w-0 flex-1 bg-white! border-off-white! text-charcoal! shadow-none! rounded-lg! placeholder:text-mid-gray!"
                        />
                    </div>
                    <flux:select wire:model.live="pickupTime" class="min-w-[120px] w-auto bg-white! border-off-white! text-charcoal! shadow-none! rounded-lg!">
                        <flux:select.option value="08:00">08:00</flux:select.option>
                        <flux:select.option value="09:00">09:00</flux:select.option>
                        <flux:select.option value="10:00">10:00</flux:select.option>
                        <flux:select.option value="12:00">12:00</flux:select.option>
                        <flux:select.option value="15:00">15:00</flux:select.option>
                    </flux:select>
                    <flux:select wire:model.live="carType" placeholder="Any Type" class="min-w-[140px] flex-1 bg-white! border-off-white! text-charcoal! shadow-none! rounded-lg!">
                        <flux:select.option value="sports">Sports</flux:select.option>
                        <flux:select.option value="prestige">Prestige Sedan</flux:select.option>
                        <flux:select.option value="luxury">Luxury</flux:select.option>
                        <flux:select.option value="super">Super Car</flux:select.option>
                    </flux:select>
                </div>
                <div class="flex flex-wrap gap-3 items-center w-full">
                    <flux:select wire:model.live="location" placeholder="Any Location" class="min-w-[180px] flex-1 bg-white! border-off-white! text-charcoal! shadow-none! rounded-lg!">
                        <flux:select.option value="glasgow">Glasgow</flux:select.option>
                        <flux:select.option value="edinburgh">Edinburgh</flux:select.option>
                        <flux:select.option value="london">London</flux:select.option>
                        <flux:select.option value="manchester">Manchester</flux:select.option>
                    </flux:select>
                    <flux:select wire:model.live="sort" class="w-full min-[480px]:w-[192px] shrink-0 bg-white! border-off-white! text-charcoal! shadow-none! rounded-lg!">
                        <flux:select.option value="price_low">Price Low to High</flux:select.option>
                        <flux:select.option value="price_high">Price High to Low</flux:select.option>
                        <flux:select.option value="name">Name A-Z</flux:select.option>
                    </flux:select>
                </div>
                <flux:button type="submit" icon="magnifying-glass" variant="primary">
                    Search Car
                </flux:button>
            </form>
        </div>
    </x-public.hero-section>

    {{-- Fleet grid --}}
    <section class="bg-white flex flex-col gap-6 sm:gap-8 items-start container py-16 sm:py-24 lg:py-[120px] w-full">
        <div class="flex items-center justify-between w-full max-w-[1320px] mx-auto px-1" data-aos="fade-up" data-aos-duration="700">
            <p class="font-heading font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-[48px] leading-tight lg:leading-[56px] tracking-[-1px] text-charcoal">
                {{ $this->carsPaginator->total() }} Cars Available
            </p>
        </div>

        <div class="flex flex-col gap-10 sm:gap-12 items-center w-full max-w-[1320px] mx-auto">
            <div class="flex flex-col gap-6 w-full">
                @foreach (array_chunk($this->carsPaginator->items(), 3) as $rowIndex => $row)
                    <div wire:key="car-hire-row-{{ $this->carsPaginator->currentPage() }}-{{ $rowIndex }}" class="flex flex-col lg:flex-row gap-[22px] items-stretch justify-center w-full">
                        @foreach ($row as $car)
                            <article
                                wire:key="car-hire-{{ $car['slug'] }}"
                                class="bg-white flex flex-col gap-[15px] items-center p-3 rounded-2xl shadow-[0px_7px_60px_0px_rgba(2,12,31,0.1)] w-full lg:flex-1 lg:max-w-[425px]"
                                data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 80 }}"
                                data-aos-duration="650"
                            >
                                <div class="flex flex-col items-center justify-center pb-4 pt-10 px-4 rounded-xl w-full min-h-[200px] lg:h-[264px] bg-zinc-50">
                                    <div class="relative w-full aspect-video shrink-0">
                                        <img
                                            src="{{ asset($car['image']) }}"
                                            alt="{{ $car['name'] }}"
                                            class="absolute inset-0 size-full object-contain object-center"
                                        />
                                    </div>
                                </div>
                                <div class="flex flex-col gap-[30px] items-start p-2.5 w-full">
                                    <div class="flex flex-col gap-2 items-start w-full tracking-[-0.3px]">
                                        <h2 class="font-sans font-semibold text-[22px] leading-8 text-black w-full">
                                            {{ $car['name'] }}
                                        </h2>
                                        <div class="flex items-center justify-between gap-4 w-full whitespace-nowrap">
                                            <span class="font-sans font-medium text-lg leading-[27px] text-medium-gray">
                                                {{ $car['category'] }}
                                            </span>
                                            <span class="font-sans font-bold text-xl leading-[30px] text-black">
                                                £1<span class="font-medium text-lg text-medium-gray"> /Day</span>
                                            </span>
                                        </div>
                                    </div>
                                    <flux:button
                                        href="{{ route('car-hire.booking', ['slug' => $car['slug']]) }}"
                                        variant="outline"
                                        icon:trailing="arrow-up-right"
                                        class="w-full! border-charcoal! text-charcoal! hover:bg-charcoal/5! px-6! py-[18px]! font-medium! tracking-[-0.3px]!"
                                    >
                                        Select
                                    </flux:button>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endforeach
            </div>

            {{-- Pagination (published Livewire view: resources/views/vendor/livewire/tailwind.blade.php) --}}
            {{ $this->carsPaginator->links() }}
        </div>
    </section>
</div>
