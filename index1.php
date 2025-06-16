<?php
include('auth_check.php'); // Restrict access to logged-in users
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="dex1.css">
    <link rel="icon" href="gambar/logo-unpam-300x291.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/logo-unpam-300x291.png" alt="Logo Universitas Pamulang" class="logo">
        </div>
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="destinasi.php">Destinations</a></li>
            <li><a href="culinery.php">Culinary</a></li>
            <li><a href="Budaya.php">Culture</a></li>
            <li><a href="kontak1.php">Contact Us</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2.php" class="logout">Logout</a>
        </div>
    </nav>
    
    <!-- Gambar di bawah navbar -->
    
    <div class="video-background">
        <video autoplay loop muted playsinline>
            <source src="gambar/berlin/vid1.mp4" type="video/mp4">
        </video>
        <div class="video-overlay-text">
            <h1>Welcome To Berlin</h1>
        </div>   
    </div>
    <div class="batas">
</div>

    
        <div class="most-popular">
    <h2>Popular Places in Berlin</h2>
    <div class="popular-images">
        <div class="popular-item">
            <a href="brandenburg.php" target="_blank">
                <img src="gambar/berlin/brandenburg2.jpg" alt="Gerbang brandenburg">
                <p>Gerbang Brandenburg</p>
            </a>
        </div>
        <div class="popular-item">
            <a href="reich.php" target="_blank">
                <img src="gambar/berlin/reich.jpg" alt="Reichstag Building">
                <p>Reichstag Building</p>
            </a>
        </div>
        <div class="popular-item">
            <a href="wallmemo.php" target="_blank">
                <img src="gambar/berlin/wallmemo.jpg" alt="Berlin Wall Memorial">
                <p>Berlin Wall Memorial</p>
            </a>
        </div>
        <div class="popular-item">
            <a href="museum.php" target="_blank">
                <img src="gambar/berlin/museum.jpg" alt="Museum Island">
                <p>Museum Island</p>
            </a>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer">
    <p>&copy; Ariel.</p>
</footer>
<script src="script.js"></script>

</body>
</html>