<?php

session_start();

if (isset($_SESSION['loggedIn'])) {
    echo "prihlasen";
}
else {
    echo "neprihlasen";
}



