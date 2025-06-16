
<?php
include('auth_check.php'); // Restrict access to logged-in users
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="kontak11.css">
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
            <a href="login2" class="logout">Logout</a>
        </div>
    </nav>
    

    <div class="contact-container">
        <div class="form-section">
            <h1>Contact Me</h1>
            <form>
                <label for="email">Email</label><br/>
                <input type="email" name="email" placeholder="alamat email" required />
                <br/>
                <label for="message">Pesan</label><br/>
                <textarea name="message" placeholder="Tulis pesan anda...." rows="4" cols="50" required></textarea>
                <br/>
                <input type="submit" value="Kirim"/>
            </form>
        </div>
        <div class="info-section">
            <h1>Info Kontak</h1>
            <div class="contact-info">
                <img src="gambar/hp-removebg-preview.png" alt="Phone Icon" class="contact-icon">
                <p><strong>Telepon:</strong> (+62) 852-1025-2961</p>
            </div>
            <div class="contact-info">
                <img src="gambar/email-removebg-preview.png" alt="Email Icon" class="contact-icon">
                <p><strong>Email:</strong> ririariean@gmail.com</p>
            </div>
            <div class="contact-info">
                <img src="gambar/alamat-removebg-preview.png" alt="Address Icon" class="contact-icon">
                <p><strong>Alamat:</strong> Jl. Raya Universitas Pamulang No.1, Tanggerang Selatan</p>
            </div>
        </div>
    </div>

    <footer style="text-align: center;">
        <P>Copyright &copy; 2025 Universitas Pamulang</P>
    </footer>
    <script src="script.js"></script>
</body>
</html>
