<x-layouts.app title="{{ __('navbar.admin') }}">
    <div>
        @livewire('wire-elements-modal')
        @livewire(\App\Livewire\UserDatatable::class)
    </div>
</x-layouts.app>
