<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php $this->load->view('_part/head'); ?>

	<title>Bumi Manira</title>
</head>
<body>
	<?php $this->load->view('_part/nav'); ?>
  <main>
    <section id="home" class="py-1 p-2">
    <div class="container-xl col-xxl-12 px-2 py-1">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6 py-2">
          <img src="<?= base_url('_assets/img/banner-0.png')?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6 py-3">
          <h1 class="display-6 lh-5 mb-2 c-tag fw-bold">Pengembangan <hl>Metodologi & Media Komunikasi</hl> Yang Tepatguna.</h1>
          <p class="py-3">Terpenuhinya Hak Masyarakat untuk mendapatkan Pendidikan Baik Formal maupun Informal & Akses Informasi yang setara untuk memenuhi Penghidupan Mereka.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start py-2">
            <a class="btn btn-primary" href="#about">Tentang Kami <i class="fa fa-chevron-right fa-xs"></i></a>
            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button> -->
            <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="container-xl mb-5">

  <section id="about" class="p-2 col-xxl-12 px-2 py-3">
    <div class="container-xl">
      <div class="p-0 mb-5 bg-transparent rounded-3">
        <div class="row align-items-md-stretch py-1">
          <div class="col-md-4">
            <div class="h-100 p-1 py-5 bg-transparent col-12 text-center">
              <img src="<?= base_url('_assets/img/favicon/android-chrome-512x512.png')?>" class="col-12" style="padding-left: 25%; padding-right: 25%;">
            </div>
          </div>
          <div class="col-md-8">
            <div class="h-100 p-1 bg-transparent">
              <h4 class="fw-bold py-1">Yayasan Bumi Manira</h4>
              <p class="justified">Yayasan Bumi Manira (YBM) adalah Organisasi Non Profit yang berbasis di Bandung, Jawa Barat, Indonesia, didirikan pada tahun 1987. Pada masa lalu lebih dikenal dengan nama Studio Driya Media (SDM) yang merupakan unit operasional dari YBM.</p>
              <p>BM bekerja dalam bidang Metodologi Komunikasi Pembangunan dengan melayani lembaga-lembaga pembangunan baik itu pemerintah, lembaga masyarakat, lembaga internasional maupun swasta agar lebih efektif di dalam mengembangkan komunikasi ,edukasi, dan informasi dengan masyarakat dalam berbagai isu pembangunan masyarakat. Harapan YBM dengan melalui komunikasi yang lebih efektif dan penggunaan media yang tepatguna, efektifitas layanan akan meningkat dan masyarakat akan lebih kritis untuk mendapatkan keuntungan lebih bagi tujuan kesejahteraan mereka.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="p-1 mb-5 bg-transparent rounded-3">
        <div class="row align-items-md-stretch">
          <div class="col-md-12">
            <div class="h-100 p-1 bg-transparent">
              <h5 class="fw-bold py-0">Visi & Misi</h5>
              <p class="justified">Terpenuhinya hak masyarakat untuk mendapatkan pendidikan baik formal maupun informal dan akses informasi yang setara untuk memenuhi penghidupan mereka.</p>
              <p class="justified">Memberikan pelayanan, dukungan, dan masukan kebijakan kepada lembaga-lembaga pembangunan yang mempunyai komitmen pada masyarakat marjinal dan menjunjung nilai pembangunan  berkelanjutan melalui pengembangan metodologi dan media komunikasi yang tepatguna.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <section id="portfolio">
    <div class="container-xl">
      <div class="col-12 py-1">
        <h4 class="fw-bold py-1 text-center">Portofolio</h4>
      </div>
      <div class="p-1 mb-1 bg-white rounded-0">
          <div class="row align-items-md-stretch">
            <div class="col-md-4 py-5 p-2">
              <div class="h-100 p-0 bg-transparent">
                <div class="card bg-transparent py-0 p-0" style="width: 100%;">
                  <img src="<?= base_url('_assets/img/src/thumb-1.jpg')?>" class="card-img-top col-12" alt="...">
                  <div class="card-body bg-white">
                    <p class="fw-bold text-dark text-left">Pengelolaan Pengetahuan Pembangunan.</p>
                    <a href="article" class="btn btn-primary col-12 text-white">Read More...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-5 p-2">
              <div class="h-100 p-0 bg-transparent">
                <div class="card bg-transparent py-0 p-0" style="width: 100%;">
                  <img src="<?= base_url('_assets/img/src/thumb-2.jpg')?>" class="card-img-top col-12" alt="...">
                  <div class="card-body bg-white">
                    <p class="fw-bold text-dark text-left">Strategi Komunikakasi PNPM Mandiri.</p>
                    <a href="article" class="btn btn-primary col-12 text-white">Read More...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-5 p-2">
              <div class="h-100 p-0 bg-transparent">
                <div class="card bg-transparent py-0 p-0" style="width: 100%;">
                  <img src="<?= base_url('_assets/img/src/thumb-3.jpg')?>" class="card-img-top col-12" alt="...">
                  <div class="card-body bg-white">
                    <p class="fw-bold text-dark text-left">Meraih Kepercayaan Masyarakat.</p>
                    <a href="article" class="btn btn-primary col-12 text-white">Read More...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 py-1">
          <h6 class="py-1 mb-5 text-center mb-5"><a href="<?=base_url('portofolio') ?>" class="fw-bold">View Full Portofolio <i class="fa fa-chevron-right fa-ss"></i></a></h6>
          <hr class="container-xl mb-0">
        </div>
      </div>
      <div class="container-xl text-center py-5">
        <div class="row">
          <div class="col-3 col-sm-3">
            <a href=""><img src="<?= base_url('_assets/img/src/cl-2.png')?>" class="clitem col-md-8 py-3" style="width: 60%;"></a>
          </div>
          <div class="col-3 col-sm-3">
            <a href=""><img src="<?= base_url('_assets/img/src/cl-2.png')?>" class="clitem col-md-8 py-3" style="width: 60%;"></a>
          </div>
          <div class="col-3 col-sm-3">
            <a href=""><img src="<?= base_url('_assets/img/src/cl-2.png')?>" class="clitem col-md-8 py-3" style="width: 60%;"></a>
          </div>
          <div class="col-3 col-sm-3">
            <a href=""><img src="<?= base_url('_assets/img/src/cl-2.png')?>" class="clitem col-md-8 py-3" style="width: 60%;"></a>
          </div>
        </div>
      </div>
  </section>
  <section id="contact" class="bg-custom text-white mb-0 text-center">
    <div class="container-xl py-5">
      <div class="col-12 py-1 mb-3">
        <h2 class="fw-bold py-3 text-center">Let's get in touch</h2>
      </div>

      <div class="p-1 mb-1 bg-transparent rounded-5">
          <div class="row align-items-md-stretch">
            <div class="col-md-4 py-3">
              <div class="h-100 p-0 bg-transparent">
                <div class="bg-transparent py-1 p-3" style="width: 100%;">
                  <!-- <img src="<?= base_url('_assets/img/src/thumb-3.jpg')?>" class="card-img-top" alt="..."> -->
                  <h1><i class="fa fa-phone"></i></h1>
                  <div class="card-body bg-custom">
                    <p class=" text-white">+62 8111221030</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3">
              <div class="h-100 p-0 bg-transparent">
                <div class="bg-transparent py-1 p-3" style="width: 100%;">
                  <!-- <img src="<?= base_url('_assets/img/src/thumb-3.jpg')?>" class="card-img-top" alt="..."> -->
                  <h1><i class="fa fa-envelope"></i></h1>
                  <div class="card-body bg-custom">
                    <p class=" text-white text-center">contact@bumimanira.org</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3">
              <div class="h-100 p-0 bg-transparent">
                <div class="bg-transparent py-1 p-3" style="width: 100%;">
                  <!-- <img src="<?= base_url('_assets/img/src/thumb-3.jpg')?>" class="card-img-top" alt="..."> -->
                  <h1><i class="fa fa-map"></i></h1>
                  <div class="card-body bg-custom">
                    <p class=" text-white text-center">Bandung, Indonesia</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-5"></div>
        <div class="col-md-12 row">
          <div class="col-md-6 py-1">
            <input type="" name="" placeholder="Nama" class="form-control col-12">
          </div>
          <div class="col-md-6 py-1">
            <input type="" name="" placeholder="Email" class="form-control col-12">
          </div>
          <div class="col-md-12 py-3">
            <textarea class="form-control col-12" placeholder="Pesan"></textarea>
          </div>
          <div class="col-md-12 py-3">
            <!-- <button class="btn btn-outline-light">Send</button> -->
            <button type="submit" class="btn btn-outline-light form-control fw-bold">Kirim Pesan</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-custom py-5 md-4 text-center">
    <div>
      <span class="text-white"><small>R &copy <?=date('Y') ?></small></span>
    </div>
  </footer>
</main>
</body>
</html>

<script type="text/javascript" src="_assets/js/bootstrap.bundle.min.js"></script>