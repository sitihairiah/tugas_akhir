<div class="left-sidenav">

    <div class="brand">
        <a href="{{ url('admin') }}" class="logo">
            <span>
                <img src="{{ url('public/admin') }}/logo.png" style="width: 70%">
            </span>

        </a>
    </div>

    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ url('admin') }}">
                    <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('admin/lelang') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Data Lelang</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

            <li>
                <a href="{{ url('admin/berita') }}">
                    <i data-feather="list" class="align-self-center menu-icon"></i>
                    <span>Data Berita</span>
                    <span class="badge badge-soft-success menu-arrow"></span>
                </a>
            </li>

           
        </ul>
    </div>
</div>
