<!DOCTYPE html>
<html>
 <head>
  <title>
   Knitting Patterns and Design
  </title>
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
        .navbar-nav .nav-link {
            color: #ffffff;
        }
        .profile-header {
            text-align: center;
            margin-top: 50px;
        }
        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #004d4d;
        }
        .profile-header h1 {
            font-size: 36px;
            font-weight: bold;
            margin-top: 20px;
        }
        .profile-header .tags {
            color: #28a745;
            cursor: pointer;
        }
        .profile-header .tags:hover {
            text-decoration: underline;
        }
        .profile-stats {
            text-align: center;
            margin-top: 20px;
        }
        .profile-stats .btn {
            margin: 10px;
        }
                .navbar {
            background-color: #004e58;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .nav-links {
            display: flex;
            align-items: center;
        }
        .navbar .nav-links a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
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
        .navbar .search-box input {
            padding: 5px;
            border: none;
            border-radius: 5px;
        }
        .navbar .nav-icons {
            display: flex;
            align-items: center;
        }
        .navbar .nav-icons a {
            margin: 0 10px;
            color: white;
            font-size: 18px;
        }

        /* Tag Dropdown Styles */
        .tags-dropdown {
            text-align: center;
            margin-top: 10px;
            display: none; /* Initially hidden */
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
            width: 100%;
            max-width: 300px;
            margin: 10px auto;
            border-radius: 10px;
            position: absolute;
            top: 120px; /* Adjust this according to your layout */
            left: 0;
            right: 0;
        }
        .tags-dropdown.show {
            display: block; /* Show when the class 'show' is toggled */
        }
        .tags-dropdown ul {
            list-style: none;
            padding: 0;
        }
        .tags-dropdown ul li {
            margin: 5px 0;
        }
        .tags-dropdown ul li a {
            text-decoration: none;
            color: #000000;
        }
        .tags-dropdown ul li a:hover {
            text-decoration: underline;
        }
        .sidebar {
            background-color: #F5F5F5;
            padding: 20px;
            height: 100vh;
        }
        .sidebar a {
            display: block;
            color: black;
            padding: 10px 0;
            text-decoration: none;
        }
        /* .sidebar a.active {
            background-color: #D3D3D3;
            border-radius: 5px;
        } */
        .content {
            padding: 20px;
        }
        .content h1 {
            font-size: 2em;
            font-weight: bold;
        }
        .content p {
            font-size: 1.2em;
        }
        .content .row img {
            width: 100%;
            border-radius: 10px;
        }
        .comments {
            margin-top: 20px;
        }
        .comments h2 {
            font-size: 1.5em;
            font-weight: bold;
        }
        .comment {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .comment .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #D3D3D3;
            margin-right: 10px;
        }
        .comment .text {
            background-color: #E8E8E8;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
        }
        .comment .text p {
            margin: 0;
        }
        .comment .text .name {
            font-weight: bold;
        }
        .comment .text .message {
            margin-top: 5px;
        }
        .add-comment {
            margin-top: 20px;
        }
        .add-comment textarea {
            width: 100%;
            height: 100px;
            border-radius: 10px;
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow-y: scroll;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer a {
            margin: 0 10px;
            color: black;
            text-decoration: none;
        }
  </style>
 </head>
 <body>
  <!-- <nav class="navbar navbar-expand-lg">
   <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <img alt="HOBBYNEST Logo" height="30" src="https://storage.googleapis.com/a1aa/image/TKJy9p09C1J4Ntg1vSCsanWJXYr7epDlegcavIieasX1CTLnA.jpg" style="margin-right: 10px;" width="30"/>
     HOBBYNEST
    </a>
    <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
       <a class="nav-link" href="#">
        Home
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Community
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        <i class="fas fa-search">
        </i>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        <i class="fas fa-bell">
        </i>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        <i class="fas fa-user-circle">
        </i>
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav> -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img alt="HOBYNEST logo" height="50" src="img/logo.png" width="100"/>
        </a>
        <button class="navbar-toggler" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
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
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-danger">1</span>
                    </a>
                </li>
                <div class="profile-dropdown">
            <a href="#" onclick="toggleDropdown()">
                <i class="fas fa-user-circle fa-2x"></i>
            </a>
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
        <script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdownMenu');
        dropdown.classList.toggle('show');
    }

    // Close the dropdown if the user clicks outside
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
            </ul>
        </div>
    </div>
</nav>

  <div class="container-fluid">
   <div class="row">
    <div class="col-md-2 sidebar">
     <a class="active" href="#">
      <i class="fas fa-user">
      </i>
      Profile
     </a>
     <a href="#" id="forum-link">
      <i class="fas fa-comments">
      </i>
      Forum
     </a>
     <div id="forum-submenu" style="display: none;">
      <a class="active" href="#">
       <i class="fas fa-comment-dots">
       </i>
       Discussion
      </a>
      <a href="#">
       <i class="fas fa-store">
       </i>
       Hobby MarketPlace
      </a>
     </div>
     <a href="#">
      <i class="fas fa-question-circle">
      </i>
      Help Me
     </a>
    </div>
    <div class="col-md-10 content">
     <h1>
      Knitting Patterns and Design
     </h1>
     <p>
      Kamu yang ingin memulai rajut harus mengetahui teknik dasar dari merajut. Disini aku tampilin teknik rajut yang cakep untuk kalian yang ingin memulai kegiatan merajut lochhh...
     </p>
     <div class="row">
      <div class="col-md-6">
       <h2>
        Teknik Dasar Rajut
       </h2>
       <img alt="Triple Crochet (TR)" height="200" src="https://storage.googleapis.com/a1aa/image/FzAbNPmWeVWfREeJepLUu3zP6lnu6hBv7BaoSb5LoVEuslWOB.jpg" width="300"/>
       <img alt="Double Crochet (DC)" height="200" src="https://storage.googleapis.com/a1aa/image/3eyr5WHeugjjJEUlShAneuniinEdGSUbEImDfoRYXj1rslWOB.jpg" width="300"/>
       <img alt="Half Double Crochet (Hdc)" height="200" src="https://storage.googleapis.com/a1aa/image/G9mse89FTkyfFUSgvOS31bfPVTAS1MW0d82ftP9XRlfHZLtcC.jpg" width="300"/>
       <img alt="Single Crochet (SC)" height="200" src="https://storage.googleapis.com/a1aa/image/w2fVdj2eqklUME4iVwnfWB8v5vRA56vEwMHosM86zz5P2SLnA.jpg" width="300"/>
       <img alt="Chain (Ch)" height="200" src="https://storage.googleapis.com/a1aa/image/0Z3tQs6YyGaMMJ4i8erw1N3uWC8wv8rHozZQaLqH71lit0yJA.jpg" width="300"/>
      </div>
      <div class="col-md-6">
       <h2>
        Video Tutorial
       </h2>
       <img alt="Crochet Tip" height="200" src="https://storage.googleapis.com/a1aa/image/UArbteyMV302XSdeaQVEwTMf9pNo2eGddkbuBTCBkK1QslWOB.jpg" width="300"/>
       <p>
        Dari video tutorial diatas kamu bisa belajar cara melakukan teknik dasar untuk merajut. Yokk pelajari agar kamu mudah dalam melakukan rajut dan membuat karya yang bagusss ...
       </p>
      </div>
     </div>
     <div class="comments">
      <h2>
       7 Comments
      </h2>
      <div class="comment">
       <div class="avatar">
       </div>
       <div class="text">
        <p class="name">
         Alice
        </p>
        <p class="message">
         Suka bangettt ❤️ ada ga pola untuk sweter ukuran dewasa?
        </p>
       </div>
      </div>
      <div class="comment">
       <div class="avatar" style="background-color: #B22222;">
       </div>
       <div class="text">
        <p class="name">
         Lorena
        </p>
        <p class="message">
         Highly informative. Thank you for posting
        </p>
       </div>
      </div>
     </div>
     <div class="add-comment">
      <h2>
       Add Comment Here
      </h2>
      <textarea></textarea>
     </div>
     <div class="footer">
      <a href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a href="#">
       <i class="fab fa-facebook">
       </i>
      </a>
     </div>
    </div>
   </div>
  </div>
  <script>
        document.getElementById('forum-link').addEventListener('click', function() {
            var submenu = document.getElementById('forum-submenu');
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
        });
    </script>