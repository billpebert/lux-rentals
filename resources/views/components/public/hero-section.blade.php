@props([
    'image',
    'overlayClass' => 'bg-black/55',
    'contentMaxClass' => 'max-w-[1043px]',
    'sectionClass' => 'min-h-[min(100dvh,520px)] sm:min-h-[560px] lg:min-h-[580px]',
])

<section @class(['relative flex flex-col items-start justify-center pb-8 sm:pb-12 md:pb-[45px] lg:pt-44 overflow-hidden', $sectionClass])>

    {{-- Background image --}}
    <img
        src="{{ $image }}"
        alt=""
        class="absolute inset-0 size-full object-cover pointer-events-none"
    />

    {{-- Dark overlay --}}
    <div @class(['absolute inset-0', $overlayClass])></div>

    {{-- Content --}}
    <div class="container">
        <div @class(['relative z-10 flex flex-col gap-10 items-start', $contentMaxClass])>
            {{ $slot }}
        </div>
    </div>

</section>
