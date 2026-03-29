<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.customer')] #[Title('Dashboard')] class extends Component
{
    public string $activeTab = 'bookings';

    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }
};
