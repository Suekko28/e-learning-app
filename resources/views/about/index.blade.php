@extends('layout.app')

@section('navbar')
    <div class="container mt-5 text-center">
        <h2 class="fw-bold mb-3">Tentang Kami</h2>
        <div class="text-justify lh-lg">
            <p>Program keahlian Teknik Jaringan Komputer dan Telekomunikasi (TJKT) didesain secara komprehensif untuk
                membekali peserta didik dengan pengetahuan, keterampilan, dan sikap yang diperlukan agar mereka menjadi
                individu yang kompeten dalam berbagai aspek teknologi informasi. Fokus utama dari program ini melibatkan
                proses merakit komputer, menginstal program, merawat, dan memperbaiki komputer beserta jaringannya.
                <br>
                <br>
                Peserta didik TJKT akan dibekali dengan pemahaman mendalam tentang arsitektur dan komponen komputer,
                memungkinkan mereka tidak hanya untuk merakit perangkat keras dengan efisiensi tetapi juga untuk
                mengidentifikasi dan memecahkan masalah yang mungkin muncul. Selain itu, mereka akan memperoleh keahlian
                dalam menginstal berbagai jenis perangkat lunak dan program aplikasi, menyesuaikannya dengan kebutuhan
                spesifik pengguna atau lingkungan.
                <br>
                <br>
                Salah satu aspek penting dari program ini adalah penguasaan keterampilan dalam merawat dan memperbaiki
                komputer dan jaringannya. Ini melibatkan pemahaman mendalam tentang troubleshooting, diagnosis masalah, dan
                penerapan solusi yang efektif. Peserta didik diajarkan untuk menghadapi tantangan yang mungkin muncul dalam
                pengoperasian sehari-hari, baik itu masalah perangkat keras atau perangkat lunak, dengan kecepatan dan
                ketepatan.

                Namun, fokus program TJKT tidak hanya terbatas pada tingkat rumah tangga atau kantor. Lulusan dari program
                ini diharapkan memiliki kemampuan untuk mengimplementasikan instalasi jaringan komputer yang melibatkan
                skala yang lebih besar, seperti antar kota, antar provinsi, dan bahkan lintas negara. Mereka akan dibekali
                dengan pengetahuan tentang protokol jaringan, manajemen bandwidth, keamanan jaringan, dan konsep-konsep lain
                yang mendukung pembentukan dan pemeliharaan jaringan yang handal dan efisien.
            </p>
        </div>
    </div>

    <div class="container text-center">
        <div class="d-flex flex-row mb-3 justify-content-center text-white">
            <div class="d-flex p-2">
                <img src="/bg-jumbo.jpg" alt="" class="img-thumbnail" width="500px" height="500px">
            </div>
            <div class="p-2">
                <img src="/bg-jumbo.jpg" alt="" class="img-thumbnail" width="500px" height="500px">

            </div>
            <div class="p-2">
                <img src="/bg-jumbo.jpg" alt="" class="img-thumbnail" width="500px" height="500px">

            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
