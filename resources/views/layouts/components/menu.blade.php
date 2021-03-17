<nav class="navbar fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{asset('img/logo_kejari.png')}}" alt="" width="230px" height="45px"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="material-icons">account_balance</i>
                        Home
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">account_circle</i> Profil
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach ($profil as $p)
                        <a href="{{ route('profil', $p->name) }}" class="dropdown-item">
                            <i class="material-icons">find_in_page</i> {{ $p->name }}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">supervisor_account</i> Organisasi
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach ($organisasi as $os)
                        <a href="{{ route('organisasi', $os->name) }}" class="dropdown-item">
                            <i class="material-icons">chrome_reader_mode</i> {{ $os->name }}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.hukum') }}" class="nav-link">
                        <i class="material-icons">menus</i>
                        Produk Hukum
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                        <i class="material-icons">menu_book</i>
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.login') }}" class="nav-link">
                        <i class="material-icons">party_mode</i>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
