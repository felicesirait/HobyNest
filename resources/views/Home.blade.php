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
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/Home" class="rounded-md px-3 py-2 text-sm font-medium text-white no-underline" aria-current="page">Home</a>
            <a href="/Community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
          </div>

          <form class="d-flex ml-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>

            <!--Logo Bell bisa  di klik-->
            <a href="#notifications" role="button" aria-label="Notifications">
              <ion-icon name="notifications" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
            </a>
            
            <!--Logo User -->
            <a href="/Profile" role="button" aria-label="User profile">
              <ion-icon name="person" class="text-white px-3 py-2 icon" style="font-size: 2rem;"></ion-icon>
            </a>
        
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
    
    <!-- HERO -->
<section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg-white">
  <div class="flex flex-col lg:flex-row items-center lg:items-stretch">
    <!-- Text Section -->
    <div class="lg:w-1/2 mb-6 lg:mb-0 flex items-center text-box">
      <div>
        <!-- Heading -->
        <h1 class="heading text-5xl font-bold tracking-tight text-black mb-4">
          <span id="hero-heading">Share</span> and <span id="hero-heading">Dive</span> Into The World of Your <span id="hero-heading">Hobbies</span>
        </h1>
        <!-- Text -->
        <p class="text-xl">
          Find excitement in our vibrant community. Join us to share your passion, create a harmonious world by building lasting relationships!
        </p>
      </div>
    </div>

    <!-- Image Section -->
    <div class="lg:w-1/2 flex justify-end">
      <img src="img/hero.png" class="w-full h-full object-cover" alt="hero picture" data-aos="fade-up" data-aos-delay="100">
    </div>
  </div>
  <!-- Button Join dan Create -->
  <div class="flex flex-col justify-start mt-6 space-y-2">
    <a href="/Community" class="btn btn-primary px-2 py-1 text-xs max-w-xs" style="background-color: #4379F2; border-color: #4379F2;">Join Community</a>
    
    <div class="flex w-full">
        <span class="text-gray-500 text-xs px-[150px]">or</span>
    </div>
    
    <a href="/create" class="btn btn-primary px-2 py-1 text-xs max-w-xs" style="background-color: #4379F2; border-color: #4379F2;">Create new One</a>
  </div>
</section>

<!-- ABOUT -->
<section id= "about-us" class="about bg-about">
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center lg:items-stretch">
      <!-- Image Section -->
      <div class="lg:w-1/2 flex justify-end">
        <img src="img/about-us.png" class="w-full h-full object-cover" alt="About Us Picture" data-aos="fade-up" data-aos-delay="100">
          </div>

          <div class="lg:w-1/2 mb-6 lg:mb-0 flex flex-col justify-center">
            <h1 class="heading text-4.5xl font-bold tracking-tight text-black mb-4 text-center">
              About Us
            </h1>

            <p class="text-lg indent-8 mb-4">
              At HobbyNest, we believe that hobbies bring joy, creativity, and fulfillment into our lives. 
              We are a diverse community where people of all ages and backgrounds come together to explore, share, and celebrate their passions. 
              Whether you're a seasoned enthusiast or just starting a new hobby, HobbyNest is the perfect place to connect with others who share your interests.
            </p>
            
            <p class="text-lg indent-8">
              Our platform offers a space for hobbyists to exchange ideas and learn new skills. 
              From arts and crafts to technology, gaming, music, and beyond, there’s a niche for everyone here at HobbyNest. 
              We aim to build a supportive and vibrant community that encourages personal growth and meaningful connections.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- FITUR -->
    <section class="features bg-white py-3 my-sm-2 my-md-4 my-lg-5">
      <div>
        <h1 class="heading text-4.5xl font-bold tracking-tight text-black text-center" style="margin-bottom: 34px;">Our Featured</h1>
      </div>
    
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-3 gy-sm-4 gy-xl-5 gx-4 gx-md-5 pb-xxl-4 mb-sm-2 mb-lg-0 mb-xl-2 mx-0">
        <div class="col">
          <div class="text-center px-xxl-4">
            <i class="d-inline-block mb-3 mb-md-4 fa-solid fa-users-line" style="color: #ffd43b;"></i>
            <h4 class="h5 my-2">Create Community</h3>
          </div>
        </div>

        <div class="col">
          <div class="text-center px-xxl-4">
            <i class="d-inline-block mb-3 mb-md-4 fa-solid fa-comments" style="color: #183153;"></i>
            <h4 class="h5 my-2">Community Discussion Forum</h3>
          </div>
        </div>

        <div class="col">
          <div class="text-center px-xxl-4">
            <i class="d-inline-block mb-3 mb-md-4 fa-solid fa-user-tie" style="color: #ffd43b;"></i>
            <h4 class="h5 my-2">Customizable Hobby Profiles</h3>
          </div>
        </div>

        <div class="col">
          <div class="text-center px-xxl-4">
            <i class="d-inline-block fa-solid fa-bag-shopping" style="color: #183153;"></i>
            <h4 class="h5 my-3">Hobby Marketplace</h3>
          </div>
        </div>

      </div>
  </section>

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
        <li><a href="h"><ion-icon name="logo-instagram" class="text-white"></ion-icon></a></li>
        <li><a href=""><ion-icon name="logo-facebook" class="text-white"></ion-icon></a></li>
      </ul>
    
      <p class="text-center text-white font-medium">Made in ❤️ HobbyNest@2024</p>
    </footer>

  </div>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>