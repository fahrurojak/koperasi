@extends('layouts.main')

@section('content')
    <div class="hero bg-primary text-white py-5">
        <div class="container text-center rounded-banner">
            <img src="{{ asset('images/Koperasi PALUGADA.png') }}" alt="Banner Image" class="img-fluid mt-4 rounded-banner-image">
            <h1 class="hero-title display-4 fw-bold blink mt-3">Selamat Datang Di Koperasi PALUGADA</h1>
            <p class="hero-description lead mt-3">Koperasi yang peduli dengan kebutuhan Anda</p>
        </div>
    </div>

    <style>
        .hero {
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .rounded-banner {
            border-radius: 20px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            padding: 40px;
        }

        .rounded-banner-image {
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .hero-description {
            font-size: 1.25rem;
            font-weight: 300;
        }

        .blink {
            animation: blinker 1.5s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
@endsection
