<?php

function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        echo "<script>window.location.href='index.php';
    </script>";
    exit;
    }
}

function redirect($url)
{
    echo "<script>window.location.href='$url';
    </script>"; 
    exit;
}

function alert($type, $msg)
{
    $msg_type = ($type == "success") ? "alert-success" : "alert-danger";
    echo "<div class='alert $msg_type alert-dismissible custom-alert fade show' role='alert'>
    <strong class='me-3'>$msg</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
