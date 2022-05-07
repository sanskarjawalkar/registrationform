<?php
    include('register.html')
?>
<?php
    $insert = false;
    if(isset($_POST['username'])){
        $conn = mysqli_connect("remotemysql.com","nkZdOl4e8d","sgRE1qmiER","nkZdOl4e8d");
        if(!$conn){
            die("connection failed!!!");
        }
        else{
            ?>
            <br>
            <br>
            <?php
        }
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "insert into `nkZdOl4e8d`.`login` values('$username','$password');";
        $sqll = "select * from `nkZdOl4e8d`.`login` where username = '$username';";


        $result = mysqli_query($conn,$sqll);
        $check = mysqli_fetch_assoc($result);

        if(isset($check)){
            ?>
            <br>
            <br>
            <?php
            echo 'User already exists!!';
            }else{
            ?>
            <br>
            <br>
            <?php
            if($conn->query($sql)==true){
                $insert = true;
                echo "Registration successful!!";
            }
            else{
                echo "error";
            }
            }

        $conn->close();
    }
?>