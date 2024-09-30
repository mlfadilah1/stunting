@extends('layouts.auth.app')

@section('content')

<br>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tim Ahli</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <form action="{{ route('timahli') }}" method="GET">
            <label>Search: <input type="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label>
            <button type="submit" class="btn btn-sm btn-primary">Search</button>
            @if(request()->has('search'))
                <a href="{{ route('timahli') }}" class="btn btn-sm btn-secondary">Refresh</a>
            @endif
        </form>
    </div>
</div>
    <div class="row">
        @foreach ($timahli as $data)
        <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch">
            <div class="card text-center max-width" style="width: 18rem;">
                <img src=" storage/users/{{ $data -> foto }} " class="card-img-top" alt="...">
                <div class="card-body">
                    {{-- <a href="{{ url('lihat/'.$data->id_ahli) }}" > --}}
                        <h5 class="card-title text-center">{{ $data->namaahli }}</h5>
                    {{-- </a> --}}
                </div>
                <div class="article-category">  
                    <p align="left">Spesialis: {{ $data->spesialis }}</p>
                </div>
                <div class="article-category">  
                    <p align="left">Pengalaman: {{ $data->pengalaman }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection