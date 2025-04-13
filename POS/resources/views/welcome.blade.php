@extends('layouts.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Halo {{ Auth::user()->username }}, apa kabar??</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        Selamat datang {{ Auth::user()->nama }}, ini adalah halaman utama dari aplikasi ini.
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $user }}</h3> 
                <p>Jumlah Pengguna</p>
            </div>
            <a href="{{ url('/user') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $level }}</h3> 
                <p>Jumlah Level Pengguna</p>
            </div>
            <a href="{{ url('/level') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $kategori }}</h3> 
                <p>Jumlah Kategori Barang</p>
            </div>
            <a href="{{ url('/kategori') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $barang }}</h3> 
                <p>Jumlah Barang</p>
            </div>
            <a href="{{ url('/barang') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $supplier }}</h3> 
                <p>Jumlah Supplier</p>
            </div>
            <a href="{{ url('/supplier') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-pink">
            <div class="inner">
                <h3>{{ $stok }}</h3> 
                <p>Jumlah Stok Barang</p>
            </div>
            <a href="{{ url('/stok') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-navy">
            <div class="inner">
                <h3>{{ $penjualan }}</h3> 
                <p>Jumlah Transaksi</p>
            </div>
            <a href="{{ url('/penjualan') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection