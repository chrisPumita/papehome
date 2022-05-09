<?php
session_start();
session_unset();
echo "<script>window.history.go(-1)</script>";
