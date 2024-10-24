<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 5.3 CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

    <!-- Poppins dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./assets/css/poppins.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>{{ $title }}</title>

    <style>
        main {
            font-family: 'Poppins', sans-serif;
            background-image: url('./assets/images/cok.jpg'); /* Gambar lokal */
            background-size: cover; /* Mengatur gambar agar menutupi seluruh background */
            background-position: center; /* Memusatkan gambar di halaman */
            background-repeat: no-repeat; /* Agar gambar tidak diulang */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }

            
        }

        .fade-in {
            animation: fadeIn 2s ease-in;
        }

        
    </style>
    
    
</head>
<body class="h-full">
    <div class="min-h-full">
      
        <x-navbar></x-navbar>
        
            <x-header>{{ $title }}</x-header>

            <main>
            <div class="container pt-5">{{ $slot }}</div>
            </main>

        <x-footer></x-footer>
        
        <style>
            h1 {
                font-family: 'Poppins';
            }

        </style>
    </div>

    <!-- Bootstrap 5.3 JS -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Tambahkan sedikit delay untuk menghindari flicker
                        setTimeout(() => {
                            entry.target.classList.add('animate__animated', 'animate__slideInUp');
                        }, 500); // Delay 100ms, sesuaikan dengan kebutuhan
                    } else {
                        entry.target.classList.remove('animate__animated', 'animate__slideInUp');
                    }
                });
            });
    
            let elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
     
    
</body>
</html>