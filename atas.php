<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS eksternal -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"> <!-- Menghubungkan font Poppins dari Google Fonts -->
<style>
    /* Mengatur ulang beberapa gaya default dan menentukan jenis font */
body {
    margin: 0;
    font-family: 'Poppins', sans-serif; /* Mengubah jenis font menjadi Poppins */
}

/* Gaya untuk seluruh navbar */
.navbar {
    background-color: transparent; /* Menghapus background hitam */
    overflow: hidden;
    padding: 20px 40px; /* Menambahkan jarak atas dan samping */
}

/* Gaya untuk daftar tak-terurut yang berisi item navigasi */
.navbar-list {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

/* Gaya untuk setiap item navbar */
.navbar-item {
    float: left;
    margin-right: 30px; /* Menambahkan jarak ke samping */
}

/* Gaya untuk tautan dalam setiap item navbar */
.navbar-item a {
    display: block;
    color: black; /* Mengubah warna font menjadi hitam */
    text-align: center;
    padding: 10px 0; /* Menambahkan jarak atas dan bawah */
    text-decoration: none;
}

/* Gaya untuk tautan navbar saat dihover */
.navbar-item a:hover {
    background-color: #ddd;
    color: black;
}
</style>
<title>Dropdown Navbar</title>
</head>
<body>

<!-- Container untuk navbar -->
<nav class="navbar">

<!-- Daftar tak-terurut untuk item navigasi -->
<ul class="navbar-list">
    <?php
        foreach ($menu_atas as $key => $value) {
            echo "<li class='navbar-item'><a href='index.php?hal=$key'>$value</a></li>";
        }
    ?>
</ul>
</nav>

</body>
</html>
