/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #003366;
    padding: 10px 20px;
    color: white;
}

header .logo img {
    width: 120px;
}

header nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

header nav ul li a {
    color: white;
    text-decoration: none;
}

header .search-bar input {
    padding: 5px;
    border-radius: 5px;
    border: none;
}

/* Sidebar Styles */
.sidebar {
    background-color: #eaeaea;
    padding: 20px;
    width: 200px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li a {
    text-decoration: none;
    display: block;
    padding: 10px;
    color: #003366;
    margin-bottom: 5px;
    background-color: white;
    border-radius: 5px;
    text-align: center;
}

.sidebar ul li a:hover {
    background-color: #dcdcdc;
}

/* Content Styles */
.content {
    margin-left: 220px;
    padding: 20px;
}

.forum-header {
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.forum-header img {
    width: 150px;
    border-radius: 50%;
}

.forum-header h1 {
    font-size: 24px;
    margin: 10px 0;
}

.forum-header p {
    font-size: 16px;
    color: #666;
}

.forum-header .stats {
    margin: 10px 0;
    font-size: 14px;
}

.forum-header .buttons {
    margin: 20px 0;
}

.forum-header .buttons button {
    padding: 10px 20px;
    margin: 0 10px;
    background-color: #003366;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.forum-header .buttons button:hover {
    background-color: #0059b3;
}

/* Recent Topics Styles */
.recent-topics {
    margin-top: 40px;
}

.recent-topics h2 {
    font-size: 20px;
    margin-bottom: 20px;
}

.topic-list {
    display: flex;
    gap: 20px;
    justify-content: space-around;
}

.topic {
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.topic img {
    width: 150px;
    height: 100px;
    object-fit: cover;
}

.topic p {
    margin-top: 10px;
    font-size: 14px;
    color: #333;
}

/* Footer Styles */
footer {
    text-align: center;
    padding: 20px;
    background-color: #003366;
    color: white;
    margin-top: 40px;
}

footer .social-icons img {
    width: 30px;
    margin: 0 10px;
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knit Krafters Forum - HobbyNest</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="HobbyNest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </header>

    <main>
        <aside class="sidebar">
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Discussion</a></li>
                <li><a href="#">Hobby MarketPlace</a></li>
                <li><a href="#">Help Me</a></li>
            </ul>
        </aside>

        <section class="content">
            <div class="forum-header">
                <img src="knit_image.png" alt="Knitting">
                <h1>Knit Krafters</h1>
                <p>
                    Welcome to KnitKrafters! This is a creative community forum dedicated to knitting and crochet enthusiasts. Here, members can share patterns and designs, discuss knitting techniques, and exchange tips and tricks on creating various knitting projects.
                </p>
                <div class="stats">
                    <p><strong>Members:</strong> 100 Subscribers</p>
                </div>
                <div class="buttons">
                    <button>Discussion Forum</button>
                    <button>Hobby MarketPlace</button>
                </div>
            </div>

            <div class="recent-topics">
                <h2>Recent Topics</h2>
                <div class="topic-list">
                    <div class="topic">
                        <img src="topic1.png" alt="Topic Image">
                        <p>Knitting Patterns and Designs</p>
                    </div>
                    <div class="topic">
                        <img src="topic2.png" alt="Topic Image">
                        <p>Knitting's Tips & Tricks</p>
                    </div>
                    <div class="topic">
                        <img src="topic3.png" alt="Topic Image">
                        <p>Knitting Yarn Recommendations</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>About Us</p>
        <div class="social-icons">
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
            <a href="#"><img src="twitter.png" alt="Twitter"></a>
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
        </div>
    </footer>
</body>
</html>
<script>
 document.querySelector('.buttons button:first-child').addEventListener('click', function() {
        window.location.href = 'discussion_forum.html';
    });

    document.querySelector('.buttons button:last-child').addEventListener('click', function() {
        window.location.href = 'hobby_marketplace.html';
    });
</script>
