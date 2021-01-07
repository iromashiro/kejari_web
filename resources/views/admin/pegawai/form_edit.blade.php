@extends('layouts.admin')

@section('konten')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-signup">
        <h2 class="card-title text-center">Tambah Pegawai</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <form action="{{ route('edit.pegawai', $x->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ URL::asset($x->path)}}" alt="...">
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
                        <input type="text" class="form-control" value="{{ $x->nip }}" name="nip"
                            placeholder="Masukkan NIP">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" name="nama" value="{{ $x->nama }}"
                            placeholder="Masukkan Nama">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" name="pendidikan_terakhir"
                            placeholder="Masukkan Pendidikan Terakhir" value="{{ $x->pendidikan_terakhir }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <select class="form-control" name="golongan_pangkat">
                            <option value="II A Pengatur Muda"
                                {{ $x->golongan_pangkat == 'II A Pengatur Muda' ? 'selected' : '' }}>II A
                                Pengatur Muda
                            </option>
                            <option value="II B Pengatur Muda Tingkat 1"
                                {{ $x->golongan_pangkat == 'II B Pengatur Muda Tingkat 1' ? 'selected' : '' }}>II B
                                Pengatur Muda Tingkat 1
                            </option>
                            <option value="II C Pengatur"
                                {{ $x->golongan_pangkat == 'II C Pengatur' ? 'selected' : '' }}>II C
                                Pengatur
                            </option>
                            <option value="II D Pengatur Tingkat 1"
                                {{ $x->golongan_pangkat == 'II D Pengatur Tingkat 1' ? 'selected' : '' }}>
                                II D Pengatur Tingkat 1
                            </option>
                            <option value="III A Penata
                            Muda" {{ $x->golongan_pangkat == 'III A Penata
                                Muda' ? 'selected' : '' }}>III A Penata Muda
                            </option>
                            <option value="III B Penata
                            Muda Tingkat 1" {{ $x->golongan_pangkat == 'III B Penata
                                Muda Tingkat 1' ? 'selected' : '' }}>III B Penata
                                Muda Tingkat 1</option>
                            <option value="III C Penata" {{ $x->golongan_pangkat == 'III C Penata' ? 'selected' : '' }}>
                                III C
                                Penata
                            </option>
                            <option value="III D Penata" {{ $x->golongan_pangkat == 'III D Penata' ? 'selected' : '' }}>
                                III D
                                Penata Tingkat 1
                            </option>


                            <option value="IV A Pembina" {{ $x->golongan_pangkat == 'IV A Pembina' ? 'selected' : '' }}>
                                IV A
                                Pembina
                            </option>
                            <option value="IV B Pembina Tingkat 1"
                                {{ $x->golongan_pangkat == 'IV B Pembina Tingkat 1' ? 'selected' : '' }}>
                                IV B Pembina Tingkat 1
                            </option>
                            <option value="IV C Pembina Utama Muda"
                                {{ $x->golongan_pangkat == 'IV C Pembina Utama Muda' ? 'selected' : '' }}>
                                IV C Pembina Utama Muda
                            </option>
                            <option value="IV D Pembina Utama Madya"
                                {{ $x->golongan_pangkat == 'IV D Pembina Utama Madya' ? 'selected' : '' }}>IV D Pembina
                                Utama Madya
                            </option>
                            <option value="IV E Pembina Utama"
                                {{ $x->golongan_pangkat == 'IV E Pembina Utama' ? 'selected' : '' }}>IV E
                                Pembina Utama
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <select class="form-control" name="id_jabatan">
                            @foreach ($a as $y)
                            <option value="{{$y->id}}">{{ $y->nama_jabatan }}</option>
                            @endforeach
                        </select>
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
