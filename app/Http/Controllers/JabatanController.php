<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $x = Jabatan::all();

        return \view('admin.jabatan.index', \compact('x'));
    }

    public function form_tambah()
    {
        return \view('admin.jabatan.form_tambah');
    }

    public function create(Request $request)
    {
        $x = new Jabatan();

        $x->nama_jabatan = $request->nama_jabatan;
        $x->save();

        return \redirect()->route('index.jabatan');
    }

    public function edit($id)
    {
        $x = Jabatan::find($id);

        return \view('admin.jabatan.form_edit', \compact('x'));
    }

    public function update(Request $request, $id)
    {
        $x = Jabatan::find($id);

        $x->nama_jabatan = $request->nama_jabatan;
        $x->update();

        return \redirect()->route('index.jabatan');
    }

    public function destroy($id)
    {
        Jabatan::destroy($id);

        return \redirect()->back();
    }
}
