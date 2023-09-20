<div class="sidebar">
    <ul class="nav flex-column nav-pills">
        <li class="nav-item">
            <a class="nav-link {{ ($page=='beranda'? "active": "") }}" href="{{ route('dashboard') }}">Beranda</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ ($page=='penawaran-topik'? "active": "") }}" href="{{ route('penawaran-topik') }}">Penawaran Topik</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ ($page=='tambah-penawaran-topik'? "active": "") }}" href="{{ route('tambah-penawaran-topik') }}">Tambah Penawaran Topik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($page=='tugas-akhir'? "active": "") }}" href="{{ route('tugas-akhir') }}">Tugas Akhir</a>
        </li>
    </ul>
</div>
