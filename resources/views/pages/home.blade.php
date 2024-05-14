<x-layouts.app title="Home">
    <p>Hello World!</p>
    @if(Auth::check())
        Logged in as {{ auth()->user()->name }}
    @endif
</x-layouts.app>
