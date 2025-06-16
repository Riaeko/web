<!-- filepath: c:\xampp\htdocs\website\dashboard.php -->
<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login2.php'); // Redirect ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <script>
        // JavaScript for countdown and redirection
        let countdown = 1; // Countdown time in seconds
        function startCountdown() {
            const countdownElement = document.getElementById('countdown');
            const interval = setInterval(() => {
                countdownElement.textContent = countdown;
                countdown--;
                if (countdown < 0) {
                    clearInterval(interval);
                    window.location.href = 'index1.php'; // Redirect after countdown
                }
            }, 1000); // Update every second
        }
        window.onload = startCountdown; // Start countdown when the page loads
    </script>
</head>
<body>
    <div class="container">
        <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Redirecting to the main page in <span id="countdown">2</span> seconds...</p>
    </div>
</body>
</html>