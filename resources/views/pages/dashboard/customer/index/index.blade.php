@php
    // Sample bookings — replace with real data when the model is ready
    $bookings = [
        [
            'id'       => 'AFH-2515440466',
            'status'   => 'Hire | Booked',
            'pick_up'  => '17 Dec 2025 (9 am)',
            'car'      => 'VW T-Roc R',
            'price'    => '£1.00',
        ],
        [
            'id'       => 'AFH-251521F5D5',
            'status'   => 'Hire | Booked',
            'pick_up'  => '26 Sept 2025 (8 am)',
            'car'      => 'VW T-Roc R',
            'price'    => '£3.00',
        ],
        [
            'id'       => 'AFH-251521F5D5',
            'status'   => 'Hire | Booked',
            'pick_up'  => '26 Sept 2025 (8 am)',
            'car'      => 'VW T-Roc R',
            'price'    => '£5.00',
        ],
        [
            'id'       => 'AFH-2515280C98',
            'status'   => 'Hire | Booked',
            'pick_up'  => '18 Sept 2025 (8 am)',
            'car'      => 'VW T-Roc R',
            'price'    => '£4.00',
        ],
    ];
@endphp

<div class="flex flex-col gap-4 sm:gap-8">

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/svgs/gold_lantern.svg') }}" alt="" class="size-5">
        <nav class="flex items-center gap-1 font-sans text-base leading-[27px] tracking-[-0.3px]" aria-label="Breadcrumb">
            <a href="{{ route('dashboard.customer.index') }}" wire:navigate class="text-light-gold hover:text-light-gold/80 transition-colors">
                {{ __('Account') }}
            </a>
            <span class="text-white/60">&nbsp;/&nbsp;</span>
            <span class="text-white/90">{{ __('Profile') }}</span>
        </nav>
    </div>

    {{-- Tab pills --}}
    <div
        class="inline-flex items-center p-1 rounded-full backdrop-blur-[5px] w-fit"
        style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
        role="tablist"
    >
        <button
            wire:click="setTab('bookings')"
            role="tab"
            @class([
                'flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full font-sans font-medium text-base leading-6 tracking-[-0.3px] transition-colors whitespace-nowrap',
                'bg-light-gold text-zinc-800' => $activeTab === 'bookings',
                'text-[#e9e9e9] hover:text-white' => $activeTab !== 'bookings',
            ])
        >
            {{ __('Bookings') }}
        </button>
        <button
            wire:click="setTab('id-docs')"
            role="tab"
            @class([
                'flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full font-sans font-medium text-base leading-6 tracking-[-0.3px] transition-colors whitespace-nowrap',
                'bg-light-gold text-zinc-800' => $activeTab === 'id-docs',
                'text-[#e9e9e9] hover:text-white' => $activeTab !== 'id-docs',
            ])
        >
            {{ __('ID Docs') }}
        </button>
    </div>

    {{-- Tab content --}}
    @if ($activeTab === 'bookings')
        {{-- Bookings panel --}}
        <div
            class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
            style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
            role="tabpanel"
        >
            <h1 class="font-heading font-bold text-[32px] leading-[42px] tracking-[-0.5px] text-[#e9e9e9]">
                {{ __('Bookings') }}
            </h1>

            @if (count($bookings) > 0)
                {{-- Available state: booking cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3">
                    @foreach ($bookings as $booking)
                        <div class="flex flex-col gap-3.5 p-3 rounded-[10px] border border-white/10 bg-zinc-900 shadow-[10px_20px_60px_0px_rgba(0,0,0,0.4)]">

                            {{-- Status + ID --}}
                            <div class="flex flex-col gap-1.5">
                                <div class="inline-flex items-center justify-center px-1.5 py-[5px] rounded-full bg-zinc-700 w-fit">
                                    <span class="font-sans font-medium text-2xs leading-[22px] uppercase tracking-wide text-white whitespace-nowrap">
                                        {{ $booking['status'] }}
                                    </span>
                                </div>
                                <p class="font-sans font-medium text-sm leading-[22px] text-white">
                                    {{ $booking['id'] }}
                                </p>
                                <div class="font-sans text-xs leading-[22px]">
                                    <span class="text-white/50">{{ __('Pick Up:') }} </span>
                                    <span class="font-semibold text-white">{{ $booking['pick_up'] }}</span>
                                    <br />
                                    <span class="text-white/50">{{ __('Car:') }} </span>
                                    <span class="font-semibold text-white">{{ $booking['car'] }}</span>
                                </div>
                            </div>

                            {{-- Price + CTA --}}
                            <div class="flex items-center justify-between">
                                <p class="font-sans font-semibold text-lg leading-[1.6] text-white whitespace-nowrap">
                                    {{ $booking['price'] }}
                                </p>
                                <button
                                    type="button"
                                    class="inline-flex items-center justify-center px-3 py-1.5 rounded-full bg-light-gold text-zinc-800 font-sans font-medium text-xs leading-[13px] tracking-[-0.06px] whitespace-nowrap hover:bg-light-gold/90 transition-colors"
                                >
                                    {{ __('Verify Licence') }}
                                </button>
                            </div>

                        </div>
                    @endforeach
                </div>
            @else
                {{-- Empty state --}}
                <div class="flex flex-col gap-4">
                    <p class="font-sans text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
                        {{ __('You currently do not have any upcoming bookings.') }}
                    </p>
                </div>
            @endif

            <div>
                <flux:button
                    href="{{ route('car-hire') }}"
                    wire:navigate
                    variant="primary"
                >
                    {{ __('View All Bookings') }}
                </flux:button>
            </div>
        </div>

    @elseif ($activeTab === 'id-docs')
        {{-- ID Docs panel --}}
        <div
            class="flex flex-col gap-8 p-6 sm:p-[30px] rounded-3xl backdrop-blur-[5px] w-full"
            style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%);"
            role="tabpanel"
        >
            {{-- Section 1: Instructions + uploaded documents table --}}
            <div class="flex flex-col gap-8">

                {{-- Instructions --}}
                <div class="flex flex-col gap-6">
                    <p class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#e9e9e9]">
                        {{ __('Securely upload ID documents below if requested. We currently accept the following formats:') }}
                    </p>
                    <ul class="list-disc pl-6 font-sans text-base leading-6 text-white space-y-1">
                        <li>JPEG/JPG</li>
                        <li>PNG</li>
                        <li>PDF</li>
                    </ul>
                    <p class="font-sans text-base leading-6 tracking-[-0.3px] text-[#e9e9e9]">
                        {{ __("We recommend using the HP Smart app if you don't have a scanner readily available.") }}
                    </p>
                </div>

                {{-- Required documents + uploaded docs table --}}
                <div class="flex flex-col gap-6">
                    <div class="font-sans text-[#e9e9e9]">
                        <p class="font-medium text-lg leading-[27px] mb-2">{{ __('Required documents:') }}</p>
                        <ul class="list-disc pl-6 text-base leading-6 space-y-1">
                            <li>{{ __('Driving Licence (Front & Back)') }}</li>
                            <li>{{ __('Proof of Address - Dated within the last 3 months (Utility Bill - Gas/Water/Electricity/Council Tax Bill or Bank Statement)') }}</li>
                        </ul>
                    </div>

                    {{-- Documents table --}}
                    <div class="overflow-x-auto rounded-lg border border-white/10">
                        <table class="w-full min-w-[540px] text-sm">
                            <thead>
                                <tr class="border-b border-white/10">
                                    @foreach (['View All Bookings', 'Type', 'Date', 'Status', 'Message'] as $col)
                                        <th class="px-6 py-3.5 font-sans font-semibold text-base leading-6 tracking-[-0.3px] text-white/50 text-center whitespace-nowrap
                                            {{ ! $loop->last ? 'border-r border-white/10' : '' }}
                                            {{ $loop->first ? 'text-left' : '' }}">
                                            {{ $col }}
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                        </table>
                        <p class="py-6 font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#e9e9e9] text-center">
                            {{ __('You have not yet uploaded any documents.') }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Section 2: Upload area --}}
            <div class="flex flex-col gap-8">

                {{-- Choose Document Type --}}
                <flux:field>
                    <flux:label class="font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] text-[#e9e9e9]">
                        {{ __('Choose Document Type (required)') }}
                    </flux:label>
                    <flux:select>
                        <flux:select.option value="driving-license" selected>{{ __('Driving License') }}</flux:select.option>
                        <flux:select.option value="proof-of-address">{{ __('Proof of Address') }}</flux:select.option>
                    </flux:select>
                </flux:field>

                {{-- Drop zone --}}
                <div
                    class="flex h-[200px] items-center justify-center rounded-lg border border-white/10 bg-zinc-900/40 cursor-default"
                    role="region"
                    aria-label="{{ __('File drop zone') }}"
                >
                    <p class="font-sans text-base leading-6 tracking-[-0.3px] text-white/40 text-center select-none">
                        {{ __('Drop files here to upload') }}
                    </p>
                </div>

            </div>
        </div>
    @endif

</div>
