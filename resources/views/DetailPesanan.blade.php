<!DOCTYPE html>
<html>
<head>
    <title>DetailPesanan</title>
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
        .product-details {
            display: flex;
            gap: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .product-details img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }
        .product-info {
            flex: 1;
        }
        .product-info h2 {
            font-size: 1.5em;
            font-weight: bold;
        }
        .product-info .price {
            color: #000;
            font-size: 1.2em;
            margin-top: 10px;
        }
        .product-info .color-options {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        .color-option {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .color-option.red { background-color: red; }
        .color-option.green { background-color: green; }
        .order-section {
            margin-top: 20px;
        }
        .order-section button {
            background-color: #d32f2f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
        }
        .description {
            margin-top: 20px;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer a {
            color: #666;
            margin: 0 10px;
            font-size: 20px;
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
                <div class="product-details">
                    <img src="https://via.placeholder.com/300x400" alt="Product Image">
                    <div class="product-info">
                        <h2>Nama Produk</h2>
                        <p class="price">Rp25.000,00</p>
                        <div>
                            <p>Color:</p>
                            <div class="color-options">
                                <div class="color-option red"></div>
                                <div class="color-option green"></div>
                            </div>
                        </div>
                        <div class="order-section">
                            <label>Quantity:</label>
                            <input type="number" value="1" min="1" class="form-control" style="width: 60px; display: inline-block;">
                            <button>Order Now</button>
                        </div>
                        <div class="description">
                            <p><strong>Description</strong></p>
                            <p>Rincian produk. Tempat untuk menambahkan rincian lain tentang produk Anda misal ukuran, bahan, instruksi perawatan dan pembersihan.</p>
                        </div>
                    </div>
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
</body>
</html>
