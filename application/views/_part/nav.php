  <nav class="navbar navbar-expand-lg navbar-white bg-white" aria-label="Ninth navbar example">
    <div class="container-xl container-fluid px-3 py-2">
      <a class="navbar-brand" href="#"><img src="<?= base_url('_assets/img/exa-brand.svg')?>"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>

        <ul class="navbar-nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('/') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('#about') ?>">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('portofolio') ?>">Portofolio</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Galeri</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('#contact') ?>">Kontak</a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Lainya</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
              <li><a class="dropdown-item" href="#">Driya Media</a></li>
              <li><a class="dropdown-item" href="#">Pustaka</a></li>
              <li><a class="dropdown-item" href="#">Koperasi</a></li>
              <li><a class="dropdown-item" href="#">Kanal Fasilitator</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>