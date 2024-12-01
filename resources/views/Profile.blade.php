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

    <title>Profile Page</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    
    <style>
        .profile-header {
            text-align: center;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #1f2937;
        }
        .profile-header h1 {
            font-size: 36px;
            font-weight: bold;
            margin-top: 20px;
        }
        .profile-header .tags {
            color: #28a745;
            cursor: pointer;
        }
        .profile-header .tags:hover {
            text-decoration: underline;
        }
        .profile-stats {
            text-align: center;
            margin-top: 20px;
        }
        .profile-stats .btn {
            margin: 10px;
        }

        .show {
            display: block;
        }

        /* Tag Dropdown Styles */
        .tags-dropdown {
            text-align: center;
            margin-top: 10px;
            display: none; /* Initially hidden */
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
            width: 100%;
            max-width: 300px;
            margin: 10px auto;
            border-radius: 10px;
            position: absolute;
            top: 120px; /* Adjust this according to your layout */
            left: 0;
            right: 0;
        }
        .tags-dropdown.show {
            display: block; /* Show when the class 'show' is toggled */
        }
        .tags-dropdown ul {
            list-style: none;
            padding: 0;
        }
        .tags-dropdown ul li {
            margin: 5px 0;
        }
        .tags-dropdown ul li a {
            text-decoration: none;
            color: #000000;
        }
        .tags-dropdown ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive menu for mobile */
        .mobile-menu {
            display: none;
            flex-direction: column;
            background-color: #1f2937;
            position: absolute;
            top: 60px;
            width: 100%;
            left: 0;
        }
        .mobile-menu a {
            color: #ffffff;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-bottom: 1px solid #1f2937;
        }
        .mobile-menu a:hover {
            background-color: #1f2937;
        }
        .mobile-menu.show {
            display: flex;
        }

        /* Make tags and menu responsive */
        @media (max-width: 768px) {
            .navbar-nav {
                display: none; /* Hide navbar links on mobile */
            }
            .navbar-nav.mobile {
                display: block;
            }
            .navbar-toggler {
                display: block;
                background-color: #1f2937;
                color: #ffffff;
            }
        }

        .content {
            text-align: center;
            margin-top: 50px;
        }
        .content .nav-tabs {
            justify-content: center;
        }
        .content .tab-content {
            margin-top: 20px;
        }
        .content .create-post-btn {
            margin-top: 20px;
        }
    </style>
</head>


<body>
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
            <a href="#logo" role="button" aria-label="User profile">
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
                    <p class="font-medium">{{ Auth::user()->name }}</p>
                    <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
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
            
            <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen"
            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }"
                class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }"
                class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
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


    <!-- PROFILE  -->
    <div class="profile-header">
        {{-- <img alt="Profile picture of user" height="150" src="https://storage.googleapis.com/a1aa/image/RUYIG2tPn4YDNlf2OBqdEYAphwGCkRGm0AjERY4sUS7LjiyJA.jpg" width="150"/>
        <h1>Alice</h1> --}}

        <img alt="Profile picture of user" height="150" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'https://via.placeholder.com/150' }}" width="150"/>
        <h1>{{ Auth::user()->name }}</h1>
        
        <div class="tags" onclick="toggleTags()">Tags</div>
        <div class="tags-dropdown" id="tagsDropdown">
            <ul>
                <li><a href="#"><i class="fas fa-tag"></i> Sport</a></li>
                <li><a href="#"><i class="fas fa-tag"></i> Travel</a></li>
                <li><a href="#"><i class="fas fa-tag"></i> Art & Music</a></li>
                <li><a href="#"><i class="fas fa-tag"></i> Technology</a></li>
            </ul>
        </div>
    </div>

        <div class="profile-stats">
            <span>0 post</span>  <span>0 followers</span>  <span>0 following</span>
            <div>
                <button class="btn btn-primary">SHARE</button>
            {{-- <button href="/EditProfile" class="btn btn-primary">EDIT PROFILE</button> --}}
            {{-- <a href="/EditProfile" class="btn btn-primary">EDIT PROFILE</a> --}}
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">EDIT PROFILE</a>
        </div>
    </div>
</div>

    <div class="content">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button aria-controls="my-post" aria-selected="true" class="nav-link active" data-bs-target="#my-post" data-bs-toggle="tab" id="my-post-tab" role="tab" type="button">
                    <i class="fas fa-th-large"></i> My Post
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button aria-controls="saved" aria-selected="false" class="nav-link" data-bs-target="#saved" data-bs-toggle="tab" id="saved-tab" role="tab" type="button">
                    <i class="fas fa-bookmark"></i> Saved
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div aria-labelledby="my-post-tab" class="tab-pane fade show active" id="my-post" role="tabpanel">
                <p>Nothing to show...yet! Post you create will live here.</p>
            </div>
            <div aria-labelledby="saved-tab" class="tab-pane fade" id="saved" role="tabpanel">
                <!-- Saved content goes here -->
            </div>
        </div>
        <button class="btn btn-primary create-post-btn">CREATE POST</button>
    </div>
</div>

<!-- SCRIPT UNTUK TAGS -->
<script crossorigin="anonymous" integrity="sha384-oBqDVmMz4fnFO9gybBogGzA6Yk4O9COw1L8/kZTQ5mF0EGp7FUw6p6C0w5z6p2gF" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-pprn3073KE6tl6/5oAlt5A6arUpq1T9/ScQsAP7hUibX39j6WrCAf5gqZ9CWNH3+" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script>
    // function toggleTags() {
    //     const tagsDropdown = document.getElementById('tagsDropdown');
    //     tagsDropdown.classList.toggle('show'); // Toggles visibility by adding/removing the 'show' class
    // }

    function toggleTags() {
            var tagsDropdown = document.getElementById('tagsDropdown');
            if (tagsDropdown.style.display === 'none') {
                tagsDropdown.style.display = 'block';
            } else {
                tagsDropdown.style.display = 'none';
            }
        }

    function toggleMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('show'); // Toggles visibility by adding/removing the 'show' class
    }
</script>

<!-- IONICONS -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
