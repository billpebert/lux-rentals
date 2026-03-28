@props(['image'])

<section class="relative flex flex-col items-start justify-end min-h-[580px] pb-[45px] px-[140px] overflow-hidden">

    {{-- Background image --}}
    <img
        src="{{ $image }}"
        alt=""
        class="absolute inset-0 size-full object-cover pointer-events-none"
    />

    {{-- Dark overlay --}}
    <div class="absolute inset-0 bg-black/55"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col gap-10 items-start max-w-[1043px]">
        {{ $slot }}
    </div>

</section>
