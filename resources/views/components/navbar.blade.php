<!-- resources/views/components/navbar.blade.php -->
<nav class="navbar navbar-expand-sm bg-dark border-bottom border-body fixed-top" data-bs-theme="dark">
    <div class="container-fluid">

        <!-- Navbar Toggler (untuk layar kecil) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Memanggil Komponen nav-link -->
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/location" :active="request()->is('location')">Location</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </ul>
        </div>
    </div>
</nav>
