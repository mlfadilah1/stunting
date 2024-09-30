@extends('layouts.auth.app')
@section('title', 'Edukasi')
@section('content')

<br>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edukasi</h4>
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
            
            @if (Auth::user()->level=='Admin')
            <div class="card-body">
                <a href="{{ url('inputedukasi') }}" class="btn-sm btn fa-solid fa-plus fa-fw">Tambah Edukasi</a>
            </div>
            @else
            
            @endif
            <form action="{{ route('programkesehatan') }}" method="GET">
                <label>Search: <input type="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label>
                <button type="submit" class="btn btn-sm btn-primary">Search</button>
                @if(request()->has('search'))
                    <a href="{{ route('programkesehatan') }}" class="btn btn-sm btn-secondary">Refresh</a>
                @endif
            </form>            
        </div>
    </div>  
        <div class="row">
            @foreach ($edukasi as $data)
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch">
                <div class="card text-center max-width" style="width: 18rem;">
                    <img src=" storage/users/{{ $data -> foto }} " class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{ url('baca/'.$data->id_edukasi) }}" >
                            <h5 class="card-title text-center">{{ $data->title }}</h5>
                        </a>
                        
                    </div>
                    <div class="article-category">  
                        <p align="right">Publikasi | {{ $data->tanggal_publikasi }}</p>
                        
                    </div>
                    @if (Auth::user()->level=='Admin')
                    <div>
                        <a href="{{url ('formeditedukasi/'.$data->id_edukasi)}}" class="btn-sm btn-primary far fa-edit "></a>
                        <a href="{{url ('deleteedukasi/'.$data->id_edukasi)}}" class="btn-sm btn-danger fa fa-trash "></a>
                    </div>
                    @else
                    
                    @endif
                </div>
            </div>
            @endforeach
        </div>
@endsection