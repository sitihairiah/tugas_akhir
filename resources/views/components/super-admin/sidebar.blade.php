<div class="left-sidenav">

    <div class="brand">
        <a href="{{ url('super-admin') }}" class="logo">
            <span>
                <img src="{{ url('public/admin') }}/logo.png" style="width: 70%">
            </span>

        </a>
    </div>

    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ url('super-admin') }}">
                    <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('super-admin/x') }}">
                    <i data-feather="user" class="align-self-center menu-icon"></i>
                    <span>Data Super Admin</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('super-admin/admin') }}">
                    <i data-feather="user" class="align-self-center menu-icon"></i>
                    <span>Data Admin</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('super-admin/jenis-upc-pegadaian') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Jenis UPC Pegadaian</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('super-admin/lelang') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Data Lelang</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('super-admin/berita') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Data Berita</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('super-admin/slide') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Data Slide</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            {{-- <li>
                <a href="{{ url('super-admin/galeri') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Data Galeri</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
