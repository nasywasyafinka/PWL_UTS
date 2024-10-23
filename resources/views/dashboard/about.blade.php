<!-- resources/views/dashboard/about.blade.php -->
@extends('ralphlayouts.template')

@section('content')
<div class="about-container">
    <h1>About Me</h1>
    <div class="about-content">
        <div class="about-photo">
            <img src="{{ asset('images/profile/nasywa.jpg') }}" alt="Nasywa Syafinka Widyamara">
        </div>
        <div class="about-description">
            <h2>Nasywa Syafinka Widyamara</h2>
            <p>Hai! Aku Nasywa, mahasiswa D4 Sistem Informasi Bisnis di Politeknik Negeri Malang. Aku super excited sama dunia teknologi dan bisnis, 
            dan punya impian buat menggabungkan keduanya untuk bikin solusi-solusi yang kreatif dan seru!</p>
            <p>Nama "Glamorous" berasal dari perpaduan antara keindahan dan kemewahan, yang terinspirasi oleh nama belakang saya, Amara. 
            Dalam proyek UTS PWL_POS kali ini, saya ingin menyampaikan kesan yang elegan dan mewah melalui koleksi ini. "Glamorous" 
            bukan sekadar sebuah label, tetapi juga representasi dari aspirasi dan dedikasi saya untuk menciptakan sesuatu yang memukau dan berkelas. 
            Dengan setiap produk dalam koleksi ini, saya berharap dapat mengajak setiap orang merasakan sentuhan kemewahan dan keanggunan 
            yang layak dimiliki oleh semua.</p>
        </div>
    </div>
</div>

<style>
    .about-container {
        text-align: center;
        padding: 20px;
    }
    .about-content {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .about-photo img {
        border-radius: 200%;
        width: 600px;
        height: 600px;
        object-fit: cover;
        margin-right: 20px;
    }
    .about-description {
        max-width: 400px;
    }
</style>
@endsection
