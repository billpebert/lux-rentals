{{-- Shell layout (customer vs app) is `layouts/settings.blade.php`. Route names follow context: `dashboard.customer.settings.*` or classic `profile.edit`, etc. --}}
@php
    $isCustomerSettings = request()->routeIs('dashboard.customer.settings.*');
    $profileRoute = $isCustomerSettings ? 'dashboard.customer.settings.profile' : 'profile.edit';
    $securityRoute = $isCustomerSettings ? 'dashboard.customer.settings.security' : 'security.edit';
    $appearanceRoute = $isCustomerSettings ? 'dashboard.customer.settings.appearance' : 'appearance.edit';
@endphp

<div class="flex items-start max-md:flex-col">
    <div class="me-10 w-full pb-4 md:w-[220px]">
        <flux:navlist aria-label="{{ __('Settings') }}">
            <flux:navlist.item :href="route($profileRoute)" wire:navigate>{{ __('Profile') }}</flux:navlist.item>
            <flux:navlist.item :href="route($securityRoute)" wire:navigate>{{ __('Security') }}</flux:navlist.item>
            {{-- <flux:navlist.item :href="route($appearanceRoute)" wire:navigate>{{ __('Appearance') }}</flux:navlist.item> --}}
        </flux:navlist>
    </div>

    <flux:separator class="md:hidden" />

    <div class="flex-1 self-stretch max-md:pt-6">
        <flux:heading>{{ $heading ?? '' }}</flux:heading>
        <flux:subheading>{{ $subheading ?? '' }}</flux:subheading>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
