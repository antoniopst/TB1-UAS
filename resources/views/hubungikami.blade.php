<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body {
            font-family: 'Ubuntu';
        }
        .bg-gradient-custom {
            background: linear-gradient(to right, #46074E, #197BD0);
        }
        .bg-gradient-custom-footer {
            background: linear-gradient(to right, #46074E, rgba(70, 7, 78, 0.8), #197BD0);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #197BD0;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    @include('layouts.header')

    <main>
        <!-- Hero Section -->
        <div class="position-relative mt-5" style="height: 450px;">
            <img src="{{ asset('images/dresden2.jpg') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
            <h1 class="position-absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">Hubungi Kami</h1>
        </div>

        <!-- Form Section -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h2 class="mb-5 ms-5 fw-bold fs-4">KIRIM PESAN</h2>
            <form id="hubungiKamiForm" action="/" method="GET" class="row g-4 justify-content-center">
                @csrf
                <!-- Input Fields -->
                <div class="col-md-5">
                    <label for="nama" class="form-label fw-bold">Nama*</label>
                    <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
                </div>
                <div class="col-md-5">
                    <label for="email" class="form-label fw-bold">E-Mail*</label>
                    <input type="email" class="form-control border-0 border-bottom" id="email" name="email" placeholder="Alamat Email Anda" required>
                </div>
                <div class="col-md-5">
                    <label for="perusahaan" class="form-label fw-bold">Perusahaan / Organisasi</label>
                    <input type="text" class="form-control border-0 border-bottom" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan / organisasi">
                </div>
                <div class="col-md-5">
                    <label for="telepon" class="form-label fw-bold">Telepon</label>
                    <input type="tel" class="form-control border-0 border-bottom" id="telepon" name="telepon" placeholder="Nomor telepon Anda">
                </div>
                <div class="col-md-10">
                    <label for="pesan" class="form-label fw-bold">Isi Pesan*</label>
                    <textarea class="form-control border-0 border-bottom" id="pesan" name="pesan" rows="5" placeholder="Isi pesan Anda ..." required></textarea>
                </div>
                <div class="col-md-10 d-flex justify-content-between align-items-center">
                    <!-- reCAPTCHA -->
<div class="g-recaptcha" data-sitekey="6LetRrYqAAAAABjuLRv8vLrKvTTDExV1myux0QNb"></div>
                    <button type="submit" class="btn btn-outline-primary px-4 py-2 rounded-pill">KIRIM PESAN</button>
                </div>
            </form>
        </div>

        <!-- Lokasi Kami Section -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h2 class="ms-5 fw-bold mb-5 fs-4">LOKASI KAMI</h2>
            <!-- Kantor Pusat -->
            <div class="lokasi-item mt-4 ms-5">
                <h4 class="fw-bold fs-5">KANTOR PUSAT</h4>
                <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                <p><span class="fw-bold">Phone:</span> (+62 21) 398 38706 - <span class="fw-bold">Fax:</span> (+62 21) 316 1701</p>
                <p><span class="fw-bold">Hotline:</span> +6281519040071 / +62811998167</p>
            </div>
            <!-- Kantor Cabang -->
            <div class="lokasi-item mt-4 ms-5">
                <h4 class="fw-bold fs-5">KANTOR CABANG</h4>
                <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                <p><span class="fw-bold">Phone:</span> (+62 21) 398 38706 - <span class="fw-bold">Fax:</span> (+62 21) 316 1701</p>
                <p><span class="fw-bold">Hotline:</span> +6281519040071 / +62811998167</p>
            </div>
        </div>
    </main>        

   <!-- Include Footer -->
   @include('layouts.footer')  

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>