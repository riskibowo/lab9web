<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <?php 
            $about = "about.php";
            $home="home.php";
            $kontak = "kontak.php"
        ?>
        <nav>
            <a href="<?php echo $home ?>">Home</a>
            <a href="<?php echo $about ?>">Tentang</a>
            <a href="<?php echo $kontak ?>">Kontak</a>
        </nav>