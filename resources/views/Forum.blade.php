<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knitting Patterns and Design</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-teal-700 p-4 flex justify-between items-center">
        <a class="text-white text-2xl font-bold" href="#">
            <img alt="HOBYNEST logo" class="inline-block h-8 w-8 mr-2" src="img/logo.png"/> HOBBYNEST
        </a>
        <div class="flex items-center space-x-4">
            <a class="text-white hover:text-gray-300" href="#">Home</a>
            <a class="text-white hover:text-gray-300" href="#">Community</a>
            <form class="relative">
                <input class="rounded-full px-4 py-2" placeholder="Search" type="search"/>
                <button class="absolute right-0 top-0 mt-2 mr-4 text-gray-500" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <a class="text-white hover:text-gray-300 relative" href="#">
                <i class="fas fa-bell"></i>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
            </a>
            <div class="relative">
                <a class="text-white hover:text-gray-300" href="#" onclick="toggleDropdown()">
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
                <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-20">
                    <div class="p-3 border-b">
                        @if(Auth::check())
                            <p class="font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                        @else
                            <p class="font-medium">Guest</p>
                        @endif
                    </div>
                    <ul>
                        <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Setting</a></li>
                        <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Help Center</a></li>
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
                <h1 class="text-3xl font-bold mb-4">Knitting Patterns and Design</h1>
                <p class="mb-4">Kamu yang ingin memulai rajut harus mengetahui teknik dasar dari merajut. Disini aku tampilin teknik rajut yang cakep untuk kalian yang ingin memulai kegiatan merajut lochhh...</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Teknik Dasar Rajut</h2>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://storage.googleapis.com/a1aa/image/FzAbNPmWeVWfREeJepLUu3zP6lnu6hBv7BaoSb5LoVEuslWOB.jpg" alt="Triple Crochet (TR)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://storage.googleapis.com/a1aa/image/3eyr5WHeugjjJEUlShAneuniinEdGSUbEImDfoRYXj1rslWOB.jpg" alt="Double Crochet (DC)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://storage.googleapis.com/a1aa/image/G9mse89FTkyfFUSgvOS31bfPVTAS1MW0d82ftP9XRlfHZLtcC.jpg" alt="Half Double Crochet (Hdc)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://storage.googleapis.com/a1aa/image/w2fVdj2eqklUME4iVwnfWB8v5vRA56vEwMHosM86zz5P2SLnA.jpg" alt="Single Crochet (SC)"/>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://storage.googleapis.com/a1aa/image/0Z3tQs6YyGaMMJ4i8erw1N3uWC8wv8rHozZQaLqH71lit0yJA.jpg" alt="Chain (Ch)"/>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Video Tutorial</h2>
                        <img class="w-full h-48 object-cover rounded-lg mb-4" src="https://storage.googleapis.com/a1aa/image/UArbteyMV302XSdeaQVEwTMf9pNo2eGddkbuBTCBkK1QslWOB.jpg" alt="Crochet Tip"/>
                        <p class="mb-4">Dari video tutorial diatas kamu bisa belajar cara melakukan teknik dasar untuk merajut. Yokk pelajari agar kamu mudah dalam melakukan rajut dan membuat karya yang bagusss ...</p>
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
                                <p>Suka bangettt ❤️ ada ga pola untuk sweter ukuran dewasa?</p>
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