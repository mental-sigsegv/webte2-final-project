<div>
    <p>{{$url}}</p>
    <p>{{$code}}</p>
    {!! QrCode::size(300)->generate($url) !!}
</div>
