@extends('layouts.client.app')

@section('title', ' || galeri')

@section('content')
<div class="container">
    <br>
    <h1 class="text-center titlePage">Galeri Desa</h1>
    <div class="row">
        @foreach ($galeri as $value)
            <div class="col-sm  text-center">
                <img src="{{ asset('../storage/galeri/'.$value->foto) }}" class="galeri" style="width:100%;max-width:300px">
            </div>
        @endforeach
    </div>
</div>
@endsection
