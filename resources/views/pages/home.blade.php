<?php
    use Illuminate\Support\Facades\App;
?>

<x-layouts.app title="{{ __('navbar.home') }}">
    <div>
        @if(session()->has('error'))
            <p class="text-red-500">{{ session('error') }}</p>
        @endif
    </div>

    @livewire('code')

    @livewire('wire-elements-modal')
    <button onclick="Livewire.dispatch('openModal', { component: 'modal-test' })">Open modal</button>


</x-layouts.app>
