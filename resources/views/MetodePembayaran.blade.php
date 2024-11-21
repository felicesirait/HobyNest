<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F8F9FA;
        }
        .navbar {
            background-color: #0A4650;
            color: #ffffff;
        }
        .navbar .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }
        .navbar .nav-link {
            color: #ffffff;
        }
        .navbar .nav-link:hover {
            color: #D3D3D3;
        }
        .sidebar {
            background-color: #F5F5F5;
            padding: 20px;
            height: calc(100vh - 56px); /* Substract navbar height */
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
            font-weight: bold;
        }
        .content {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .content h4 {
            font-weight: bold;
        }
        .order-summary {
            margin-top: 20px;
        }
        .order-summary .total-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: red;
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <img class="logo-size" src="img/logo.png" alt="Logo HobbyNest">
        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                </ul>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                    </li>
                    <div class="profile-dropdown">
                        <a href="#" onclick="toggleDropdown()"><i class="fas fa-user-circle fa-2x"></i></a>
                        <div id="dropdownMenu" class="dropdown-content">
                            
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <a class="active" href="#"><i class="fas fa-user"></i> Profile</a>
                <a href="#"><i class="fas fa-comments"></i> Forum</a>
                <a href="#"><i class="fas fa-store"></i> Hobby Marketplace</a>
                <a href="#"><i class="fas fa-question-circle"></i> Help Me</a>
            </div>
            <!-- Main Content -->
            <div class="col-md-10">
                <div class="content">
                    <h4>Alamat Pengiriman</h4>
                    <p>Alamat Pengiriman Pembeli. Bisa disertai Nama lengkap pembeli dan nomor telepon pembeli</p>

                    <h4>Pesan untuk Penjual</h4>
                    <p>Tinggalkan pesan (opsional)</p>

                    <div class="order-summary">
                        <h4>Total Pemesanan</h4>
                        <p class="total-price">Rp25.000,00</p>
                    </div>

                    <h4>Metode Pembayaran Manual</h4>
                    <p>
                        <strong>Transfer Bank:</strong> xxxnomorRekening (jenisBank)<br>
                        <strong>Dompet Digital:</strong> xxxnomorDompetDigital (jenisDompetDigital)
                    </p>
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

    <script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-GVNpC02/p2ZYtj+d5DBtxlWHGzMplX4LkRtkD5LJo7mqqw7+PpMzx8lhN4qA5FaB"></script>
</body>
</html>
