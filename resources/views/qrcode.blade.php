<x-layouts.app>
    <div>
        {!! QrCode::size(300)->generate('facebook.com') !!}
    </div>
</x-layouts.app>
