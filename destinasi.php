<?php
include('auth_check.php'); // Restrict access to logged-in users
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="destinasi.css">
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
    <!-- video bg -->
    <div class="video-background">
        <video autoplay loop muted playsinline>
            <source src="gambar/berlin/vid1.mp4" type="video/mp4">
        </video>  
    </div>

    <main>
    </div>
        <section class="tempat-hits">
            <div class="tempat-hits-container">
                <div class="tempat-hits-item">
                    <h3>Topography of Terror</h3>
                    <img src="gambar/berlin/tot.jpg" alt="Tempat Hits 1">
                    <a href="topographyof.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                
                <div class="tempat-hits-item">
                    <h3>Gerbang Brandenburg</h3>
                    <img src="gambar/berlin/brandenburg2.jpg" alt="Tempat Hits 1">
                    <a href="brandenburg.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Reichstag Building</h3>
                    <img src="gambar/berlin/reich.jpg" alt="Tempat Hits 1">
                    <a href="reich.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Istana Charlottenburg</h3>
                    <img src="gambar/berlin/charlottenburg.jpg" alt="Tempat Hits 1">
                    <a href="charlottenburg.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Berliner Fernsehturm</h3>
                    <img src="gambar/berlin/fernseh.jpg" alt="Tempat Hits 1">
                    <a href="fernseh.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Berlin Wall Memorial</h3>
                    <img src="gambar/berlin/wallmemo.jpg" alt="Tempat Hits 1">
                    <a href="wallmemo.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Museum Island</h3>
                    <img src="gambar/berlin/museum.jpg" alt="Tempat Hits 1">
                    <a href="museum.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                
                <div class="tempat-hits-item">
                    <h3>Pergamonmuseum</h3>
                    <img src="gambar/berlin/pergamon.jpg" alt="Tempat Hits 1">
                    <a href="pergamon.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Tiergarten</h3>
                    <img src="gambar/berlin/tiergarten.jpg" alt="Tempat Hits 1">
                    <a href="tiergarten.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Berlin Cathedral</h3>
                    <img src="gambar/berlin/cathedral.jpg" alt="Tempat Hits 1">
                    <a href="cathedral.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Gendarmenmarkt</h3>
                    <img src="gambar/berlin/gendar.jpeg" alt="Tempat Hits 1">
                    <a href="gendar.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Kaiser Wilhelm Memorial Church</h3>
                    <img src="gambar/berlin/kaiser.jpeg" alt="Tempat Hits 1">
                    <a href="kaiser.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
            </div> 
        </section>
    </main>

    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; Ariel.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
