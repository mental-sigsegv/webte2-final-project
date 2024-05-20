<div class="flex flex-col items-center justify-center bg-gray-800 p-4">
    <div class="bg-white rounded-xl shadow-2xl py-8 px-12 m-6 max-w-full">
        <p class="text-gray-900 text-xl md:text-2xl font-bold mb-4 break-words overflow-hidden">asdasdasdadsasdadasdasdasdasds{{$url}}</p>
        <p class="text-gray-700 text-lg mb-8">{{$code}}</p>
        <div class="flex justify-center transform hover:scale-105 transition-transform duration-300">
            {!! QrCode::size(300)->generate($url) !!}
        </div>
    </div>
</div>
