<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $x = Pegawai::all();

        return \view('admin.pegawai.index', \compact('x'));
    }

    public function form_tambah()
    {
        $x = Jabatan::all();
        return \view('admin.pegawai.form_tambah', \compact('x'));
    }

    public function create(Request $request)
    {
        $x = new Pegawai();

        $a = $request->file('path');
        $extension = $a->getClientOriginalExtension();
        $b =  $a->storeAs('public/pegawai', \time() . '.' . $extension);

        $x->nip = $request->nip;
        $x->nama = $request->nama;
        $x->pendidikan_terakhir = $request->pendidikan_terakhir;
        $x->golongan_pangkat = $request->golongan_pangkat;
        $x->id_jabatan = $request->id_jabatan;
        $x->path = $b;

        $x->save();

        return \redirect()->route('index.pegawai');
    }

    public function edit($id)
    {
        $x = Pegawai::find($id);
        $a = Jabatan::all();

        return \view('admin.pegawai.form_edit', \compact('x', 'a'));
    }

    public function update(Request $request, $id)
    {
        $x = Pegawai::find($id);

        if ($request->hasFile('path')) {
            $a = $request->file('path');
            $extension = $a->getClientOriginalExtension();
            $b =  $a->storeAs('public/pegawai', \time() . '.' . $extension);
        } else {
            $b = $x->path;
        }

        $x->nip = $request->nip;
        $x->nama = $request->nama;
        $x->pendidikan_terakhir = $request->pendidikan_terakhir;
        $x->golongan_pangkat = $request->golongan_pangkat;
        $x->id_jabatan = $request->id_jabatan;
        $x->path = $b;

        $x->update();

        return \redirect()->route('index.pegawai');
    }

    public function destroy($id)
    {
        Pegawai::destroy($id);

        return \redirect()->back();
    }
}
