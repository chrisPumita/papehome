<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
    header('Location: ./login.php');
}