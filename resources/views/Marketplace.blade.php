<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TAILWIND -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

    <title>HobbyNest</title>
</head>

<body class="h-full">
<div class="min-h-full bg-white">
    <!-- NAVIGASI -->
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-22 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="logo-size" src="img/logo.png" alt="Logo HobbyNest">
                    </div>
                </div>

                <div class="hidden md:flex items-baseline space-x-5" id="nav-item">
                    <a href="/Home" class="rounded-md px-3 py-2 text-sm font-medium text-white no-underline">Home</a>
                    <a href="/api/community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
                </div>

                <form class="d-flex ml-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>

                <a href="#notifications" role="button" aria-label="Notifications">
                    <ion-icon name="notifications" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
                </a>

                <a href="/Profile" role="button" aria-label="User profile">
                    <ion-icon name="person" class="text-white px-3 py-2 icon" style="font-size: 2rem;"></ion-icon>
                </a>

            <!-- Dropdown dengan tombol panah -->
            <div class="relative" x-data="{ open: false }">
                <!-- Tombol dengan ikon panah -->
                <button @click="open = !open" class="flex items-center text-white focus:outline-none">
                  <ion-icon :class="open ? 'rotate-180' : 'rotate-0'" name="chevron-down-outline" class="transition-transform duration-200" style="font-size: 1.5rem;"></ion-icon>
                </button>
  
                <!-- Dropdown menu -->
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-md z-20">
                  <div class="p-3 pb-0 border-b">
                    <p class="font-medium">{{ Auth::user()->name }}</p>
                    <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                  </div>
  
                  <div class="m-3">
                    <form action="{{ route('logout') }}" method="POST" class="block text-sm text-gray-700 hover:bg-gray-100">
                      @csrf
                      <button type="submit" class="w-full text-left">Log Out</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </nav>

    <!-- BODY KONTEN -->
    <main class="flex-1 max-w-7xl mx-auto flex mt-5 px-6">    
        <!-- Content area for Hobby Marketplace -->
        <div class="w-3/4 p-6 mx-auto">
            <!-- Judul Hobby Marketplace di atas kolom pencarian -->
            <div class="flex flex-col items-center justify-center text-center my-6">
                <!-- Title Section -->
                <h2 class="text-4xl font-extrabold text-center mb-4 text-gray-800">{{ $community->name }}</h2>
                <!-- Search Bar Section -->
                <div class="search-bar w-full md:w-1/2">
                    <input 
                        type="text" 
                        class="form-control w-full p-3 border border-gray-300 rounded-lg" 
                        placeholder="Search">
                </div>
            </div>

            <div class="flex-1 p-4 bg-gray-50 rounded-lg shadow-lg mx-auto">
                <div class="grid grid-cols-3 gap-4 mt-6">
                    <?php
                        $products = [
                            ["id" => 1, "name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["id" => 2, "name" => "Nama Produk", "price" => "Rp30.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["id" => 3, "name" => "Nama Produk", "price" => "Rp35.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["id" => 4, "name" => "Nama Produk", "price" => "Rp40.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["id" => 5, "name" => "Nama Produk", "price" => "Rp45.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["id" => 6, "name" => "Nama Produk", "price" => "Rp50.000,00", "image_url" => "https://via.placeholder.com/150"]
                        ];
                        foreach ($products as $product) {
                            echo '<a href="/DetailPesanan=' . $product['id'] . '" class="product-item hover:shadow-lg transition-shadow duration-300">';
                            echo '<div class="p-4 border border-gray-200 rounded-lg">';
                            echo '<img src="' . $product['image_url'] . '" alt="DetailPesanan" class="mb-2 rounded-md mx-auto">';
                            echo '<h3 class="font-bold text-lg text-center">' . $product['name'] . '</h3>';
                            echo '<p class="text-sm text-gray-600 text-center">' . $product['price'] . '</p>';
                            echo '</div>';
                            echo '</a>';
                        }
                    ?>
                </div>
                <div class="flex flex-col justify-start items-center mt-8 space-y-2">
                    <a href="/Add" class="btn btn-primary px-2 py-1 text-xs max-w-xs" style="background-color: #4379F2; border-color: #4379F2;">Create New Product</a>
                </div>
        </div>
    </main>
    

    <!-- FOOTER -->
    <footer class="py-3 my-4 bg-gray-800">
        <ul class="nav justify-content-center mb-3">
            <li class="nav-item font-medium"><a href="/" class="nav-link px-2 text-white">Home</a></li>
            <li class="nav-item font-medium"><a href="/" class="nav-link px-2 text-white">About</a></li>
            <li class="nav-item font-medium"><a href="/api/community" class="nav-link px-2 text-white">Community</a></li>
        </ul>

        <ul class="social_icon border-bottom flex justify-center space-x-4 pb-3 mb-3">
            <li><a href=""><ion-icon name="logo-twitter" class="text-white"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-instagram" class="text-white"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-facebook" class="text-white"></ion-icon></a></li>
        </ul>

        <p class="text-center text-white font-medium">
            <ion-icon name="call" class="text-white"></ion-icon> +62 896 0362 7661
        </p>

        <p class="text-center text-white font-medium">Made in ❤️ HobbyNest@2024</p>
    </footer>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>