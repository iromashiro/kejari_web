@extends('layouts.app')
@section('header')
<div id="carouselExampleIndicators" class="page-header carousel slide" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

        @foreach ($a as $av)
        @if($loop->index == 0)
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset($av->path)}}" alt="First slide">
        </div>
        @else
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset($av->path)}}">
        </div>
        @endif
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="material-icons">keyboard_arrow_left</i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="material-icons">keyboard_arrow_right</i>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection

@section('konten')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col-md-12 text-center ml-auto mr-auto">
                <ul class="nav nav-pills nav-pills-primary">
                    <li class="nav-item">
                        <a class="nav-link active" href="#pill1" data-toggle="tab">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pill2" data-toggle="tab">Kegiatan</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="pill1">

                        @foreach ($x as $xy)
                        <div class="col-md-12">
                            <div class="card card-raised card-background"
                                style="background-image: url('{{ $xy->thumbnail }}')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">{{ $xy->tags }}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{ $xy->judul }}</h3>
                                    </a>
                                    <a href="{{ route('berita', $xy->slug) }}" class="btn btn-danger btn-round">
                                        <i class="material-icons">format_align_left</i> Lanjut Baca
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="tab-pane" id="pill2">
                        @foreach ($y as $zy)
                        <div class="col-md-12">
                            <div class="card card-raised card-background"
                                style="background-image: url('{{ $zy->thumbnail }}')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">{{ $zy->tags }}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{ $zy->judul }}</h3>
                                    </a>
                                    <a href="{{ route('berita', $zy->slug) }}" class="btn btn-danger btn-round">
                                        <i class="material-icons">format_align_left</i> Lanjut Baca
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

@endsection
