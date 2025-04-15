<div class="sidebar">
  <!-- SidebarSearch Form -->
  <div class="form-inline mt-2">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ auth()->user()->photo_profile ? asset('storage/' . auth()->user()->photo_profile) : asset('img/default-profile.png') }}"
          class="user-image img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/profile') }}" class="d-block">{{ auth()->user()->nama }}</a>
        </div>
      </div>
      <li class="nav-item">
        <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard')? 'active' : '' }} ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-header">Data Pengguna</li>
      <li class="nav-item">
        <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }} ">
          <i class="nav-icon fas fa-layer-group"></i>
          <p>Level User</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user')? 'active' : '' }}">
          <i class="nav-icon far fa-user"></i>
          <p>Data User</p>
        </a>
      </li>
      <li class="nav-header">Data Barang</li>
      <li class="nav-item">
        <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 'kategori')? 'active' : '' }} ">
          <i class="nav-icon far fa-bookmark"></i>
          <p>Kategori Barang</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/barang') }}" class="nav-link {{ ($activeMenu == 'barang')? 'active' : '' }} ">
          <i class="nav-icon far fa-list-alt"></i>
          <p>Data Barang</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/supplier') }}" class="nav-link {{ ($activeMenu == 'supplier')? 'active' : '' }} ">
          <i class="nav-icon fas fa-truck"></i>
          <p>Data Supplier</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/stok') }}" class="nav-link {{ ($activeMenu == 'stok')? 'active' : '' }} ">
          <i class="nav-icon fas fa-cubes"></i>
          <p>Stok Barang</p>
        </a>
      </li>
      <li class="nav-header">Data Transaksi</li>
      <li class="nav-item">
        <a href="{{ url('/penjualan') }}" class="nav-link {{ ($activeMenu == 'penjualan')? 'active' : '' }} ">
          <i class="nav-icon fas fa-dollar-sign"></i>
          <p>Transaksi Penjualan</p>
        </a>
      </li>
      <li class="nav-item fixed-bottom mx-2">
        <form id="logout-form" action="{{ url('logout') }}" method="GET" class="d-inline">
          @csrf
          <button type="button" id="logout-btn" class="nav-link text-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
          </button>
      </form>
        <script>
          document.getElementById('logout-btn').addEventListener('click', function (e) {
              Swal.fire({
                  title: 'Logout?',
                  text: "Yakin ingin keluar?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  cancelButtonColor: '#6c757d',
                  confirmButtonText: 'Ya, Logout'
              }).then((result) => {
                  if (result.isConfirmed) {
                      document.getElementById('logout-form').submit();
                  }
              });
          });
        </script>         
    </li>
    </ul>
  </nav>
</div>
      