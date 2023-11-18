<?php
include "../app/models/pdo.php";
include "layout/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'qlsp':
            
            include "sanpham/list.php";
            break;
    }
}else{
     include "layout/home.php"; 
}
include "layout/footer.php";
?>