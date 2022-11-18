<nav class="navbar navbar-expand-lg navbar-dark mb-2 " style="background-color: #5DA7DB;font-family:Poppins">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="font-size:18px;">Dewi Laundry</a>
    <div class="collapse collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0" style="font-weight: 500;text-align:right;font-size:15px">
        <li class="nav-item" >
          <a class="nav-link <?php echo e(($title==="Home")? 'active': ''); ?>" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title==="About")? 'active': ''); ?>"" href="/cekEstimasi">Cek Estimasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title==="Posts")? 'active': ''); ?>"" href="/login">Riwayat</a>
        </li>
        <li class="nav-item dropdown me-5" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/dropdownBtn.svg" alt="">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <li><a class="dropdown-item" href="/profil">Profil</a></li>
            <li><a class="dropdown-item" href="/transaksiAktif">Riwayat</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php /**PATH C:\Users\rezaa\Documents\DEVELOPMENT\Dewi_Laundry\resources\views/templates/navbarPelanggan.blade.php ENDPATH**/ ?>