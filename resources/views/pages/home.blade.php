<x-layouts.app title="Home">
    <p>Hello World!</p>

    @foreach(App\Models\User::all() as $user)
        <p>{{ $user }}</p>
    @endforeach
</x-layouts.app>
