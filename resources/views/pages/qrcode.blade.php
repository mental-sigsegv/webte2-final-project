<x-layouts.app title="QR Code">
    <div>
        {!! QrCode::size(300)->generate('facebook.com') !!}
    </div>
</x-layouts.app>
