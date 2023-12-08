@extends('layouts.client.app')

@section('title', ' || galeri')

@section('content')
<div class="container">
    <br>
    <h1 class="text-center titlePage">Event Desa</h1>
    <div class="row">
                @foreach ($event as $value)
                    <div class="col-sm  text-center">
                        <figure class="snip1579"><img src="{{ asset('storage/public/event/'.$value->foto) }}"/>
                            <figcaption>
                                <h3>{{ $value->nama_event }}</h3>
                                <h5>{{ $value->tgl }}</h5>
                            </figcaption><a href="#"></a>
                        </figure>
                    </div>
                @endforeach
    </div>
</div>
@endsection
