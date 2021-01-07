<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisasi;

class OrganisasiController extends Controller
{
    public function index()
    {
        $x = Organisasi::all();

        return \view('admin.organisasi.index', \compact('x'));
    }

    public function formtambah()
    {
        return \view('admin.organisasi.form_tambah');
    }

    public function create(Request $request)
    {
        $a = $request->all();
        Organisasi::create($a);

        return \redirect()->route('index.organisasi');
    }

    public function edit($id)
    {
        $x = Organisasi::find($id);

        return \view('admin.organisasi.form_edit', \compact('x'));
    }

    public function edit_post(Request $request, $id)
    {
        $x = Organisasi::find($id);

        $x->name = $request->name;
        $x->isi = $request->isi;

        $x->update();

        return \redirect()->route('index.organisasi');
    }

    public function destroy($id)
    {
        Organisasi::destroy($id);

        return \redirect()->back();
    }
}
