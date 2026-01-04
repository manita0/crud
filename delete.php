<?php
include 'db_connect.php';

if(isset($_GET['id'])){
    $deleteId=$_GET['id'];
    $stmt=$con->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $deleteId);
    if($stmt->execute()){
        echo "<script>
        alert('User deleted successfully');
        window.location.href='index.php';
        </script>";
    }else{
        echo "<script>
        alert('Failed to delete User');
        window.location.href='index.php';
        </script>";
    }
}
?>