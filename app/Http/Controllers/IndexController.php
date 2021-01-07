<?php

namespace App\Http\Controllers;

use App\models\Agenda;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Header;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Profil;
use Carbon\Carbon;

class IndexController extends Controller
{
    //
    public function index()
    {
        $x = Berita::where('jenis_aktifitas', 'berita')->paginate(3);
        $y = Berita::where('jenis_aktifitas', 'kegiatan')->paginate(3);
        $a = Header::all();
        $b = Pegawai::find(1);
        $d = Agenda::where('tanggal', '=', Carbon::today())->get();
        return \view('index', \compact('x', 'y', 'a', 'b', 'd'));
    }

    public function berita($slug)
    {
        $x = Berita::where('slug', $slug)->first();

        return \view('spesifik_berita', \compact('x'));
    }

    public function index_berita()
    {
        $a = Header::all();
        $x = Berita::paginate(5)->where('jenis_aktifitas', 'berita');
        $y = Berita::paginate(5)->where('jenis_aktifitas', 'kegiatan');

        return \view('index_berita', \compact('a', 'x', 'y'));
    }

    public function profil($slug)
    {
        $x = Profil::where('slug', $slug)->first();
        return \view('profil', \compact('x'));
    }
}
