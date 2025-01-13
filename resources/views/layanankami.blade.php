<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

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
    </style>
</head>
<body>
    <!-- Include Header -->
    @include('layouts.header')

    <main>
        <!-- Body 1 -->
        <div class="w-100 mt-5 position-relative" style="height: 450px;">
            <img src="{{ asset('images/interview.jpg') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
            <h1 class="position-absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">LAYANAN KAMI</h1>
        </div>
    {{-- body 3 --}}
    <div class="container py-5 text-muted" style="max-width: 860px;">
        <h1 class="mt-3 mb-5 fs-4 text-center">Layanan Kami</h1>    
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-overlay">
                        <img src="{{ asset('images/bachelor.png') }}" class="card-img" alt="Studi S1 - Bachelor">
                        <div class="overlay-content">
                            <div class="line mb-4"></div>
                            <h5 class="card-title">Studi S1 - Bachelor</h5>
                        </div>
                    </div>                        
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-overlay">
                        <img src="{{ asset('images/master.png') }}" class="card-img" alt="Studi S2 - Master">
                        <div class="overlay-content">
                            <div class="line mb-4"></div>
                            <h5 class="card-title">Studi S2 - Master</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-overlay">
                        <img src="{{ asset('images/phd.jpg') }}" class="card-img" alt="Studi S3 - Ph.D">
                        <div class="overlay-content">
                            <div class="line mb-4"></div>
                            <h5 class="card-title">Studi S3 - Ph.D</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-overlay">
                        <img src="{{ asset('images/kursus.png') }}" class="card-img" alt="Kursus Bahasa Asing">
                        <div class="overlay-content">
                            <div class="line mb-4"></div>
                            <h5 class="card-title">Kursus Bahasa Asing</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-overlay">
                        <img src="{{ asset('images/studytour.png') }}" class="card-img" alt="Study Tour">
                        <div class="overlay-content">
                            <div class="line mb-4"></div>
                            <h5 class="card-title">Study Tour</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-overlay">
                        <img src="{{ asset('images/ausbildung.jpg') }}" class="card-img" alt="Ausbildung">
                        <div class="overlay-content">
                            <div class="line mb-4"></div>
                            <h5 class="card-title">Ausbildung</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- body 7 --}}
     <div class="text-center py-5 text-muted">
        <h1 class="h4 mb-4">Hubungi Kami</h1>
        <h2 class="h5">Kantor Pusat</h2>
        <p class="">MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT. BASEMENT.</p>
        <p class="">Phone: 085286754052</p>

        <!-- Buttons -->
        <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
            <a href="#" class="btn bg-gradient-custom-footer text-white rounded-5 fs-6">LOKASI KAMI</a>
            <a href="#" class="btn bg-body-secondary border-dark rounded-5 fs-6">KIRIM PESAN</a>
        </div>
    </div>
</main>

<!-- Include Footer -->
@include('layouts.footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>