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
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">find_in_page</i> Sejarah
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">help_outline</i> Logo & Makna
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">gavel</i> Struktur Organisasi
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">vertical_split</i> Visi dan Misi
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">touch_app</i> Perintah Harian
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">perm_identity</i> Pegawai
                        </a>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">supervisor_account</i> Organisasi
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">chrome_reader_mode</i> Pidana Umum
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">class</i> Pidana Khusus
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">contactless</i> Pembinaan
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">settings_input_antenna</i> Intelijen
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">tab</i> Perdata dan Tata Usaha
                        </a>
                        <a href="./presentation.html" class="dropdown-item">
                            <i class="material-icons">subject</i> Pemeriksa
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#pablo" class="nav-link">
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
