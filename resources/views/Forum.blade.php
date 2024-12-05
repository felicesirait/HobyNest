<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <title>HobbyNest - Hobby Disscussion</title>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-center items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="img/logo.png" alt="HobbyNest Logo" class="h-10">
                <a href="Home" class="text-lg font-semibold hover:text-gray-300">Home</a>
                <a href="/community" class="text-lg hover:text-gray-300">Community</a>
            </div>
            <div class="flex items-center space-x-4">
                <form class="relative">
                    <input type="text" placeholder="Search" class="rounded-full px-4 py-2 text-gray-700">
                </form>
                <a href="#notifications" aria-label="Notifications">
                    <i class="fa-solid fa-bell text-xl"></i>
                </a>
                <a href="/profile" aria-label="User Profile">
                    <i class="fa-solid fa-user text-xl"></i>
                </a>
            </div>
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
        <p class="text-sm">Made with ❤ HobbyNest &copy;2024</p>
    </div>
</footer>

</body>
</html>