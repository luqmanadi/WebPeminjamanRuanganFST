<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: dashboard/index.php');
}
}