<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $x = Agenda::all();

        return \view('admin.agenda_kejari.index', \compact('x'));
    }

    public function form_tambah()
    {
        return \view('admin.agenda_kejari.form_tambah');
    }

    public function create(Request $request)
    {
        $x = new Agenda();

        $x->nama_agenda = $request->nama_agenda;
        $x->tanggal = $request->tanggal;
        $x->save();

        return \redirect()->route('index.agenda_kejari');
    }

    public function edit($id)
    {
        $x = Agenda::find($id);

        return \view('admin.agenda_kejari.form_edit', \compact('x'));
    }

    public function update(Request $request, $id)
    {
        $x = Agenda::find($id);

        $x->nama_agenda = $request->nama_agenda;
        $x->update();

        return \redirect()->route('index.agenda_kejari');
    }

    public function destroy($id)
    {
        Agenda::destroy($id);

        return \redirect()->back();
    }
}
