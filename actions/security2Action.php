<?php

if(!isset($_SESSION['auth'])){
    header('Location: signin.php');

}