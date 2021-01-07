@extends('layouts.admin')

@section('konten')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-signup">
        <h2 class="card-title text-center">Edit Jabatan</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <form action="{{ route('edit.jabatan', $x->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" value="{{ $x->nama_jabatan }}" name="nama_jabatan"
                            placeholder="Nama Jabatan">
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
