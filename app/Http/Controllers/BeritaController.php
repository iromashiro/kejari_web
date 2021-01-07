<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BeritaController extends Controller
{
    /////////   ADMIN   ///////////
    public function index_admin()
    {
        $x = Berita::all();

        return \view('admin.berita.index', \compact('x'));
    }

    public function show_form()
    {
        return \view('admin.berita.form_tambah');
    }

    public function tinymce(Request $request)
    {
        $file = $request->file('file');
        $path = url('storage/uploads/') . '/' . $file->getClientOriginalName();
        $imgpath = $file->move(public_path('storage/uploads/'), $file->getClientOriginalName());
        $fileNameToStore = $path;

        return json_encode(['location' => $fileNameToStore]);
    }

    public function create(Request $request)
    {
        $a = $request->file('thumbnail');
        $b = $request->file('thumbnail')->getClientOriginalName();

        $c = Image::make($a->getRealPath())->resize(200, 100);
        $d = '/storage/thumbnail' . $b;
        $c = Image::make($c)->save(\public_path() . $d);

        $x = new Berita();
        $x->judul = $request->judul;
        $x->isi = $request->isi;
        $x->tags = $request->tags;
        $x->slug = Str::slug($request->judul);
        $x->jenis_aktifitas = $request->jenis_aktifitas;
        $x->thumbnail = $d;

        $x->save();

        return \redirect()->route('index.berita');
    }

    public function show($id)
    {
        $x = Berita::find($id);

        return view('admin.berita.form_edit', \compact('x'));
    }

    public function edit(Request $request, $id)
    {
        $x = Berita::find($id);
        if ($request->hasFile('thumbnail')) {
            $a = $request->file('thumbnail');
            $b = $request->file('thumbnail')->getClientOriginalName();

            $c = Image::make($a->getRealPath())->resize(200, 100);
            $d = '/storage/thumbnail' . $b;
            $c = Image::make($c)->save(\public_path() . $d);
        } else {
            $d = $x->thumbnail;
        }

        $x->judul = $request->judul;
        $x->isi = $request->isi;
        $x->tags = $request->tags;
        $x->slug = Str::slug($request->judul);
        $x->jenis_aktifitas = $request->jenis_aktifitas;
        $x->thumbnail = $d;

        $x->update();

        return \redirect()->route('index.berita');
    }

    public function destroy($id)
    {
        Berita::destroy($id);

        return \redirect()->back();
    }
}
