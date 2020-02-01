<?php
session_start();
session_destroy();//this function destroy the session
header('location:../adminlogin.php');
?>