<?php

namespace App\Http\Controllers;

use App\models\Agenda;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Header;
use App\Models\Jabatan;
use App\Models\Organisasi;
use App\Models\Pegawai;
use App\Models\Produk_Hukum;
use App\Models\Profil;
use Carbon\Carbon;

class IndexController extends Controller
{
    //
    public function index()
    {
        $profil = Profil::all();
        $organisasi = Organisasi::all();
        $x = Berita::where('jenis_aktifitas', 'berita')->paginate(3);
        $y = Berita::where('jenis_aktifitas', 'kegiatan')->paginate(3);
        $a = Header::all();
        $b = Pegawai::where('id_jabatan', 2)->first();
        $d = Agenda::where('tanggal', '=', Carbon::today())->get();

        return \view('index', \compact('x', 'y', 'a', 'b', 'd', 'profil', 'organisasi'));
    }

    public function berita($slug)
    {
        $profil = Profil::all();
        $organisasi = Organisasi::all();
        $x = Berita::where('slug', $slug)->first();

        return \view('spesifik_berita', \compact('x', 'profil', 'organisasi'));
    }

    public function index_berita()
    {
        $profil = Profil::all();
        $organisasi = Organisasi::all();
        $a = Header::all();
        $x = Berita::paginate(5)->where('jenis_aktifitas', 'berita');
        $y = Berita::paginate(5)->where('jenis_aktifitas', 'kegiatan');

        return \view('index_berita', \compact('a', 'x', 'y', 'profil', 'organisasi'));
    }

    public function profil($name)
    {
        $profil = Profil::all();
        $organisasi = Organisasi::all();
        $x = Profil::where('name', $name)->first();
        return \view('profil', \compact('x', 'profil', 'organisasi'));
    }

    public function organisasi($name)
    {
        $profil = Profil::all();
        $organisasi = Organisasi::all();
        $x = Organisasi::where('name', $name)->first();
        return \view('profil', \compact('x', 'profil', 'organisasi'));
    }

    public function index_hukum()
    {
        $profil = Profil::all();
        $organisasi = Organisasi::all();
        $a = Header::all();
        $x = Produk_Hukum::all();

        return \view('index_peraturan', \compact('a', 'x', 'profil', 'organisasi'));
    }
}
