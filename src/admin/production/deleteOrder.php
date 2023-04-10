<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/orderRepository.php");
    $orderRepository = new OrderRepository();
    $orderRepository->deleteById($_GET['id']);
    echo "<script>alert('Successfully');
        window.location.href='order.php';
        </script>";
?>