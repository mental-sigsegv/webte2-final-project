<div class="ml-10 flex items-baseline space-x-4 space-y-4 mb-3">
    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="/qrcode" :active="request()->is('qrcode')">QR Code</x-nav-link>
</div>
