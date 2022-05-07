<?php
    include('login.html');
?>
<?php
$insert = false;
    if(isset($_POST['username'])){
        $conn = mysqli_connect("remotemysql.com","nkZdOl4e8d","sgRE1qmiER","nkZdOl4e8d");
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from `nkZdOl4e8d`.`login` where username = '$username' AND password = '$password';";

        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_assoc($result);

        if(isset($check)){
            ?>
            <br>
            <br>
            <?php
            echo 'login success!';
            }else{
            ?>
            <br>
            <br>
            <?php
            echo 'Username or Password incorrect!';
            }
        
        $conn->close();

    }

?>