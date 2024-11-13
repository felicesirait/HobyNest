<!DOCTYPE html>
<html>
<head>
    <title>Marketplace</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F5F5F5;
        }
        .navbar {
            background-color: #0A4650;
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff;
        }
        .navbar-nav .nav-link, .profile-dropdown a {
            color: #ffffff;
        }
        .logo-size {
        width: 80px; 
        height: auto; 
        }
        .sidebar {
            background-color: #F5F5F5;
            padding: 20px;
            height: 100vh;
            border-right: 1px solid #ddd;
        }
        .sidebar a {
            display: block;
            color: black;
            padding: 10px 0;
            text-decoration: none;
            font-size: 16px;
        }
        .sidebar a.active {
            background-color: #D3D3D3;
            border-radius: 5px;
        }
        .submenu {
        display: none;
        padding-left: 20px;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }
        .category-tags {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .category-tags select {
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .product-item {
            text-align: center;
            background-color: #ffffff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .product-item img {
            width: 100%;
            border-radius: 10px;
        }
        .product-item h3 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .product-item p {
            font-size: 14px;
            color: #666;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .footer a {
            color: #666;
            margin: 0 10px;
            font-size: 20px;
        }
        .profile-dropdown {
            position: relative;
        }
        .profile-dropdown a {
            color: white;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 8px;
            width: 200px;
        }
        .dropdown-content p {
            font-weight: bold;
            margin: 0;
        }
        .dropdown-content small {
            color: gray;
        }
        .dropdown-content a {
            display: block;
            padding: 8px 0;
            text-decoration: none;
            color: black;
            font-size: 14px;
        }
        .dropdown-content a:hover {
            background-color: #f0f0f0;
        }
        .show {
            display: block;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <img class="logo-size" src="img/logo.png" alt="Logo HobbyNest">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search"/>
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                    </li>
                    <div class="profile-dropdown">
                        <a href="#" onclick="toggleDropdown()"><i class="fas fa-user-circle fa-2x"></i></a>
                        <div id="dropdownMenu" class="dropdown-content">
                            <p>Currently in</p>
                            <p><i class="fas fa-user"></i> Alice</p>
                            <small>alice@gmail.com</small>
                            <hr>
                            <a href="#">Setting</a>
                            <a href="#">Help Center</a>
                            <a href="#">Log Out</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <a class="active" href="#"><i class="fas fa-user"></i> Profile</a>
                <a href="#" id="forum-link"><i class="fas fa-comments"></i> Forum</a>
                <div id="forum-submenu" style="display: none;">
                    <a href="#"><i class="fas fa-comment-dots"></i> Discussion</a>
                    <a href="#"><i class="fas fa-store"></i> Hobby MarketPlace</a>
                </div>
                <a href="#"><i class="fas fa-question-circle"></i> Help Me</a>
            </div>
            <div class="col-md-10 content">
                <h1>Hobby MarketPlace</h1>
                <div class="search-bar">
                    <input type="text" class="form-control w-50" placeholder="Search">
                </div>
                <div class="category-tags">
                    <select>
                        <option>Category Tags</option>
                        <!-- Add categories here -->
                    </select>
                </div>
                <div class="product-grid">
                    <?php
                        // Simulasi data produk dalam PHP
                        $products = [
                            ["name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"],
                            ["name" => "Nama Produk", "price" => "Rp25.000,00", "image_url" => "https://via.placeholder.com/150"]
                        ];

                        // Looping untuk menampilkan produk
                        foreach ($products as $product) {
                            echo '<div class="product-item">';
                            echo '<img src="' . $product['image_url'] . '" alt="Product Image">';
                            echo '<h3>' . $product['name'] . '</h3>';
                            echo '<p>' . $product['price'] . '</p>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="footer">
                    <p>About Us</p>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('show');
        }

        document.getElementById('forum-link').addEventListener('click', function() {
            const submenu = document.getElementById('forum-submenu');
            submenu.style.display = submenu.style.display === 'none' || submenu.style.display === '' ? 'block' : 'none';
        });

        window.onclick = function(event) {
            if (!event.target.matches('.fa-user-circle')) {
                const dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
