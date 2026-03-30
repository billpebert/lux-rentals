@props(['title' => null])

{{-- Shell for settings Livewire pages: customer dashboard vs app sidebar. Nav links: pages/settings/layout.blade.php --}}
@if (request()->routeIs('dashboard.customer.settings.*'))
    <x-layouts::customer>
        {{ $slot }}
    </x-layouts::customer>
@else
    <x-layouts::app :title="$title">
        {{ $slot }}
    </x-layouts::app>
@endif
