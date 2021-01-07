@extends('layouts.admin')

@section('konten')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-signup">
        <h2 class="card-title text-center">Tambah Produk Hukum</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <form action="{{ route('post.produk-hukum') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ URL::asset('img/.jpg')}}" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">+</span>
                                    <span class="fileinput-exists">-</span>
                                    <input type="file" name="path" />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk Hukum">
                    </div>
                </div>

                <div class="col-md-12 ml-auto mr-auto">
                    <div class="form-group has-default bmd-form-group">
                        <button class="btn btn-info">Input</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
