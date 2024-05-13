<x-layouts.app title="Home">
    <p>Hello World!</p>
    {{ auth()->user() }}

    {{ Auth::user() }}

    {{ Auth::check() }}
</x-layouts.app>
