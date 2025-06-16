<?php
include('auth_check.php'); // Restrict access to logged-in users
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="c.css">
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

    <div class="video-background">
        <video autoplay loop muted playsinline>
            <source src="gambar/berlin/vid1.mp4" type="video/mp4">
        </video>  
    </div>



    <div class="content">
    <!-- Beberapa Wisata di Bali -->
    <div class="info-section">
        <div class="info-text">
            <h2>Currywurst</h2>
            <p>
            Currywurst adalah hidangan khas Berlin yang terdiri dari sosis sebagai bahan utama yang digoreng, 
            lalu disajikan dengan saus kari tomat yang khas. Hidangan ini memiliki cita rasa yang gurih, sedikit manis, dan pedas, 
            yang sangat digemari sebagai makanan jalanan.
            </p>
        </div>
        <div class="info-image">
            <img src="gambar/berlin/currywurst.avif" alt="Tanah Lot">
        </div>
    </div>

    <div class="info-section reverse">
        <div class="info-image">
            <img src="gambar/berlin/doner.avif" alt="Ubud">
        </div>
        <div class="info-text">
            <h2>Döner Kebab</h2>
            <p>
            Döner Kebab adalah hidangan populer di Berlin yang terdiri dari daging yang dipanggang secara vertikal 
            dan diiris tipis, disajikan dengan roti pita, sayuran segar, serta saus khas. Hidangan ini memiliki cita 
            rasa yang kaya, gurih, dan penuh rempah.
            </p>
        </div>
    </div>

    <div class="info-section">
        <div class="info-text">
            <h2>Bratkartoffeln</h2>
            <p>
            Bratkartoffeln adalah hidangan tradisional Jerman yang terdiri dari irisan kentang yang digoreng dengan bawang 
            dan daging asap sebagai bahan utama. Hidangan ini memiliki cita rasa yang gurih, hangat, dan lezat, cocok sebagai 
            pendamping makanan utama.
            </p>
        </div>
        <div class="info-image">
            <img src="gambar/berlin/Bratkartoffeln.jpeg" alt="Kuta Beach">
        </div>
    </div>

    <div class="info-section reverse">
        <div class="info-image">
            <img src="gambar/berlin/berliner.jpg" alt="Nusa Penida">
        </div>
        <div class="info-text">
            <h2>Berliner Pfannkuchen</h2>
            <p>
            Berliner Pfannkuchen adalah salah satu kue khas Jerman yang populer. Berbeda dengan donat pada umumnya, 
            Berliner Pfannkuchen tidak memiliki lubang di tengahnya dan diisi dengan selai buah, krim, atau cokelat. 
            Kue ini memiliki tekstur yang lembut, manis, dan biasanya ditaburi gula bubuk di atasnya.
            </p>
        </div>
    </div>
    
    <div class="info-section reverse">
        <div class="info-image">
            <img src="gambar/berlin/Eisbein.webp" alt="Ubud">
        </div>
        <div class="info-text">
            <h2>Eisbein</h2>
            <p>
            Eisbein adalah hidangan khas Jerman yang terdiri dari lutut babi yang dimasak perlahan hingga empuk dan 
            disajikan dengan sauerkraut dan kentang. Berbeda dengan hidangan daging lainnya, Eisbein memiliki tekstur yang 
            sangat lembut dengan rasa gurih yang khas.
            </p>
        </div>
    </div>

    <div class="info-section reverse">
        <div class="info-image">
            <img src="gambar/berlin/koenigsberger.webp" alt="Ubud">
        </div>
        <div class="info-text">
            <h2>Königsberger Klopse</h2>
            <p>
            Königsberger Klopse adalah bola daging khas Jerman yang dimasak dalam saus krim kapar. 
            Berbeda dari bola daging biasa, hidangan ini memiliki cita rasa unik yang gurih dan sedikit asam, 
            serta biasanya disajikan dengan kentang rebus atau nasi.
            </p>
        </div>
    </div>
    
     <div class="pagination">
        <a href="culinery.php" class="page-number active">1</a>
        <a href="culinery2.php" class="page-number">2</a>
    </div>

    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; Ariel.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
