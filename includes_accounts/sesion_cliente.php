<?php
session_start();
if(!isset($_SESSION['cliente_name']))
{
    header('Location: ./login.php');
}