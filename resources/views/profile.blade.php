@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
    <ul>
    <img src=“path/to/AchmadAinunNaim.JPEG“ />
        <li>NIM         : {{ $nim }}</li>
        <li>Nama        : Achamad Ainun Naim</li>
        <li>kelas       : TI-2E</li>
    </ul>
@endsection

@section('footer')
    <p class="text-center">
        2041720164 | <a class="text-body" href="https://github.com/AchmadAinunNaim ">--<<< Achamad Ainun Naim >>>-- </a>
    </p>
@endsection