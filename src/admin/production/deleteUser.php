<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/userRepository.php");
    $userRepository = new UserRepository();
    $userRepository->deleteById($_GET['id']);
    echo "<script>alert('Successfully');
        window.location.href='user.php';
        </script>";
?>