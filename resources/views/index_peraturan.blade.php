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
    <div class="card card-plain">
        <div class="card-body">
            <h3 class="card-title">Produk Hukum</h3>
            <br />
            <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="th-description">Download</th>
                            <th class="th-description">Size</th>
                        </tr>
                    </thead>`
                    <tbody>
                        @foreach ($x as $xy)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $xy->nama_produk }}</td>
                            <td><a href="{{ Storage::URL($xy->path) }}">download</a></td>
                            <td></td>
                        </tr>
                        @endforeach
                        <!-- <tr>
              <td colspan="6"></td>
              <td colspan="2" class="text-right">
                <button type="button" class="btn btn-info btn-round">Complete Purchase <i class="material-icons">keyboard_arrow_right</i></button>
              </td>
            </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
