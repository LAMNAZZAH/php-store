<div class="navigation">
    <nav class="navbar" id="navigationbar">
        <div class="logo">
            <a href=<?php echo  URLROOT . "/pages/mainpage/0" ?>>
                <h1>MyPhpStore</h1>
            </a>
        </div>
        <ul>
            <li>
                <img class="nav-icon" src=<?php echo URLROOT . "/public/img/store.svg" ?> alt="">
                Explore
            </li>
            <li>
                <img class="nav-icon" src=<?php echo URLROOT . "/public/img/cart.svg" ?> alt="">
                My Cart
            </li>
            <li>
                <img class="nav-icon" src=<?php echo URLROOT . "/public/img/about.svg" ?> alt="">
                About
            </li>
        </ul>
        <div class="sign-in">
            <a href=<?php echo URLROOT . "/users/register"; ?>><button class="sign-in-btn">Sign In</button></a>
        </div>
    </nav>
    <?php
    $URL = $_SERVER["REQUEST_URI"];
    $array = explode('/', $URL);
    if ($array[2] == 'pages') {
        require APPROOT . '/views/inc/subnav.php';
    }
    ?>
</div>