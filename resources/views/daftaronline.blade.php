
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug - Daftar Online</title>
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
        .registration-form {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #46074E, #197BD0);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #197BD0, #46074E);
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    @include('layouts.header')

    <main>
        <!-- Header Image -->
        <div class="w-100 mt-5 position-relative" style="height: 450px;">
            <img src="{{ asset('images/picgedung.png') }}" alt="Daftar Online" class="w-100 h-100" style="object-fit: cover;">
            <h1 class="position-absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">DAFTAR ONLINE</h1>
        </div>

        <!-- Registration Form Section -->
        <section class="container py-5" id="daftar-online">
            <h2 class="text-center mb-4">Formulir Pendaftaran</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="registration-form">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap*</label>
                                <input type="text" id="nama" class="form-control" placeholder="Nama lengkap Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-Mail*</label>
                                <input type="email" id="email" class="form-control" placeholder="Alamat E-mail Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Nomor Telepon*</label>
                                <input type="text" id="telepon" class="form-control" placeholder="Nomor telepon Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat*</label>
                                <textarea id="alamat" class="form-control" rows="3" placeholder="Alamat lengkap Anda" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="program" class="form-label">Pilih Program*</label>
                                <select id="program" class="form-select" required>
                                    <option value="">Pilih salah satu</option>
                                    <option value="program1">Program 1</option>
                                    <option value="program2">Program 2</option>
                                    <option value="program3">Program 3</option>
                                </select>
                            </div>
                            <div class="mb-3 text-center">
                                <div class="g-recaptcha" data-sitekey="6LetRrYqAAAAABjuLRv8vLrKvTTDExV1myux0QNb"></div>
                                <div class="form-check d-inline-block">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>