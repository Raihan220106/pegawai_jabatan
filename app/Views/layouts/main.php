<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'CRUD Pegawai' ?></title>
    <link rel="stylesheet" href="/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        html, body {
            height: 100%;
            background-color: #f8f9fa;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content-wrapper {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
        .navbar-brand {
            letter-spacing: .5px;
        }
        .nav-link.active {
            font-weight: 600;
            border-bottom: 2px solid #fff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d6efd;">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand fw-semibold" href="/">
                <i class="bi bi-people-fill me-1"></i> CRUD Pegawai
            </a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-1">
                        <a class="nav-link <?= service('uri')->getSegment(1) == '' ? 'active' : '' ?>" href="/">Beranda</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link <?= service('uri')->getSegment(1) == 'jabatan' ? 'active' : '' ?>" href="/jabatan">Jabatan</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link <?= service('uri')->getSegment(1) == 'pegawai' ? 'active' : '' ?>" href="/pegawai">Pegawai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-wrapper">
        <div class="container py-4">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-3 bg-dark text-white">
        <div class="container text-center">
            <small>&copy; <?= date('Y') ?> CRUD Pegawai - CodeIgniter 4</small>
        </div>
    </footer>

    <script src="/assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
