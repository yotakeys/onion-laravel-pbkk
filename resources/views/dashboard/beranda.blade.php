@extends('dashboard.layout')

@section('content')
<div class="main-content p-3">
    <!-- konten -->
    <div class="row">
        <h1>Hai {{ $nama }}</h1>
        <h2>Selamat datang di myPBKK Thesis</h2>
        <p>diakses pada {{ date("Y/m/d") }}</p>
    </div>

    {{-- Card Pengumuman --}}
    <div class="row">
        <div class="card">
            <div class="card-body">
              <h6>Pengumuman</h6>
              <p>Tidak ada pengumuman untuk saat ini</p>
            </div>
        </div>
    </div>
    {{-- Akhir card pengumuman --}}

    {{-- card fitur --}}
    <div class="row mt-4">
        <h6>Menu Utama</h6>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tugas Akhir</h5>
                    <p class="card-text">Pantas tugas akhir kamu!</p>
                <a href="#" class="btn btn-primary">Kunjungi</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sidang</h5>
                <p class="card-text">Daftarkan jadwal sidangmu</p>
                <a href="#" class="btn btn-primary">Kunjungi</a>
            </div>
            </div>
        </div>
        </div>
    {{-- akhir card fitur --}}
    <!-- akhir konten -->
</div>
@endsection