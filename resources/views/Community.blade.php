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
    <title>HobbyNest</title>
</head>

<body>
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

            <form class="d-flex ml-auto" role="search" action="" method="GET">
              <input class="form-control me-2" type="search" name="keyword" placeholder="keyword" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>


            <!--Logo Bell bisa di klik-->
            <a href="#notifications" role="button" aria-label="Notifications">
              <ion-icon name="notifications" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
            </a>
        
            <!--Logo User -->
            <a href="/Profile" role="button" aria-label="User profile">
              <ion-icon name="person" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
            </a>
          </div>
        </div>
      </nav>
  </header>


    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold text-center mb-8">Find Your Passion</h1>
      @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
          {{ session('success') }}
        </div>
      @endif
      <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($communities as $communities)
          <a href="{{ route('community.forum', $communities->id) }}" class="bg-white p-6 rounded-lg shadow-lg block no-underline">
            <h2 class="text-xl font-bold mb-2">{{ $communities->name }}</h2>
            @if($communities->image)
              <img src="{{ asset('storage/' . $communities->image) }}" alt="{{ $communities->name }}" class="w-full h-48 object-cover rounded-lg mb-4">
            @endif
            <p class="text-gray-500">Tags: {{ $communities->tags }}</p>
          </a>
        @endforeach
      </section>
    </main>
    
    <!-- FOOTER -->
    <footer class="py-3 my-4 bg-gray-800 mb-0">
      <ul class="nav justify-content-center mb-3">
        <li class="nav-item font-medium"><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <li class="nav-item font-medium"><a href="/" class="nav-link px-2 text-white">About</a></li>
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
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
</body>
</html>