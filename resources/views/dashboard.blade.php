@extends('layouts.dashboard')

@section('content')
<body>
    

<div class="alert alert-success text-center">
    <h4>Selamat Datang, Admin {{ Auth::user()->name }}!</h4>
    <p>Berikut adalah layanan utama yang kami tawarkan di BengkelMobil.</p>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h5>Layanan Utama BengkelMobil</h5>
            </div>
            <div class="card-body">
                <p>
                    BengkelMobil menawarkan berbagai layanan perawatan kendaraan yang dapat membantu memastikan kendaraan Anda dalam kondisi terbaik. Berikut adalah layanan utama yang kami tawarkan:
                </p>
                <ul>
                    <li><strong>Perawatan Mesin</strong>: Perawatan rutin untuk memastikan performa mesin kendaraan Anda optimal.</li>
                    <li><strong>Perbaikan Rem</strong>: Kami menangani segala jenis perbaikan pada sistem pengereman kendaraan Anda.</li>
                    <li><strong>Ganti Oli</strong>: Layanan penggantian oli untuk menjaga mesin tetap berjalan dengan lancar.</li>
                    <li><strong>Pengecekan AC</strong>: Kami juga menyediakan layanan pengecekan dan perbaikan sistem pendingin kendaraan Anda.</li>
                    <li><strong>Perbaikan Sistem Transmisi</strong>: Kami siap memperbaiki masalah pada sistem transmisi kendaraan Anda untuk kenyamanan berkendara.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
 <footer>
        <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
    </footer>
    </body>
@endsection
