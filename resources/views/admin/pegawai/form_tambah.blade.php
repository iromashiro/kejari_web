@extends('layouts.admin')

@section('konten')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-signup">
        <h2 class="card-title text-center">Tambah Pegawai</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <form action="{{ route('post.pegawai') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" name="pendidikan_terakhir"
                            placeholder="Masukkan Pendidikan Terakhir">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <select class="form-control" name="golongan_pangkat">
                            <option value="II A Pengatur Muda">II A
                                Pengatur Muda
                            </option>
                            <option value="II B Pengatur Muda Tingkat 1">II B
                                Pengatur Muda Tingkat 1
                            </option>
                            <option value="II C Pengatur">II C
                                Pengatur
                            </option>
                            <option value="II D Pengatur Tingkat 1">
                                II D Pengatur Tingkat 1
                            </option>
                            <option value="III A Penata
                            Muda">III A Penata Muda
                            </option>
                            <option value="III B Penata
                            Muda Tingkat 1">III B Penata
                                Muda Tingkat 1
                            </option>
                            <option value="III C Penata">
                                III C
                                Penata
                            </option>
                            <option value="III D Penata">
                                III D
                                Penata Tingkat 1
                            </option>


                            <option value="IV A Pembina">
                                IV A
                                Pembina
                            </option>
                            <option value="IV B Pembina Tingkat 1">
                                IV B Pembina Tingkat 1
                            </option>
                            <option value="IV C Pembina Utama Muda">
                                IV C Pembina Utama Muda
                            </option>
                            <option value="IV D Pembina Utama Madya">IV D Pembina
                                Utama Madya
                            </option>
                            <option value="IV E Pembina Utama">IV E
                                Pembina Utama
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <select class="form-control" name="id_jabatan">
                            @foreach ($x as $y)
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
