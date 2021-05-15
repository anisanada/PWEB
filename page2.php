<?php
    if(isset($_COOKIE['username'])){
        echo ' Hi ' . $_COOKIE ' Welcome to Our Website <br>'
    } else {
        echo ' Invalid User'
    }