<nav class="navbar navbar-color-on-scroll bg-dark    fixed-top  navbar-expand-lg " color-on-scroll="100"
    id="sectionsNav">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class=" nav-item">
                    <a href="{{ route('index.profil') }}" class=" nav-link">
                        <i class="material-icons">account_circle</i> Profil
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="{{ route('index.organisasi') }}" class=" nav-link">
                        <i class="material-icons">supervisor_account</i> Organisasi
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">account_circle</i> Pegawai
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ route('index.pegawai') }}" class="dropdown-item">
                            <i class="material-icons">find_in_page</i> Index Pegawai
                        </a>
                        <a href="{{ route('index.jabatan') }}" class="dropdown-item">
                            <i class="material-icons">help_outline</i> Index Jabatan
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.produk-hukum') }}" class="nav-link">
                        <i class="material-icons">menus</i>
                        Produk Hukum
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.berita') }}" class="nav-link">
                        <i class="material-icons">menu_book</i>
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.header') }}" class="nav-link">
                        <i class="material-icons">flip_to_front</i>
                        Header
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">description</i>Agenda
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ route('index.agenda_kejari') }}" class="dropdown-item">
                            <i class="material-icons">find_in_page</i> Agenda
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/admin/logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="material-icons">login</i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
