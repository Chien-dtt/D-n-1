<?php
    include "header.php";
    // controller

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'qldm':
                // Kiểm tra click
                $
                include "danhmuc/add.php";
                break;
            case 'qlsp':
                include "sanpham/add.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
    include "footer.php";
?>