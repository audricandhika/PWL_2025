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
@endsection