<?php

$connection = mysqli_connect('localhost', 'root', '', "lawrence'sdb");

if(!$connection){
    echo "Connection failed ".mysqli_error($connection);
}