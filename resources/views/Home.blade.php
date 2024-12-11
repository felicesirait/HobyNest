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
            <div class="hidden md:flex items-baseline space-x-5 ml-10" id="nav-item">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/Home" class="rounded-md px-3 py-2 text-sm font-medium text-white no-underline" aria-current="page">Home</a>
              <a href="/api/community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
            </div>
          </div>

          <div class="flex items-center space-x-4">
            <!--Logo Bell bisa di klik-->
            <a href="#notifications" role="button" aria-label="Notifications" onclick="toggleNotifications()">
              <ion-icon name="notifications" class="text-white py-2" style="font-size: 2rem;"></ion-icon>
            </a>

            <!-- Notification Box -->
            <div id="notificationBox" class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg z-20">
              <div class="p-4">
                <p class="font-medium">Notifications</p>
                <ul class="mt-2">
                  <li class="border-b py-2">No new notifications</li>
                  <!-- Add more notifications here -->
                </ul>
              </div>
            </div>

            <!--Logo User -->
            <a href="/Profile" role="button" aria-label="User profile">
              <ion-icon name="person" class="text-white px-2 py-2 icon" style="font-size: 2rem;"></ion-icon>
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
    <a href="/api/community" class="btn btn-primary px-2 py-1 text-xs max-w-xs" style="background-color: #4379F2; border-color: #4379F2;">Join Community</a>
    
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
        <li class="nav-item font-medium"><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <li class="nav-item font-medium"><a href="#about-us" class="nav-link px-2 text-white">About</a></li>
        <li class="nav-item font-medium"><a href="/api/community" class="nav-link px-2 text-white">Community</a></li>
      </ul>

      <ul class="social_icon border-bottom flex justify-center space-x-4 pb-3 mb-3">
        <li><a href=""><ion-icon name="logo-twitter" class="text-white"></ion-icon></a></li>
        <li><a href="h"><ion-icon name="logo-instagram" class="text-white"></ion-icon></a></li>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const createCommunityButton = document.getElementById('create-community');

            createCommunityButton.addEventListener('click', function() {
                fetch('/api/links/create')
                    .then(response => response.json())
                    .then(data => {
                        const createCommunityHref = data.links.find(link => link.rel === 'create_community').href;
                        window.location.href = createCommunityHref;
                    })
                    .catch(error => console.error('Error fetching create link:', error));
            });
        });
    </script>
</body>

</html>