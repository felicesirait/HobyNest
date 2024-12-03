!DOCTYPE html>
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
    <title>HobbyNest</title>
</head>
<body>
    <!-- Header -->
    <header>
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
            <a href="Home" class="rounded-md px-3 py-2 text-sm font-medium text-white no-underline" aria-current="page">Home</a>
            <a href="/community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
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

    <div class="container mx-auto mt-8">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-white p-4 rounded-lg shadow-lg">
                <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
                    <i class="fas fa-user"></i> Profile
                </a>
                <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#" id="forum-link">
                    <i class="fas fa-comments"></i> Forum
                </a>
                <div id="forum-submenu" class="hidden ml-4">
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
                        <i class="fas fa-comment-dots"></i> Discussion
                    </a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
                        <i class="fas fa-store"></i> Hobby MarketPlace
                    </a>
                </div>
                <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded" href="#">
                    <i class="fas fa-question-circle"></i> Help Me
                </a>
            </div>

            <!-- Content -->
            <div class="w-3/4 ml-8">
                <h1 class="text-3xl font-bold mb-4">Find Your Fasion</h1>
                <p class="mb-4">Kamu yang ingin memulai jangan sampai kelewatan. Disini aku tampilin teknik  yang cakep untuk kalian yang ingin memulai kegiatan Positif lochhh...</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Teknik Dasar </h2>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.google.com/imgres?q=gambar%20kosong&imgurl=https%3A%2F%2Fc.pxhere.com%2Fphotos%2Fd7%2Fdc%2Fwhite_texture_paint_wallpaper_surface_blank_background_the_authentic-1371058.jpg!d&imgrefurl=https%3A%2F%2Fpxhere.com%2Fid%2Fphoto%2F1371058&docid=hEWX4BV-AZsGQM&tbnid=WDYho_L14X9rHM&vet=12ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA..i&w=1200&h=798&hcb=2&ved=2ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA" alt="Triple Crochet (TR)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.google.com/imgres?q=gambar%20kosong&imgurl=https%3A%2F%2Fc.pxhere.com%2Fphotos%2Fd7%2Fdc%2Fwhite_texture_paint_wallpaper_surface_blank_background_the_authentic-1371058.jpg!d&imgrefurl=https%3A%2F%2Fpxhere.com%2Fid%2Fphoto%2F1371058&docid=hEWX4BV-AZsGQM&tbnid=WDYho_L14X9rHM&vet=12ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA..i&w=1200&h=798&hcb=2&ved=2ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA" alt="Double Crochet (DC)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.google.com/imgres?q=gambar%20kosong&imgurl=https%3A%2F%2Fc.pxhere.com%2Fphotos%2Fd7%2Fdc%2Fwhite_texture_paint_wallpaper_surface_blank_background_the_authentic-1371058.jpg!d&imgrefurl=https%3A%2F%2Fpxhere.com%2Fid%2Fphoto%2F1371058&docid=hEWX4BV-AZsGQM&tbnid=WDYho_L14X9rHM&vet=12ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA..i&w=1200&h=798&hcb=2&ved=2ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA" alt="Half Double Crochet (Hdc)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.google.com/imgres?q=gambar%20kosong&imgurl=https%3A%2F%2Fc.pxhere.com%2Fphotos%2Fd7%2Fdc%2Fwhite_texture_paint_wallpaper_surface_blank_background_the_authentic-1371058.jpg!d&imgrefurl=https%3A%2F%2Fpxhere.com%2Fid%2Fphoto%2F1371058&docid=hEWX4BV-AZsGQM&tbnid=WDYho_L14X9rHM&vet=12ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA..i&w=1200&h=798&hcb=2&ved=2ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA" alt="Single Crochet (SC)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.google.com/imgres?q=gambar%20kosong&imgurl=https%3A%2F%2Fc.pxhere.com%2Fphotos%2Fd7%2Fdc%2Fwhite_texture_paint_wallpaper_surface_blank_background_the_authentic-1371058.jpg!d&imgrefurl=https%3A%2F%2Fpxhere.com%2Fid%2Fphoto%2F1371058&docid=hEWX4BV-AZsGQM&tbnid=WDYho_L14X9rHM&vet=12ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA..i&w=1200&h=798&hcb=2&ved=2ahUKEwim18WWtoaKAxVR4jgGHcsANQw4ChAzegQIQhAA" alt="Chain (Ch)"/>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Video Tutorial</h2>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.google.com/imgres?q=gambar%20tutorial&imgurl=https%3A%2F%2Ffredyrudiansyah.wordpress.com%2Fwp-content%2Fuploads%2F2017%2F10%2Ftutorial-windwos-10-2-320x202.png&imgrefurl=https%3A%2F%2Ffredyrudiansyah.wordpress.com%2F2017%2F10%2F18%2Ftutorial%2F&docid=Bh9JVuV_NDKfBM&tbnid=9aRDOO4P3HKF4M&vet=12ahUKEwjg25fMtoaKAxX94zgGHV3VDvYQM3oECHcQAA..i&w=320&h=202&hcb=2&ved=2ahUKEwjg25fMtoaKAxX94zgGHV3VDvYQM3oECHcQAA" alt="Crochet Tip"/>
                        <p class="mb-4">Dari video tutorial di atas, kamu bisa dapet banyak banget ilmu keren! Yuk, jangan cuma nonton aja, langsung pelajari biar skill kamu makin naik level dan bikin karya yang kece badai! 💥💫.</p>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">7 Comments</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                            <div class="bg-gray-200 p-4 rounded-lg w-full">
                                <p class="font-bold">Alice</p>
                                <p>Suka bangettt ❤️</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-full bg-red-600"></div>
                            <div class="bg-gray-200 p-4 rounded-lg w-full">
                                <p class="font-bold">Lorena</p>
                                <p>Highly informative. Thank you for posting</p>
                            </div>
                        </div>
                    </div>

                    <!-- Add Comment -->
                    <div class="mt-8">
                        <h2 class="text-2xl font-bold mb-4">Add Comment Here</h2>
                        <textarea class="w-full p-4 rounded-lg border border-gray-300" rows="4"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <ul class="flex justify-center space-x-4 mb-4">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            </ul>
            <p>Made in ❤️ HobbyNest@2024</p>
        </div>
    </footer>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        }

        document.getElementById('forum-link').addEventListener('click', function() {
            var submenu = document.getElementById('forum-submenu');
            submenu.classList.toggle('hidden');
        });

        // Close the dropdown if the user clicks outside
        window.onclick = function(event) {
            if (!event.target.matches('.fa-user-circle')) {
                const dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.remove('hidden');
                    }
                }
            }
        }
    </script>
</body>
</html>

