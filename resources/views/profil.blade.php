@extends('layouts.app')
@section('konten')
<div class="container">
    <div class="section section-text">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h3 class="title">{{ $x->name }}</h3>
                {!! $x->isi !!}
            </div>
        </div>
    </div>
    <!-- -->
</div>
@endsection
