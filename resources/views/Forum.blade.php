<!DOCTYPE html>
<html lang="en">
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

    <title>HobbyNest - Hobby Disscussion</title>
</head>


<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header>
        <div class="min-h-full bg-white">
            <!-- NAVIGASI -->
            <nav class="bg-gray-800" x-data="{ isOpen: false }">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-22 items-center justify-between">
              
            
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="logo-size" src="{{ asset('img/logo.png') }}" alt="Logo HobbyNest">
                        </div>
                    </div>
                
                    <div class="hidden md:flex items-baseline space-x-5" id="nav-item">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/Home" class="rounded-md px-3 py-2 text-sm font-medium text-white no-underline" aria-current="page">Home</a>
                        <a href="/api/community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
                    </div>
        
                    <form class="d-flex ml-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
        
                    <!--Logo Bell bisa di klik-->
                    <a href="#notifications" role="button" aria-label="Notifications">
                        <ion-icon name="notifications" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
                    </a>
                
                    <!--Logo User -->
                    <a href="/Profile" role="button" aria-label="User profile">
                        <ion-icon name="person" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
                    </a>
        
        
                    <!-- Dropdown dengan tombol panah -->
                    <div class="relative" x-data="{ open: false }">
                        <!-- Tombol dengan ikon panah -->
                        <button @click="open = !open" class="flex items-center text-white focus:outline-none">
                            <ion-icon :class="open ? 'rotate-180' : 'rotate-0'" name="chevron-down-outline" class="transition-transform duration-200" style="font-size: 1.5rem;"></ion-icon>
                        </button>
            
                        <!-- Dropdown menu -->
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-md z-20">
                            <div class="p-3 border-b">
                                @if(Auth::check())
                                    <p class="font-medium">{{ Auth::user()->name }}</p>
                                    <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                                @endif
                            </div>
                            
                            <ul>
                                <li>
                                    <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Setting</a>
                                </li>
                                <li>
                                    <a href="/help" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Help Center</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        @csrf
                                        <button type="submit" class="w-full text-left">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white no-underline" aria-current="page">Home</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Sign In</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>
</header>

    <!-- Content -->
        <div class="container mx-auto mt-8">
        <!-- Main Content -->
        <main class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold mb-4 text-center">{{ $communities->name }}</h1>
            <div class="flex justify-center">
                <div class="border border-gray-300 rounded-lg p-2 inline-block">
                    <img src="{{ asset('storage/' . $communities->image) }}" alt="{{ $communities->name }}" class="w-1/2 h-auto rounded-lg mx-auto">
                </div>
            </div>
            <div class="border border-gray-300 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-700 mb-6 text-justify text-center">{{ $communities->description }}</p>
            </div>        
            <div class="flex flex-col items-center space-y-4 mb-6">
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <p class="mb-0"><strong>Members:</strong> 100 Subscribers</p>
                </div>
                <div class="mt-3 w-full flex justify-center">
                    <button class="btn btn-primary btn-custom w-1/2" onclick="window.location.href='{{ $communities->whatsapp_link }}'">Go to Forum</button>
                </div>
                <form action="/Marketplace" method="get" class="w-full mt-3 flex justify-center">
                    <input type="hidden" name="community_name" value="{{ $communities->name }}">
                    <button type="submit" class="btn btn-danger btn-custom w-1/2">To Marketplace</button>
                </form>
            </div>
    
        
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <div class="social-icons flex justify-center space-x-6 mb-2">
            <a href="#" class="text-white text-2xl hover:text-gray-400">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white text-2xl hover:text-gray-400">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white text-2xl hover:text-gray-400">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <hr class="border-gray-600 mb-2">
        <p class="text-sm">Made in ❤️ HobbyNest@2024</p>
    </div>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>