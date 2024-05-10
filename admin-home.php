<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="admin-home.php">CSTE Blood Bank</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="donor-red.php">Donor Registration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                <li><a href="out-stock-blood-list.php">Out Stock Blood List</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <?php
    $un = $_SESSION['un'];
    if (!$un) {
        header("Location:index.php");
        exit; // Make sure to exit after redirecting to prevent further execution
    }
    ?>
    
    <img src="logo.jpg" alt="image" width="500" height="300" style="display: block; margin: 0 auto;">
    <div class="container">
        <h1>Welcome Admin</h1>

        <!-- Your content here -->
    </div>
    <br> <br>
<br> <br>
<br><br> <br>
<br> <br>
<br>
    <footer>
        <div class="footer-content">
            <p>&copy; All rights reserved - CSTE Blood Bank</p>
        </div>
    </footer>
</body>
</html>
