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

<body class="bg-white text-white">
  <header class="bg-gray-800">
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
                        <p class="font-medium text-black">{{ Auth::user()->name }}</p>
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
  </header>


    <!-- MAIN -->
    <main class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4 text-black">Create New Product</h2>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-lg text-black" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price (Rp)</label>
                <input type="number" name="price" id="price" class="w-full p-2 border border-gray-300 rounded-lg text-black" min="100" step="100" placeholder="Rp100" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Product Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-lg text-black" accept=".jpg, .jpeg, .png" required onchange="updateFileName(this)">
                <span id="fileName" class="ml-3 text-gray-700">No file chosen</span>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Enter Description Product</label>
                <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded-lg bg-white text-black" rows="6" required></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary px-4 py-2" style="background-color: #4379F2; border-color: #4379F2;">Add Product</button>
            </div>
        </form>
    </main>

    <!-- FOOTER -->
    <footer class="py-3 my-4 bg-gray-800 footer-no-margin">
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

    <script>
        function validatePrice() {
            const priceInput = document.getElementById('price');
            const priceValue = parseInt(priceInput.value, 10);

            if (isNaN(priceValue) || priceValue < 100) {
                alert('Please enter a valid price starting from Rp100.');
                return false;
            }

            return true;
        }

        function updateFileName(input) {
            const fileName = input.files.length > 0 ? input.files[0].name : 'No file chosen';
            document.getElementById('fileName').textContent = fileName;
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>