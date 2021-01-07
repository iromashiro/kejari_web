<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HeaderController extends Controller
{

    public function index()
    {
        $x = Header::all();

        return \view('admin.header.index', \compact('x'));
    }

    public function form_tambah()
    {
        return \view('admin.header.form_tambah');
    }

    public function create(Request $request)
    {
        $a = $request->file('path');
        $b = $request->file('path')->getClientOriginalName();

        $c = Image::make($a->getRealPath())->resize(1450, 750);
        $d = '/storage/header' . $b;
        $c = Image::make($c)->save(\public_path() . $d);

        $x = new Header();
        $x->path = $d;

        $x->save();

        return \redirect()->route('index.header');
    }

    public function edit($id)
    {
        $x = Header::find($id);

        return \view('admin.header.form_edit', \compact('x'));
    }

    public function update(Request $request, $id)
    {
        $x = Header::find($id);

        $x = Header::find($id);
        if ($request->hasFile('path')) {
            $a = $request->file('path');
            $b = $request->file('path')->getClientOriginalName();

            $c = Image::make($a->getRealPath())->resize(1450, 750);
            $d = '/storage/header' . $b;
            $c = Image::make($c)->save(\public_path() . $d);
        } else {
            $d = $x->path;
        }
        $x->path = $d;

        $x->update();

        return \redirect()->route('index.header');
    }

    public function destroy($id)
    {
        Header::destroy($id);

        return \redirect()->back();
    }
}
