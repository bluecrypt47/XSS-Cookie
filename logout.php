<?php session_start();

if (isset($_SESSION['email'])) {
    unset($_SESSION['email']); // xóa session login
    echo '<script language="javascript">alert("Logout Successfully!"); window.location="login.php";</script>';
}
