<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('/') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline" id="navbar-search-form">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search menu..." aria-label="Search" id="search-input">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <div class="media">
            <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <div class="media">
            <img src="{{ asset('adminlte/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <div class="media">
            <img src="{{ asset('adminlte/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

    <!-- User profile dropdown -->
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <i class="nav-icon fas fa-user"></i>
        <span class="d-none d-md-inline">{{ auth()->user()->nama }}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="{{ auth()->user()->photo_profile ? asset('storage/' . auth()->user()->photo_profile) : asset('img/default-profile.png') }}" class="img-circle elevation-2" alt="User Image">
          <p>
            {{ auth()->user()->nama }}
            <small>{{ auth()->user()->level->level_nama ?? 'User' }}</small>
          </p>
        </li>
        <li class="user-footer">
          <a href="{{ url('/profile') }}" class="btn btn-default btn-flat">Profile</a>
          <a href="{{ url('/logout') }}" class="btn btn-default btn-flat float-right">Logout</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>

<script>
  document.getElementById('navbar-search-form').addEventListener('submit', function(event) {
      event.preventDefault(); 
      const searchInput = document.getElementById('search-input').value.trim().toLowerCase();

      // Menentukan URL
      const menuRoutes = {
          'dashboard': '{{ url("/") }}',
          'profile': '{{ url("/profile") }}',
          'user': '{{ url("/user") }}',
          'kategori': '{{ url("/kategori") }}',
          'barang': '{{ url("/barang") }}',
          'supplier': '{{ url("/supplier") }}',
          'stok': '{{ url("/stok") }}',
          'penjualan': '{{ url("/penjualan") }}',
      };

      // Check jika pesan sesuai url
      if (menuRoutes[searchInput]) {
          window.location.href = menuRoutes[searchInput]; // Redirect ke menu sesuai url
      } else {
          alert('Menu not found! Please try another keyword.');
      }
  });
</script>