<?php


$server = 'localhost';
$username = 'root';
$password = '';
$database = 'nxtbus';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Error' . mysqli_connect_error());
}

if(isset($_POST['search'])){
    $searchitem = $_POST['search'];
    $sql= "SELECT * FROM `city` WHERE city_name LIKE '%$searchitem%' LIMIT 4;";
    $result=mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        while($row=mysqli_fetch_assoc($result)){
            $city=$row['city_name'];
            $state=$row['state_name'];
            echo '<p>'.$city.', '.$state.'</p>';
        }
    }
    }

if((isset($_POST['lpassword']))&&(isset($_POST['lusername']))) {
    $username = $_POST["lusername"];
    $password = $_POST["lpassword"];
    $gopage = "index.php";
    $sql = "Select * FROM `user` WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
        if ($num > 0){
            while($row=mysqli_fetch_assoc($result)){
                if ($password == $row['password']){ 
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    echo "<script> window.location.href = '$gopage'; </script>";
                }else{
                    echo "Enter the correct password!";
                }
            }
        }else{
            echo "User not found Please SignUp!";
    }
}


$conn->close();
?>