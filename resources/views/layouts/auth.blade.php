<x-layouts::auth.simple :title="$title ?? null" :heading="$heading ?? null" :card-width="$cardWidth ?? 'w-[455px]'">
    {{ $slot }}
</x-layouts::auth.simple>
