<?php
    session_start();
    require_once 'database.php';
    require_once 'register-inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopped | Shop Clothes For the Whole Family</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav-bar">
        <a href="#">Home</a>
        <a href="">Cart</a>
        <a href="#">SHOPPED</a>
        <a href="">Trending</a>
        <a href="login.php">Sign In</a>
    </div>



    <div class="logo">
        <h1 class="logo">SHOPPED</h1>
    </div>


    <div class="sitewide-11sbwnd" id="SearchBoxToggleIdentifier">
        <form data-testid="search-form" id="search-form" class="sitewide-1n6w291-StyledSearchBoxForm e1xps2y61">
        <input aria-activedescendant="" aria-autocomplete="list" aria-expanded="false" aria-owns="search-results" autocomplete="off" class="search--input search_standard--input sitewide-1tqrdfb-StyledSearchBoxInput e1xps2y60" name="searchText" placeholder="Looking for?" role="combobox" spellcheck="false" type="search" aria-label="search" value="">
        <button aria-label="search" type="submit" class="sitewide-1o6ghqv">
        <span class="sitewide-h64ult">
        <span class="sitewide-u0zwhm">
        <svg enable-background="new 0 0 39.992 40.168" height="21" viewBox="0 0 39.992 40.168" width="21" xmlns="http://www.w3.org/2000/svg" class="sitewide-1r9qb44">
        <path d="M39.786 36.74l-12.22-12.222c4.39-5.936 3.916-14.366-1.46-19.742C23.24 1.91 19.426.33 15.374.33 11.32.33 7.508 1.91 4.64 4.777 1.775 7.643.196 11.457.196 15.51c0 4.053 1.58 7.864 4.446 10.73 2.868 2.867 6.68 4.446 10.734 4.446 3.292 0 6.415-1.058 9.012-2.984l12.22 12.22 3.18-3.182zM15.374 26.687c-2.986 0-5.793-1.163-7.905-3.274-2.116-2.11-3.28-4.918-3.28-7.903 0-2.985 1.164-5.792 3.275-7.903 2.11-2.11 4.917-3.274 7.904-3.274 2.985 0 5.793 1.163 7.904 3.273 4.357 4.358 4.357 11.45 0 15.808-2.11 2.11-4.92 3.273-7.904 3.273z" fill="#00588E" class="sitewide-u58u6p-StyledDesktopSearchIconPath eoi9vzl0"></path>
        </svg>
        </span>
        </span>
        </button>
        </form>
        </div>

    <div>
        <div class="cloth-nav">
            <a href="">WOMEN</a>
            <a href="">MEN</a>
            <a href="">BOYS</a>
            <a href="">GIRLS</a>
            <a href="">TODDLERS</a>
            <a href="">BABIES</a>
        </div>

        <div class="vid">
            <video autoplay muted loop style="width: 100%; height: 100%;">
            <source src="image/vid.mp4" type="">        
        </video>
        </div>

        <div class="tops">
                <a href="">SHOP LIGHT AND DARK DENIM</a>
        </div>
        
        <div class="feature">

            <div class="short"> 
                <img src="image/short6.JPG" alt=""><br>
                <a href="">DENIM JEANS</a>
            </div>

            <div class="gown">
                <img src="image/gown.JPG" alt=""><br>
                <a href="">GOWNS</a>
            </div>

            <div class="jacket">
                <img src="image/Jacket (2).JPG" alt=""><br>
                <a href="">DENIM JACKET</a>
            </div>
        </div>