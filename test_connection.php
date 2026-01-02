<!-- paste this link on your browser http://localhost/crud/test_connection.php to check whether the connection has established or not... optional code-->
<?php
include 'db_connect.php';
echo "connection established successfully";

// Test query to show if there is any user in database -- optional 
$res = $con->query("SELECT * FROM users");
if($res->num_rows > 0){
    echo "<h3>users in database</h3>";
    while($row=$res->fetch_assoc()){
        echo "ID:". $row["id"]. "--Name:". $row["name"]. "--Email:". $row["email"]. "--Phone:". $row["phone"]. "<br>";
    }
}else{
    echo "No users in database";
}

$con->close();
?>