<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nexus Sky - Company Profile</title>
  @vite('resources/sass/app.scss')
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="80">

  <!-- ================= NAVBAR ================= -->
  <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#hero">
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="brand-logo" onerror="this.style.display='none'">
        <span>Nexus<span class="text-primary">Sky</span></span>
      </a>

      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-2 align-items-lg-center">
          <li class="nav-item"><a class="nav-link active" href="#hero">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
          <li class="nav-item ms-lg-2">
            <a href="#contact" class="btn btn-primary rounded-pill px-4">Konsultasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ================= HERO BANNER ================= -->
  <header id="hero" class="hero-section text-white d-flex align-items-center py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6">
          <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 mb-3 fw-semibold">
            Agensi Kreatif & Solusi Digital
          </span>
          <h1 class="display-5 fw-bold lh-sm mb-3">
            Hadirkan Identitas Digital Profesional untuk Bisnis Anda
          </h1>
          <p class="lead text-secondary mb-4">
            Kami membantu merancang website modern yang cepat, elegan, dan siap meningkatkan citra merek Anda di mata calon klien.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="#portfolio" class="btn btn-primary btn-lg rounded-pill px-4">Lihat Portofolio</a>
            <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Hubungi Kami</a>
          </div>
        </div>

        <div class="col-lg-6 text-center">
          <div class="hero-img-wrapper">
            <img src="{{ Vite::asset('resources/images/hero-image.jpg') }}" alt="Hero Illustration" class="img-fluid rounded-4 shadow-lg hero-img" onerror="this.src='https://placehold.co/600x400/1e293b/ffffff?text=Isi+assets/images/hero-image.png'">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ================= TENTANG KAMI ================= -->
  <section id="about" class="py-5 bg-white">
    <div class="container py-4">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6">
          <div class="position-relative">
            <img src="{{ Vite::asset('resources/images/about.jpg') }}" alt="Tentang Perusahaan" class="img-fluid rounded-4 shadow about-img" onerror="this.src='https://placehold.co/600x450/e2e8f0/334155?text=Isi+assets/images/about-image.png'">
          </div>
        </div>

        <div class="col-lg-6">
          <span class="text-primary fw-bold text-uppercase small">Tentang Perusahaan</span>
          <h2 class="fw-bold mb-3 mt-1">Kami Bekerja dengan Dedikasi & Kualitas Tinggi</h2>
          <p class="text-muted">
            Dengan pengalaman bertahun-tahun di bidang desain antarmuka dan pengembangan sistem web, kami selalu memastikan setiap proyek selesai dengan rapi, efisien, dan berdampak nyata.
          </p>

          <div class="row g-3 my-3">
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2">
                <i class="bi bi-patch-check-fill text-primary fs-4"></i>
                <span class="fw-semibold">100% Kode Bersih</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2">
                <i class="bi bi-lightning-charge-fill text-warning fs-4"></i>
                <span class="fw-semibold">Loading Website Cepat</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2">
                <i class="bi bi-phone-fill text-success fs-4"></i>
                <span class="fw-semibold">Ramah Semua Perangkat</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2">
                <i class="bi bi-shield-lock-fill text-danger fs-4"></i>
                <span class="fw-semibold">Aman & Terpercaya</span>
              </div>
            </div>
          </div>

          <a href="#contact" class="btn btn-outline-primary rounded-pill px-4 mt-2">Diskusikan Proyek Anda</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= LAYANAN ================= -->
  <section id="services" class="py-5 bg-light">
    <div class="container py-4">
      <div class="text-center mb-5">
        <span class="text-primary fw-bold text-uppercase small">Layanan Kami</span>
        <h2 class="fw-bold">Solusi yang Kami Tawarkan</h2>
        <p class="text-muted">Fokus pada kualitas terbaik untuk membantu brand Anda berkembang.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4 service-card">
            <div class="service-icon bg-primary-subtle text-primary rounded-3 d-flex align-items-center justify-content-center mb-3">
              <i class="bi bi-window-sidebar fs-3"></i>
            </div>
            <h5 class="fw-bold mb-2">Desain Website</h5>
            <p class="text-muted small">Tampilan web elegan yang dirancang khusus sesuai identitas merek Anda.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4 service-card">
            <div class="service-icon bg-success-subtle text-success rounded-3 d-flex align-items-center justify-content-center mb-3">
              <i class="bi bi-code-slash fs-3"></i>
            </div>
            <h5 class="fw-bold mb-2">Web Development</h5>
            <p class="text-muted small">Implementasi Bootstrap, HTML5, dan CSS3 yang responsif dan standar industri.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4 service-card">
            <div class="service-icon bg-warning-subtle text-warning rounded-3 d-flex align-items-center justify-content-center mb-3">
              <i class="bi bi-graph-up-arrow fs-3"></i>
            </div>
            <h5 class="fw-bold mb-2">Optimasi & SEO</h5>
            <p class="text-muted small">Konfigurasi struktur kode yang ramah mesin pencari Google agar mudah ditemukan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PORTOFOLIO ================= -->
  <section id="portfolio" class="py-5 bg-white">
    <div class="container py-4">
      <div class="text-center mb-5">
        <span class="text-primary fw-bold text-uppercase small">Portofolio</span>
        <h2 class="fw-bold">Karya & Proyek Pilihan</h2>
        <p class="text-muted">Contoh beberapa website dan proyek yang pernah kami buat.</p>
      </div>

      <div class="row g-4">
        <!-- Proyek 1 -->
        <div class="col-md-4">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 portfolio-card">
            <img src="" alt="Proyek 1" class="card-img-top portfolio-img" onerror="this.src='https://placehold.co/600x400/0d6efd/ffffff?text=Isi+project-1.jpg'">
            <div class="card-body p-4">
              <span class="badge bg-primary-subtle text-primary mb-2">Corporate</span>
              <h5 class="card-title fw-bold">Finance Company Web</h5>
              <p class="card-text text-muted small">Pembuatan website profil perusahaan finansial dengan tampilan bersih.</p>
            </div>
          </div>
        </div>

        <!-- Proyek 2 -->
        <div class="col-md-4">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 portfolio-card">
            <img src="" alt="Proyek 2" class="card-img-top portfolio-img" onerror="this.src='https://placehold.co/600x400/198754/ffffff?text=Isi+project-2.jpg'">
            <div class="card-body p-4">
              <span class="badge bg-success-subtle text-success mb-2">E-Commerce</span>
              <h5 class="card-title fw-bold">Fashion Online Store</h5>
              <p class="card-text text-muted small">Katalog toko baju online yang nyaman digunakan di smartphone.</p>
            </div>
          </div>
        </div>

        <!-- Proyek 3 -->
        <div class="col-md-4">
          <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 portfolio-card">
            <img src="" alt="Proyek 3" class="card-img-top portfolio-img" onerror="this.src='https://placehold.co/600x400/ffc107/000000?text=Isi+project-3.jpg'">
            <div class="card-body p-4">
              <span class="badge bg-warning-subtle text-dark mb-2">F&B Brand</span>
              <h5 class="card-title fw-bold">Coffee Shop Landing</h5>
              <p class="card-text text-muted small">Landing page promosi kafe dengan menu interaktif dan lokasi peta.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= FORM KONTAK ================= -->
  <section id="contact" class="py-5 bg-light">
    <div class="container py-4">
      <div class="row gy-5">
        <div class="col-lg-5">
          <span class="text-primary fw-bold text-uppercase small">Hubungi Kami</span>
          <h2 class="fw-bold mb-3">Siap Mewujudkan Ide Anda</h2>
          <p class="text-muted mb-4">Silakan hubungi kami untuk mendiskusikan kebutuhan website atau portofolio Anda.</p>

          <div class="d-flex flex-column gap-3">
            <div class="d-flex align-items-center gap-3">
              <div class="p-2 bg-primary-subtle text-primary rounded-circle"><i class="bi bi-geo-alt-fill fs-5"></i></div>
              <div><small class="text-muted d-block">Lokasi</small><strong>Jakarta, Indonesia</strong></div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="p-2 bg-success-subtle text-success rounded-circle"><i class="bi bi-whatsapp fs-5"></i></div>
              <div><small class="text-muted d-block">WhatsApp</small><strong>+62 812-1212-0000</strong></div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="p-2 bg-info-subtle text-info rounded-circle"><i class="bi bi-envelope-fill fs-5"></i></div>
              <div><small class="text-muted d-block">Email</small><strong>kontak@nexussky.id</strong></div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 bg-white">
            <form id="contactForm">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nameInput" placeholder="Nama" required>
                    <label for="nameInput">Nama Anda</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="emailInput" placeholder="Email" required>
                    <label for="emailInput">Email Anda</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Pesan" id="messageInput" style="height: 120px" required></textarea>
                    <label for="messageInput">Pesan atau detail proyek...</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 w-100">
                    <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                  </button>
                </div>
              </div>
            </form>
            <div id="formAlert" class="alert alert-success mt-3 d-none rounded-3" role="alert">
              <i class="bi bi-check-circle-fill me-2"></i> Pesan berhasil terkirim! Kami akan segera merespons Anda.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer class="bg-dark text-white py-4 border-top border-secondary">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-3">
      <span class="fw-semibold">Nexus Sky</span>
      <p class="text-secondary small mb-0">© 2026 Nexus Sky. All rights reserved.</p>
      <div class="d-flex gap-3 fs-5">
        <a href="#" class="text-secondary text-decoration-none"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-secondary text-decoration-none"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  @vite('resources/js/app.js')
</body>
</html>
