<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<div class="container">
    <div id="map" style="height: 500px; width: 100%; border-radius: 15px;"></div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVDXXrXe5D9zvovTsNHFFi9MlCCaF4Yds"></script>
    <script>
        function initMap() {
            // Koordinat lokasi
            var location = {lat: -7.770838398222869,  lng: 110.41401892236044}; // Ganti dengan koordinat yang diinginkan
            
            // Membuat peta
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });

            // Menambahkan marker
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Lokasi Kami!'
            });
        }

        // Memanggil fungsi initMap setelah halaman dimuat
        window.onload = initMap;
    </script>
</div>

<hr class="featurette-divider">

    <div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="./assets/images/jwalk2.jpg" class="card-img-top" alt="Jwalk" style="height: 200px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Jwalk Mall</h5>
            <p class="card-text">Tempat belanja populer dengan suasana modern dan fasilitas lengkap. Cocok untuk bersantai dan berbelanja.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="./assets/images/atma2.jpg" class="card-img-top" alt="Atma" style="height: 200px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Atma Jaya</h5>
            <p class="card-text">Universitas terkemuka dengan berbagai program studi unggulan dan fasilitas pembelajaran terbaik.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <img src="./assets/images/indomaret.jpeg" class="card-img-top" alt="Indomaret" style="height: 200px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Indomaret</h5>
            <p class="card-text">Minimarket dengan kebutuhan harian terlengkap dan pelayanan cepat.</p>
            </div>
        </div>
        </div>
    </div>
    </div>


    <hr class="featurette-divider">

</x-layout>