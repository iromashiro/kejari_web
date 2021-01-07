@extends('layouts.admin')

@section('konten')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-signup">
        <h2 class="card-title text-center">Index Agenda</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <a href="{{ route('form-tambah.agenda') }}" type="button" class="btn btn-info mb-5">Input Agenda
                Baru</a>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Agenda</th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th class="text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($x as $y)

                    @php
                    date_default_timezone_set('Asia/Jakarta');

                    $tanggal = date($y->tanggal);
                    $day = date("D", strtotime($tanggal));
                    $date = date("d M Y",strtotime($tanggal));
                    $jam = date("H:i",strtotime($tanggal));
                    $dayList = array(
                    'Sun' => 'Minggu',
                    'Mon' => 'Senin',
                    'Tue' => 'Selasa',
                    'Wed' => 'Rabu',
                    'Thu' => 'Kamis',
                    'Fri' => 'Jumat',
                    'Sat' => 'Sabtu'
                    );
                    @endphp

                    <tr>
                        <td class="text-center">{{ $loop->index +1 }}</td>
                        <td>{{ $y->nama_agenda }}</td>
                        <td>{{ $dayList[$day] }}</td>
                        <td>{{ date("d/m/Y", strtotime($y->tanggal)) }}</td>
                        <td class="td-actions text-right">
                            <a href="{{ route('form-edit.produk-hukum', $y->id) }}" type="button" rel="tooltip"
                                class="btn btn-info btn-just-icon btn-sm">
                                <i class="material-icons">person</i>
                            </a>
                            <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <form method="POST" action="{{route('delete.berita', $y->id)}}" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" rel="tooltip"
                                    onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"
                                    class="btn btn-danger btn-just-icon btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
