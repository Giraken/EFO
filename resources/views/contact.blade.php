@extends('layouts.dashboard')

@section('title', 'Tentang Kami')

@section('css')
    <link rel="stylesheet" href="assets/css/contact.css">
@endsection

@section('content')
<div class="overlay">
    <!-- Overlay inner wrapper -->
    <div class="overlay-inner">
        <div class="social-row">
            <div class="left-panel">
                <h1 class="overlay-title">
                    Media Sosial
                </h1>
                <div class="sosial-row">
                    <p class="overlay-description">
                        <i class="fa-brands fa-instagram"></i> Instagram (electionfo)
                    </p>
                </div>
                <div class="sosial-row">
                    <p class="overlay-description">
                        <i class="fa-brands fa-youtube"></i> Youtube (ElectionForEveryone)
                    </p>
                </div>
                <div class="sosial-row">
                    <p class="overlay-description">
                        <i class="fa-brands fa-x-twitter"></i> Twitter (Election For Everyone)
                    </p>
                </div>

                <div class="contact-us">
                    <h1 class="overlay-title">
                        Kontak Kami
                    </h1>
                    <p class="overlay-description">
                        <i class="fa-solid fa-location-dot"></i> Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)
                        Universitas Brawijaya, Jl. Veteran, Malang, Indonesia <br>
                    </p>
                    <p class="overlay-description">
                        <i class="fa-solid fa-phone"></i> +62 851-6195-0412 (Desy)
                    </p>
                    <p class="overlay-description">
                        <i class="fa-solid fa-envelope"></i> electionforeveryone@gmail.com
                    </p>
                </div>
            </div>

            <div class="right-panel">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3228.1827455535727!2d112.61123590536023!3d-7.950440898202215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827bc35467e1%3A0x364f4b5e8098aa2e!2sFISIP%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1700810391606!5m2!1sid!2sid" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <hr>
        <p class="footer">Hak Cipta © by Election for Everyone || 2023 </p>
    </div>
</div>
@endsection
