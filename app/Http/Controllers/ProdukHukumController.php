<?php

namespace App\Http\Controllers;

use App\Models\Produk_Hukum;
use Illuminate\Http\Request;

class ProdukHukumController extends Controller
{
    public function index()
    {
        $x = Produk_Hukum::all();

        return \view('admin.produk_hukum.index', \compact('x'));
    }

    public function form_tambah()
    {
        return \view('admin.produk_hukum.form_tambah');
    }

    public function create(Request $request)
    {
        $x = new Produk_Hukum();

        $a = $request->file('path');
        $extension = $a->getClientOriginalExtension();
        $b =  $a->storeAs('public/produk_hukum', \time() . '.' . $extension);

        $x->nama_produk = $request->nama_produk;
        $x->path = $b;

        $x->save();

        return \redirect()->route('index.produk-hukum');
    }

    public function form_edit($id)
    {
        $x = Produk_Hukum::find($id);

        return \view('admin.produk_hukum.form_edit', \compact('x'));
    }

    public function edit(Request $request, $id)
    {
        $x = Produk_Hukum::find($id);

        if ($request->hasFile('path')) {
            $a = $request->file('path');
            $extension = $a->getClientOriginalExtension();
            $b =  $a->storeAs('public/produk_hukum', \time() . '.' . $extension);
        } else {
            $b = $x->path;
        }

        $x->nama_produk = $request->nama_produk;
        $x->path = $b;

        $x->update();

        return \redirect()->route('index.produk-hukum');
    }

    public function destroy($id)
    {
        Produk_Hukum::destroy($id);

        return \redirect()->back();
    }
}
