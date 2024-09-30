@extends('layouts.auth.app')
@section('content')

<br>
    @foreach ($timahli as $data)
        <div class="col-lg-12">
            <div class="card" align = "center">
                <img src="/storage/users/{{ $data->foto }} " class="card-img-top" alt="..." height="400px" width="200px">
                <h2 class="card-title text-center"><strong>{{ $data->namaahli }}</strong></h2>
                <div class="card-body" align = "left">
                    <p>{!! $data->spesialis !!}</p>
                    <br>
                    <div class="article-category">
                        <p align="right">Publikasi | {{ $data->pengalaman}}</p>
                    </div>
                    
                    <br>
                    <br>
                    <a href="/edukasii" class="btn btn-primary"> Kembali</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection