@extends('layouts.main')

@section('content')
<div class = "text-center">
    <H1>{{$singlenews["judul"]}}</H1>
    <h5>{{$singlenews["penulis"]}}</h5>
</div>
<div class = "text-justify">
    <p>{{$singlenews["konten"]}}</p>
</div>

<a href="/berita">kembali</a>

@endsection