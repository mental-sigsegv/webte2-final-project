<x-layouts.app title="Home">
    <p>Hello World!</p>
    @if(auth()->check())
        Logged in as {{ auth()->user()->name }}
    @endif
</x-layouts.app>
