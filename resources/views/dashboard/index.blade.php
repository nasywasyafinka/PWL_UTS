<!-- resources/views/catalog/index.blade.php -->
@extends('ralphlayouts.template')

@section('content')
    <div class="catalog-container">
        <h1>Glamaraous Collection</h1>
        <div class="catalog-grid">
            @foreach ($collections as $item)
                <div class="card">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                    <div class="card-body">
                        <h5>{{ $item['name'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                        <span class="price">${{ $item['price'] }}</span>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bagian About Us -->
    <div id="about-us" class="about-container">
        <h1>About Me</h1>
        <div class="about-content">
            <div class="about-photo">
                <img src="{{ asset('images/profile/nasywa.jpg') }}" alt="Nasywa Syafinka Widyamara">
            </div>
            <div class="about-description">
                <h2>Nasywa Syafinka Widyamara</h2>
                <p>Hai! Aku Nasywa, mahasiswa D4 Sistem Informasi Bisnis di Politeknik Negeri Malang.
                    Aku super excited sama dunia teknologi dan bisnis, dan punya impian buat menggabungkan keduanya
                    untuk bikin solusi-solusi yang kreatif dan seru!</p>
                <p>Nama "Glamorous" berasal dari perpaduan antara keindahan dan kemewahan, yang terinspirasi oleh nama
                    belakang saya, Amara.
                    Dalam proyek UTS PWL_POS kali ini, saya ingin menyampaikan kesan yang elegan dan mewah melalui koleksi
                    ini. "Glamorous"
                    bukan sekadar sebuah label, tetapi juga representasi dari aspirasi dan dedikasi saya untuk menciptakan
                    sesuatu yang memukau dan berkelas.
                    Dengan setiap produk dalam koleksi ini, saya berharap dapat mengajak setiap orang merasakan sentuhan
                    kemewahan dan keanggunan
                    yang layak dimiliki oleh semua.</p>
            </div>
        </div>
    </div>

    <style>
        .about-container {
            margin-top: 50px;
            text-align: center;
        }

        .about-content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .about-photo img {
            border-radius: 50%;
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
