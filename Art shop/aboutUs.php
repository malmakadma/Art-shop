<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        .active {
            color: #FFB6C1;
            text-decoration: none;
            font-weight: bold;
        }

        .no-active {
            color: black;
            text-decoration: none;
        }

        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 70px;
            padding: 10px;
        }

        .tab{
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
<?php include "header.php"?>
<div style="text-align: center;">
    <h1>About us</h1>
    <p>Welcome to our Art Shop, your ultimate destination for art supplies! We specialize in offering a wide range of products for painting enthusiasts, with a particular focus on watercolor painting.</p>
    <p>At our store, you will find everything you need to embark on your creative journey with watercolors. We take pride in our diverse selection of high-quality watercolor paints, including a variety of vibrant and pigmented shades. Whether you're a professional artist or just starting out, our collection has something to suit every skill level and artistic vision.</p>
    <p>In addition to our extensive watercolor paint range, we also provide a wide selection of brushes specifically designed for watercolor techniques. From fine detail brushes to broad wash brushes, we have the perfect tools to help you achieve the desired effects in your artwork.</p>
    <p>To complement your watercolor painting experience, we offer a carefully curated assortment of premium watercolor paper. Our papers are specially crafted to absorb watercolor pigments effectively, ensuring optimal color blending and longevity for your artworks.</p>
    <p>At our Art Shop, we are passionate about providing artists of all backgrounds with the finest materials to unleash their creativity and bring their artistic visions to life. Whether you're a hobbyist or a seasoned professional, we strive to be your go-to destination for all your watercolor painting needs.</p>
    <p>Explore our collection and elevate your artistic endeavors with our exceptional watercolor supplies. Let your imagination flow and create masterpieces that inspire and captivate.</p>
</div>

</body>
<?php include "footer.php"; ?>

<style>
    a{
        margin-left: 250px;
    }</style>