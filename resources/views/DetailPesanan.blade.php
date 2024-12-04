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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                    <a href="/community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
                </div>

                <!-- Ikon dan Dropdown -->
                <div class="flex items-center space-x-4">
                <a href="#notifications" role="button" aria-label="Notifications">
                    <ion-icon name="notifications" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
                </a>

                <a href="/Profile" role="button" aria-label="User profile">
                    <ion-icon name="person" class="text-white px-3 py-2 icon" style="font-size: 2rem;"></ion-icon>
                </a>

                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center text-white focus:outline-none">
                        <ion-icon :class="open ? 'rotate-180' : 'rotate-0'" name="chevron-down-outline" class="transition-transform duration-200" style="font-size: 1.5rem;"></ion-icon>
                    </button>

                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-md z-20">
                        <div class="p-3 border-b">
                            <p class="font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                        </div>
                        <ul>
                            <li><a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Setting</a></li>
                            <li><a href="/help" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Help Center</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    @csrf
                                    <button type="submit" class="w-full text-left">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">Open main menu</span>
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" viewBox="0 0 24 24">
                            <path stroke="currentColor" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" viewBox="0 0 24 24">
                            <path stroke="currentColor" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- BODY KONTEN -->
    <main class="flex-1 max-w-7xl mx-auto flex mt-5 px-6">    
        <!-- Sidebar -->
    <div class="w-1/4 bg-white p-4 rounded-lg shadow-lg">
        <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
            <i class="fas fa-user"></i> Profile
            </a>
          <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#" id="forum-link">
        <i class="fas fa-comment-dots"></i> Forum
        </a>
        <div id="forum-submenu" class="ml-4">
            <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
                <i></i> Discussion
            </a>
            <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
                <i ></i> Hobby Marketplace
            </a>
        </div>
        <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
            <i class="fas fa-question-circle"></i> Help Me
        </a>
    </div>

        
<!-- Main Content -->
<div class="w-3/4 p-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 border rounded-lg">  

    <!-- Gambar Produk -->
           <div class="flex justify-center">
                <img src="https://via.placeholder.com/300x400" alt="Product Image" class="w-full max-w-sm rounded">
            </div>

        <!-- Informasi Produk -->
        <div>
            <h2 class="text-2xl font-semibold mb-2">Nama Produk</h2>
            <p class="text-green-600 font-bold text-xl mb-4">Rp25.000</p>
            <p class="text-gray-600 mb-6">Deskripsi singkat tentang produk ini. Rincian tambahan tentang produk seperti ukuran, bahan, atau instruksi perawatan.</p>
            
            <!-- Quantity dan Tombol Order -->
            <div class="flex items-center gap-4">
                <label class="block font-medium">Quantity:</label>
                <input type="number" value="1" min="1" class="form-control w-16 border border-gray-300 rounded px-2 py-1">
            </div>
            <button class="bg-blue-600 text-white px-6 py-2 mt-4 rounded hover:bg-blue-700">Order Now</button>
        </div>
    </div>
</main>




    <!-- FOOTER -->
    <footer class="py-3 my-4 bg-gray-800">
        <ul class="nav justify-content-center mb-3">
            <li class="nav-item font-medium"><a href="#" class="nav-link px-2 text-white">Home</a></li>
            <li class="nav-item font-medium"><a href="#about-us" class="nav-link px-2 text-white">About</a></li>
            <li class="nav-item font-medium"><a href="/Community" class="nav-link px-2 text-white">Community</a></li>
            <li class="nav-item font-medium"><a href="#" class="nav-link px-2 text-white">Help Center</a></li>
        </ul>

        <ul class="social_icon border-bottom flex justify-center space-x-4 pb-3 mb-3">
            <li><a href=""><ion-icon name="logo-twitter" class="text-white"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-instagram" class="text-white"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-facebook" class="text-white"></ion-icon></a></li>
        </ul>
        <p class="text-center text-white font-medium">Made in ❤ HobbyNest@2024</p>
    </footer>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>