<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $x = Profil::all();

        return \view('admin.profil.index', \compact('x'));
    }

    public function formtambah()
    {
        return \view('admin.profil.form_tambah');
    }

    public function create(Request $request)
    {
        $a = $request->all();
        Profil::create($a);

        return \redirect()->route('index.profil');
    }

    public function edit($id)
    {
        $x = Profil::find($id);

        return \view('admin.profil.form_edit', \compact('x'));
    }

    public function edit_post(Request $request, $id)
    {
        $x = Profil::find($id);

        $x->name = $request->name;
        $x->isi = $request->isi;

        $x->update();

        return \redirect()->route('index.profil');
    }

    public function destroy($id)
    {
        Profil::destroy($id);

        return \redirect()->back();
    }
}
