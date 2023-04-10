<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        if($checkCookie['role']==1){
            echo '<a href="admin/production/shoe.php">Visit Admin Page</a>';
        }
        echo '<a href="#">'.$checkCookie['fullname'].'</a>
        <a href="/cc/web/backend/logoutCookie.php">Log Out</a>';
    }
    else{
        echo '<a href="auth/login/index.php">Login & Regiser</a>';
    }
?>