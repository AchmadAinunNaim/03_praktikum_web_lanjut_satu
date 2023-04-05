@extends('adminlte::page')

@section('title', 'Experience')

@section('content_header')
    <h1>Pengalaman Kuliah</h1>
@endsection

@section('content')

@foreach ($dataList as $isi)
    <p>ID {{ $isi['id']}} </p> </br> 
    <p>nama {{ $isi['nama']}}   </p> </br>
@endforeach


        <p>saya mempunyai banyak pengalaman di perkuliahan. </br>
        dimulai dari saya yang awal masuk kuliah seperti salah jurusan, Dari awal lulusan pondok jadi  </br>
        untuk susah mempelajari teknik komputer juga masih belajar apa lagi di pemprogram  nya.  </br>
        alhamdulliah demi-demi sedikit menjalani pelajaran koding, mempelajari pemprograman web dan lain lain </br>
    </p>
@endsection 

<!-- @section('footer')
    <p class="text-center">
        2041720164 | <a class="text-body" href="https://github.com/AchmadAinunNaim/03_praktikum_web_lanjut_satu">--<<< Achmad Ainun Naim>>>---</a>
    </p>
@endsection -->