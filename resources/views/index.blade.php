{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal View --}}

@extends('layouts.app')

@section('header')
<div id="carouselExampleIndicators" class="page-header carousel slide" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

        @foreach ($a as $av)
        @if($loop->index == 0)
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset($av->path)}}" alt="First slide">
        </div>
        @else
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset($av->path)}}">
        </div>
        @endif
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="material-icons">keyboard_arrow_left</i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="material-icons">keyboard_arrow_right</i>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection

@section('konten')
<div class="mt-6">
    <marquee bgcolor="green" scrollamount="2" style="color:white;"> JADWAL SIDANG HARI INI
        JADWAL SIDANG HARI INI
        JADWAL SIDANG HARI INI
        JADWAL SIDANG HARI INI
    </marquee>
</div>

<!-- KONTEN disini -->
<div class="section section-basic">
    <div class="container">
        <!-- Konten disini -->
        <div class="row">
            <!-- KIRI -->
            <div class="col-md-8 ml-auto mr-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h2 class="title text-center">Berita Terbaru</h2>
                            @foreach ($x as $xy)
                            @php
                            date_default_timezone_set('Asia/Jakarta');

                            $tanggal = date($xy->updated_at);
                            $day = date("D", strtotime($tanggal));
                            $date = date("d M Y",strtotime($tanggal));
                            $jam = date("H:i",strtotime($tanggal));
                            $dayList = array(
                            'Sun' => 'Minggu',
                            'Mon' => 'Senin',
                            'Tue' => 'Selasa',
                            'Wed' => 'Rabu',
                            'Thu' => 'Kamis',
                            'Fri' => 'Jumat',
                            'Sat' => 'Sabtu'
                            );
                            @endphp
                            <div class="card card-plain card-blog">
                                <div class="row mb-5">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablito">
                                                <img class="img" src="{{ URL::asset($xy->thumbnail) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="card-category text-info">{{ $xy->jenis_aktifitas }}</h6>
                                        <h3 class="card-title">
                                            <a href="{{ route('berita', $xy->slug) }}">{{ $xy->judul }}</a>
                                        </h3>
                                        <p class="card-description">
                                            {!! Str::words($xy->isi, 10) !!}
                                        </p>
                                        <p class="author">
                                            by
                                            <a href="#">
                                                <b>Admin</b>
                                            </a>, {{ $dayList[$day] }}, {{ $date }} {{ $jam }} WIB
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- Batas KIRI-->


            <!-- KANAN -->
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-profile">
                    <div class="card-header card-header-image">
                        <a href="#pablo">
                            <img class="img" src="{{ Storage::url($b->path) }}" height="200px">
                            <div class="card-title">
                                @foreach ($b->jabatan as $bj)
                                {{ $bj->nama_jabatan }}
                                @endforeach
                            </div>
                        </a>
                    </div>
                    <div class="card-body ">
                        <h6 class="card-category text-info"></h6>
                        <p class="text-left">
                            NIP &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: {{ $b->nip }}<br>
                            Nama &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp; : {{ $b->nama }}<br>
                            Gol/Ruang &ensp;&ensp;&ensp;: {{ $b->golongan_pangkat }}
                        </p>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!--<div class="rotating-card-container">
                    <div class="card card-rotate bg-success">
                        <div class="front">
                            <div class="card-body">
                                <h5 class="card-category card-category-social">
                                    <i class="fa fa-dribbble"></i> Jadwal Sidang
                                </h5>
                                <h4 class="card-title">
                                    <a href="#pablo">This Card is Doing a Full Rotation on Hover...</a>
                                </h4>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human
                                    foundation in truth And I love you like Kanye loves Kanye I love Rick
                                    Owens’ bed design but the back is...
                                </p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Do more...
                                </h5>
                                <p class="card-description">
                                    You can read this article or share it with your friends and family on
                                    different networks...
                                </p>
                                <div class="footer text-center">
                                    <a href="#pablo" class="btn btn-rose btn-round">
                                        <i class="material-icons">subject</i> Read
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-round btn-dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="rotating-card-container">
                    <div class="card card-rotate bg-warning">
                        <div class="front">
                            <div class="card-body">
                                <h5 class="card-category card-category-social">
                                    <i class="fa fa-dribbble"></i> Agenda
                                </h5>
                                <h4 class="card-title">
                                    <a href="#pablo">

                                    </a>
                                </h4>
                                <p class="card-description">
                                    @foreach ($d as $dd)
                                    @php
                                    date_default_timezone_set('Asia/Jakarta');

                                    $tanggal = date($dd->tanggal);
                                    $day = date("D", strtotime($tanggal));
                                    $date = date("d M Y",strtotime($tanggal));
                                    $jam = date("H:i",strtotime($tanggal));
                                    $dayList = array(
                                    'Sun' => 'Minggu',
                                    'Mon' => 'Senin',
                                    'Tue' => 'Selasa',
                                    'Wed' => 'Rabu',
                                    'Thu' => 'Kamis',
                                    'Fri' => 'Jumat',
                                    'Sat' => 'Sabtu'
                                    );
                                    @endphp
                                    {{ $loop->index +1 }}. {{ $dd->nama_agenda }}
                                    <br>
                                    &nbsp;&nbsp;&nbsp;({{ $dayList[$day]}},
                                    {{ date("d/m/Y", strtotime($dd->tanggal))  }})
                                    <br><br>
                                    @endforeach
                                </p>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                        <div class="back">
                            <div class="card-body">
                                <h5 class="card-category card-category-social">
                                    <i class="fa fa-dribbble"></i> Agenda
                                </h5>
                                <h4 class="card-title">
                                    <a href="#pablo">Klik Untuk Lihat Jadwal Selengkapnya</a>
                                </h4>
                                <div class="stats">
                                    <button type="button" name="button" class="btn btn-white btn-fill btn-round">
                                        <i class="material-icons">subject</i> Lihat Jadwal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Batas KANAN -->
        </div>
        <!-- Batas Konten disini -->

        <!-- Kegiatan disini -->
        <div class="row">
            <div class="projects-2" id="projects-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Kegiatan Terbaru</h2>
                        </div>
                    </div>
                    <div class="row">

                        @foreach ($y as $yx)
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <a href="http://www.creative-tim.com/product/material-kit" target="_blank">
                                    <div class="card-header card-header-image">
                                        <img src="{{ $yx->thumbnail }}">
                                    </div>
                                </a>
                                <div class="card-body ">
                                    <a href="http://www.creative-tim.com/product/material-kit" target="_blank">
                                        <h4 class="card-title">{{ $yx->judul }}</h4>
                                    </a>
                                    <h6 class="card-category">{{ $yx->tags }}</h6>
                                    <p class="card-description">
                                        asdadasd asdhad asdhka asdjasbd ashd asdhbas dajshb asdjha hasdbkas asdba awsdba
                                        asdbasd asdbk
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Batas Kegiatan disini -->
    </div>
</div>
<!-- KONTEN disini -->

<!-- Galeri disini -->
<div class="projects-3 section-dark" id="projects-3">
    @yield('galeri')
</div>
<!-- Batas Galeri disini -->
@endsection

@section('footer')
<!--<footer class="footer" data-background-color="black">
    <div class="contactus-2">
        <div id="contactUs2Map" class="map"></div>
        <div class="col-md-10">
            <div class="card card-contact card-raised">
                <form id="contact-form2" method="post">
                    <div class="card-header card-header-rose text-center">
                        <h4 class="card-title">Contact Us</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">phone</i>
                                    </div>
                                    <div class="description">
                                        <h5 class="info-title">Give us a ring</h5>
                                        <p> Michael Jordan
                                            <br> +40 762 321 762
                                            <br> Mon - Fri, 8:00-22:00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">pin_drop</i>
                                    </div>
                                    <div class="description">
                                        <h5 class="info-title">Find us at the office</h5>
                                        <p> Bld Mihail Kogalniceanu, nr. 8,
                                            <br> 7652 Bucharest,
                                            <br> Romania
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty has-rose">
                                    <label class="bmd-label-floating">Full Name</label>
                                    <input type="text" name="email" class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating is-empty has-rose">
                                    <label class="bmd-label-floating">Email address</label>
                                    <input type="email" name="email" class="form-control">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group label-floating has-rose is-empty">
                            <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                            <textarea name="message" class="form-control" id="exampleMessage" rows="6"></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="card-footer justify-content-between">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" required> I'm not a robot
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-rose pull-right">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
-->
@endsection
