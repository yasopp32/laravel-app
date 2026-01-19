<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Auto Prima Car</title>
    <style>
        /* ===============================
           GLOBAL STYLES
        ================================= */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f1f1; /* Latar belakang yang lembut dan netral */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        /* ===============================
           HEADER
        ================================= */
        header {
    background: linear-gradient(135deg, #e64a19, #333); /* Gradien biru yang lebih modern */
    color: white;
    padding: 5rem 2rem;
    text-align: center;
    width: 100%;
    margin-bottom: 4rem;
    border-bottom: 4px solid #f44336;
}

         header h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        header p {
            font-size: 1.5rem;
            max-width: 600px;
            margin: 0 auto;
            font-weight: 300;
        }

        /* ===============================
           MAIN CONTENT (Dengan Grid Layout untuk layanan)
        ================================= */
        main {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .content {
            width: 100%;
            max-width: 900px;
            text-align: center;
            padding: 3rem;
            border-radius: 12px;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        /* ===============================
           SERVICE CARDS (Kartu Layanan Bengkel)
        ================================= */
        .services {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .service-card {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .service-card i {
            font-size: 3rem;
            color: #ff6f00;
            margin-bottom: 15px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .service-card p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* ===============================
           BUTTON STYLES
        ================================= */
        .btn {
            padding: 15px 40px;
            background-color: #ff6f00;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.3rem;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 2rem;
        }

        .btn:hover {
            background-color: #ffab00; /* Efek hover lebih terang */
        }

        /* ===============================
           FOOTER
        ================================= */
        footer {
            background: linear-gradient(135deg, #e64a19, #333);
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
            margin-top: 3rem;
            width: 100%;
            border-radius: 20px;
        }

        /* ===============================
           RESPONSIVE LAYOUT (Untuk perangkat mobile)
        ================================= */
        @media (max-width: 768px) {
            header h1 {
                font-size: 3rem;
            }

            .services {
                grid-template-columns: 1fr; /* Layout menjadi satu kolom di mobile */
            }

            .btn {
                padding: 12px 30px;
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di Auto Prima Car!</h1>
        <p>Jadikan kendaraan Anda selalu dalam kondisi terbaik dengan layanan perawatan dan perbaikan terbaik dari kami. Kami hadir dengan harga terjangkau dan kualitas yang tak tertandingi!</p>
    </header>

    <!-- Main Content -->
    <main>
        <div class="content">
            <!-- Kartu Layanan Bengkel -->
            <div class="services">
                <div class="service-card">
                    <i class="fas fa-car"></i>
                    <h3>Perawatan Rutin</h3>
                    <p>Layanan berkala untuk menjaga kendaraan Anda dalam kondisi prima.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-tools"></i>
                    <h3>Perbaikan Cepat</h3>
                    <p>Proses perbaikan cepat dan efisien untuk memastikan kenyamanan Anda.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-gift"></i>
                    <h3>Harga Terjangkau</h3>
                    <p>Menawarkan harga bersaing dengan kualitas layanan yang sangat memuaskan.</p>
                </div>
            </div>


            <!-- Tombol Call to Action -->
            <a href="{{ route('login') }}" class="btn">
                Mulai Perawatan Sekarang
            </a>
        </div>
    </main>

    <footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
