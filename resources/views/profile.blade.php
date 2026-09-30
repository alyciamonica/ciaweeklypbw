@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama : {{ $name }}</P>
    <p>NIM : {{ $NIM }}</P>
    <p>Prodi : {{ $prodi }}</P>
    <img src="images/{{$gambar}}" width="200px" />
@endsection
