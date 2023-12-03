@extends('layouts.client.app')

@section('content')
<div class="container text-center">
    <br>
    <h1 class="text-center titlePage">Berita Terkini</h1>
    <div class="row">
        @foreach ($artikel as $value)
            <div class="col-sm">
                <figure class="newsCard mx-auto">
                    <div class="image"><img src="{{ asset('storage/artikel/'.$value->foto) }}"/></div>
                    <figcaption>
                        <div class="date"><span class="day">{{ $value->day }}</span><span class="month">{{ $value->month }}</div>
                        <h3>{{ $value->judul }}</h3>
                        {!! $value->content !!}
                        <footer>
                            <div class="views"><i class="ion-eye"></i>4182</div>
                            <div class="love"><i class="ion-heart"></i>162</div>
                            <div class="comments"><i class="ion-chatboxes"></i>14</div>
                        </footer>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        @endforeach
    </div>
</div>
@endsection
