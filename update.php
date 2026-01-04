<?php
include 'db_connect.php';

// fetch existing data
$editUser=null;
if(isset($_GET['id'])){
    $editId=$_GET['id'];
    $stmt=$con->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i",$editId);
    $stmt->execute();
    $result=$stmt->get_result();
    $editUser=$result->fetch_assoc();
    $stmt->close();

    if(!$editUser){
        echo"<script>
            alert('User not found'); 
            window.location.href='index.php';
            </script>";
            exit;
    }
    }

// update with new data
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $stmt=$con->prepare("UPDATE users SET name=?,email=?,phone=? WHERE id=?");
    $stmt->bind_param("sssi", $name,$email,$phone,$id);
    if($stmt->execute()){
        echo"<script>
        alert('User updated successfully');
        window.location.href='index.php';
        </script>";
    }else{
        echo "<script>
        alert('Failed to update user');
        </script>";
    } 
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Update User</h1>
        <div class="form-container">
            <h2>Edit User Details</h2>
            <form action="" class="add-form" method="POST">
                <input type="hidden" name="id" 
                value="<?=$editUser['id']?>">
                <input type="text" name="name" placeholder="Name" class="input-field" required 
                value="<?=htmlspecialchars($editUser['name'])?>">
                <input type="email" name="email" placeholder="Email" class="input-field" required
                value="<?=htmlspecialchars($editUser['email'])?>">
                <input type="text" name="phone" placeholder="Phone" class="input-field" required
                value="<?=htmlspecialchars($editUser['phone'])?>">
                <button type="submit" name="update" class="add-btn">Update User <i class="fa-solid fa-user-plus"></i></button>
                <a href="index.php" class="cancel-btn">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>
<?php
$con->close();
?>