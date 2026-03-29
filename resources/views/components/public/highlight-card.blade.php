@props([
    'title' => '',
    'body' => '',
])

{{-- Gold-accent content card (title + body) used across public marketing pages --}}
<div {{ $attributes->merge(['class' => 'h-full flex-1 bg-white border-l-2 border-light-gold flex flex-col items-start p-8 rounded-2xl shadow-[0px_0px_60px_0px_rgba(0,0,0,0.04)] overflow-hidden']) }}>
    <div class="flex flex-col gap-5 items-start text-[#26251D] w-full">
        <h3 class="font-heading font-bold text-xl leading-7 sm:text-2xl sm:leading-9 lg:text-[32px] lg:leading-[42px] tracking-[-0.5px] w-full">
            {{ $title }}
        </h3>
        <p class="font-sans font-medium text-sm leading-5 sm:text-base sm:leading-6 tracking-[-0.3px] w-full">
            {{ $body }}
        </p>
    </div>
</div>
