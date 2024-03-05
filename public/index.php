<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "A post request has been made";
} else {
    require_once '../src/views/registration.php';
}