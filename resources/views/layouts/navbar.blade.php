<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Coop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            animation: gradient-animation 10s infinite alternate;
        }
        @keyframes gradient-animation {
            0% {
                background: linear-gradient(45deg, #6a11cb, #2575fc);
            }
            100% {
                background: linear-gradient(45deg, #2575fc, #6a11cb);
            }
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }
        .nav-link {
            color: #fff !important;
            margin: 0 10px;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .nav-link:hover {
            color: #ffcc00 !important;
            transform: scale(1.1);
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            color: #fff !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Coop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.index') }}">Nasabah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mandatory-saving.index') }}">Simpanan Wajib</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('loan.index') }}">Pinjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('member.index') }}">Anggota</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
