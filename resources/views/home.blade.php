<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
    <div id="carouselExampleCaptions" class="carousel slide fade-in" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./assets/images/luar.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block animate__animated animate__slideInUp">
                <h1>Kos Omah Agatha</h1>
                <p>Kos pilihan di area Babarsari.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./assets/images/dapur2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Nikmati dapur serbaguna</h1>
                <p>Tersedia dapur serta alat memasak lainnya.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./assets/images/yadara.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Jelajahi Sekitar</h1>
                <p>Dekat dengan berbagai fasilitas publik seperti ATM, Mall, Kampus, dan Supermarket.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr class="featurette-divider">

        <div class="container">
            <!-- Featurettes -->
            <div class="row featurette animate-on-scroll" style="background-image:url('./assets/images/kamar2.jpeg');
                        background-size: cover; background-position: center; padding: 20px; border-radius: 8px:">
                <div class="col-md-7 offset-md-5" style="background-color: rgba(0, 0, 0, 0.6); padding: 10px 20px;
                            border-radius: 12px; color: white; display: flex; align-items: center;">
                    <div>
                        <h2 class="featurette-heading fw-normal">
                            Kost yang menjanjikan <strong>keamanan dan kenyamanan</strong>.
                        </h2>
                        <p class="lead">
                            Bekerja sama dengan <strong>Mamikos</strong>,
                            sehingga menjanjikan pelayanan yang terpercaya dan sistem yang terintegrasi.
                            Kos Puta OmahAgatha adalah pilihan yang tepat untuk kost bagi karyawan ataupun mahasiswa
                        </p>
                        <p class="lead">
                            Terdapat fitur-fitur yang menunjang kenyamanan seperti,
                            AC, Kamar mandi dalam, Air hangat, serta internet yang cepat
                        </p>
                    </div>
                </div>
            </div>
        </div>

            <hr class="featurette-divider">

            <div class="row featurette fade-in" style="background-image: url('./assets/images/lorong2.jpeg');
                        background-size: cover; background-position: center; padding: 20px; padding-top: 10; border-radius: 8px;">
                <div class="col-md-7" style="background-color: rgba(0, 0, 0, 0.6); padding: 20px; border-radius: 12px; color: white;">
                    <h2 class="featurette-heading fw-normal">
                        Your comfort and safety are our top priority, <strong>experience the genuine hospitality.</strong>.
                    </h2>

                    <p class="lead">
                    We promise you a place to live that is a guaranteed comfortable, safe and clean place to live with 
                    friendly services and most importantly quality guaranteed facilities.
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="jumbotron jumbotron-fluid" style="background-image: url('./assets/images/luar.jpeg'); background-size: cover; background-position: center; color: white;">
                <div class="container">
                    <h1 class="display-4">Kos Omah Agatha</h1>
                    <p class="lead">Tempat tinggal nyaman, strategis, dan penuh fasilitas lengkap!
                        Nikmati suasana tenang dengan akses mudah ke pusat kota, kampus, dan fasilitas umum.
                        Harga terjangkau, keamanan 24 jam, dan layanan terbaik untuk kenyamanan Anda.</p>
                    <hr class="my-4">
                    <p>Ayo, pesan sekarang dan rasakan kenyamanan seperti di rumah sendiri!</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
                </div>
            </div>


            <!-- Footer -->
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between
                align-items-center py-3 my-4 border-top">
            </div>
</x-layout>