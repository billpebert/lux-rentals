@props(['title' => null, 'heading' => null, 'cardWidth' => 'w-[455px]'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased">
        @include('partials.navbar')
        <div class="relative min-h-screen flex items-center justify-center overflow-hidden px-[140px] py-[50px]">

            {{-- Background --}}
            <img src="{{ asset('assets/images/bg-auth.webp') }}" alt="" class="absolute inset-0 size-full object-cover pointer-events-none" />
            <div class="absolute inset-0 bg-black/80"></div>

            {{-- Content --}}
            <div class="relative z-10 flex flex-col gap-[60px] items-center w-[979px]">

                <h1 class="font-heading font-black text-[72px] leading-[85px] tracking-[-2.3px] uppercase text-[#e9e9e9] text-center">
                    {{ filled($heading ?? null) ? $heading : config('app.name') }}
                </h1>

                {{-- Form Card --}}
                <div @class(['bg-white border border-[rgba(35,38,46,0.1)] rounded-[15px] p-6', $cardWidth])>
                    <div class="flex flex-col gap-4 p-4">
                        {{ $slot }}
                    </div>
                </div>

            </div>
        </div>

        @include('partials.footer')

        @fluxScripts
    </body>
</html>
