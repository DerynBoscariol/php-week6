<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'public_schools');

    if(!$connect){
     die("Connection Failed: " . mysqli_connect_error());
    }