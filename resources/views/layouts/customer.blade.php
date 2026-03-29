<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen overflow-x-hidden antialiased"
        x-data="{ sidebarOpen: false }"
        x-on:keydown.escape.window="sidebarOpen = false"
    >

        @include('partials.navbar')

        {{-- Background image with dark overlay --}}
        <div class="fixed inset-0 -z-10 pointer-events-none" aria-hidden="true">
            <img
                src="{{ asset('assets/images/bg-auth.webp') }}"
                alt=""
                class="absolute inset-0 size-full object-cover"
            />
            <div class="absolute inset-0 bg-black/[0.95]"></div>
        </div>

        {{-- Mobile sidebar backdrop --}}
        <div
            x-show="sidebarOpen"
            x-transition.opacity
            class="fixed inset-0 z-[60] bg-zinc-950/70 backdrop-blur-sm lg:hidden"
            x-on:click="sidebarOpen = false"
            x-cloak
        ></div>

        {{-- Mobile sidebar drawer --}}
        <aside
            x-show="sidebarOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="fixed inset-y-0 left-0 z-[70] flex w-[300px] flex-col p-8 pt-[100px] lg:hidden"
            style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.85) 100%); backdrop-filter: blur(12px);"
            role="dialog"
            aria-modal="true"
            aria-label="Customer navigation"
            x-cloak
        >
            <button
                type="button"
                class="absolute top-4 right-4 inline-flex h-10 w-10 items-center justify-center rounded-lg text-white hover:bg-white/10"
                x-on:click="sidebarOpen = false"
                aria-label="Close menu"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>

            @include('layouts.customer.sidebar-content')
        </aside>

        {{-- Page wrapper --}}
        <div class="relative z-10 pt-[80px]">

            {{-- Mobile sidebar toggle button --}}
            <div class="lg:hidden flex items-center gap-3 pt-6 pb-4 px-4">
                <button
                    type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg text-white hover:bg-white/10 border border-white/20"
                    x-on:click="sidebarOpen = true"
                    aria-label="Open navigation menu"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <span class="font-heading font-semibold text-base text-white">
                    {{ auth()->user()?->name ?? 'Account' }}
                </span>
            </div>

            <div class="flex min-h-[calc(100vh-200px)]">

                {{-- Desktop Sidebar --}}
                <aside
                    class="hidden lg:flex flex-col gap-[60px] w-[320px] shrink-0 p-10 backdrop-blur-[5px] 2xl:min-w-[400px]"
                    style="background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%), linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.6) 100%);"
                >
                    @include('layouts.customer.sidebar-content')
                </aside>

                {{-- Main Content --}}
                <main class="flex-1 min-w-0 py-5 lg:py-[60px] pb-20 max-w-desktop-lg mx-auto px-4 sm:px-8 lg:px-12 2xl:px-15">
                    {{ $slot }}
                </main>

            </div>
        </div>

        @include('partials.footer')

        @fluxScripts
        {{ $scripts ?? '' }}
    </body>
</html>
