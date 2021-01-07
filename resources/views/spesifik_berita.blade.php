@extends('layouts.app')
@section('header')
<div class="page-header" data-parallax="true" style="background-image: url('{{ $x->thumbnail }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="title">{{ $x->judul }}</h1>
                <br>
                <a href="#pablo" class="btn btn-rose btn-round btn-lg">
                    <i class="material-icons">format_align_left</i> Baca Artikel
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('konten')
<div class="container">
    <div class="section section-text">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h3 class="title">{{ $x->judul }}</h3>
                {!! $x->isi !!}
            </div>
        </div>
    </div>
    <!-- -->
</div>

@endsection
