<?php
include('auth_check.php'); // Restrict access to logged-in users
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="culinery.css">
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
                    <h3>Königsberger Klopse</h3>
                   <img src="gambar/berlin/koenigsberger.webp" alt="Ubud">
                    <p class="description">Königsberger Klopse adalah bola daging khas Jerman yang dimasak dalam saus krim kapar. 
            Berbeda dari bola daging biasa, hidangan ini memiliki cita rasa unik yang gurih dan sedikit asam, 
            serta biasanya disajikan dengan kentang rebus atau nasi</p>
                </div>

                <div class="tempat-hits-item">
                    <h3>Schnitzel</h3>
                    <img src="gambar/berlin/Schnitzel.jpg" alt="Ubud">
                    <p class="description">Schnitzel adalah potongan daging tipis (biasanya daging babi atau ayam) yang dilapisi tepung roti dan digoreng hingga keemasan. Teksturnya renyah di luar dan lembut di dalam, sering disajikan dengan irisan lemon dan kentang goreng atau salad kentang sebagai pelengkap.</p>
                </div>

                <div class="tempat-hits-item">
                    <h3>Käsekuchen</h3>
                    <img src="gambar/berlin/Kaseku.jpeg" alt="Kuta Beach">
                    <p class="description">Käsekuchen adalah kue keju khas Jerman yang menggunakan keju quark sebagai bahan utama. Berbeda dari cheesecake ala Amerika, Käsekuchen memiliki rasa yang lebih ringan dan sedikit asam, dengan tekstur lembut yang meleleh di mulut. Biasanya disajikan dengan taburan gula halus di atasnya.</p>
                </div>

                <div class="tempat-hits-item">
                    <h3>Spätzle</h3>
                    <img src="gambar/berlin/spatzle.jpg" alt="Nusa Penida">
                   <p class="description">Spätzle adalah mi telur lembut khas Jerman bagian selatan yang sering disajikan dengan keju leleh dan bawang goreng renyah di atasnya. Hidangan ini mirip dengan mac and cheese versi Jerman, cocok untuk pencinta makanan gurih dan creamy.</p>
                </div>

                <div class="tempat-hits-item">
                    <h3>Buletten</h3>
                    <img src="gambar/berlin/buletten.jpeg" alt="Ubud">
                    <p class="description">Buletten adalah bakso pipih khas Berlin yang terbuat dari daging cincang, bawang, dan rempah-rempah. Biasanya disajikan hangat dengan kentang atau dingin sebagai camilan dengan roti dan mustard. Rasanya gurih dan mengenyangkan.</p>
                </div>
            </div> 
        </section>
    </main>
    </div>
     <div class="pagination">
        <a href="culinery0.php" class="page-number active">1</a>
        <a href="culinery.php" class="page-number">2</a>
    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; Ariel.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
