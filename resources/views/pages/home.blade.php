<?php
    use Illuminate\Support\Facades\App;
?>

<x-layouts.app title="Home">
    <p>Hello World!</p>
    @if(auth()->check())
        Logged in as {{ auth()->user()->name }}
    @endif

    <div>
        <p>
            Locale: {{ App::currentLocale() }}
        </p>
        <p>
            {{ __('message.welcome') }}
        </p>


        @if(session()->has('error'))
            <p class="text-red-500">{{ session('error') }}</p>
        @endif

        <button onclick="{{ session(['lacel' => 'sk']) }}">
            Change Language EN
        </button>
    </div>

    @livewire('code')
    @livewire('wire-elements-modal')
    <button onclick="Livewire.dispatch('openModal', { component: 'modal-test' })">Open modal</button>


</x-layouts.app>
