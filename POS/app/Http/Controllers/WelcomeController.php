<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\LevelModel;
use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\SupplierModel;
use App\Models\StokModel;
use App\Models\PenjualanModel;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = UserModel::count();
        $level = LevelModel::count();
        $kategori = KategoriModel::count();
        $barang = BarangModel::count();
        $supplier = SupplierModel::count();
        $stok = StokModel::count();
        $penjualan = PenjualanModel::count();

        $breadcrumb = (object)[
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('welcome', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu,
            'user' => $user,
            'level' => $level,
            'kategori' => $kategori,
            'barang' => $barang,
            'supplier' => $supplier,
            'stok' => $stok,
            'penjualan' => $penjualan,
        ]);
    }
}