<?php
include 'db_connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $stmt=$con->prepare("INSERT INTO users(name,email,phone) values (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $phone);
    if($stmt->execute()){
        echo "<script>alert('New user added successfully');</script>";
    }else{
        echo "<script>alert('Failed to add user');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1><i class="fa-brands fa-buffer"></i>Student Crud</h1>

        <!-- for adding new item -->
         <div class="form-container">
            <h2><i class="fa-solid fa-shield-heart"></i>Add New User</h2>
            <form class="add-form" method="POST" action="">
                <input type="text" name="name" placeholder="Name" class="input-field" required>
                <input type="email" name="email" placeholder="Email" class="input-field" required>
                <input type="text" name="phone" placeholder="Phone" class="input-field" required>
                <button type="submit" name="submit" class="add-btn">Add User <i class="fa-solid fa-user-plus"></i></button>
            </form>
         </div>

         <!-- for data table  -->
          <div class="table-container">
            <h2><i class="fa-solid fa-graduation-cap"></i>Student List</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Emma</td>
                        <td>emma@gmail.com</td>
                        <td>123456</td>
                        <td>
                            <button class="edit-btn"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lily</td>
                        <td>lily@gmail.com</td>
                        <td>789025</td>
                        <td>
                            <button class="edit-btn"><i class="fa-solid fa-user-pen"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
    </div>
</body>
</html>