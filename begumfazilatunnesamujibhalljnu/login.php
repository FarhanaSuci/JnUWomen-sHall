<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['id']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uid = validate($_POST['id']);

    $pass = validate($_POST['password']);

    if (empty($uid)) {

        header("Location: login1.php?error=User Id is required");

        exit();

    }else if(empty($pass)){

        header("Location: login1.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM students WHERE id='$uid' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['id'] === $uid && $row['password'] === $pass) {

                echo "Logged in!";


                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['bloodGroup'] = $row['bloodGroup'];
                $_SESSION['date_of_birth'] = $row['date_of_birth'];
                $_SESSION['department'] = $row['department'];
                $_SESSION['phnNo'] = $row['phnNo'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['roomNo'] = $row['roomNo'];
                $_SESSION['seatNo'] = $row['seatNo'];
                $_SESSION['seat_expire_date'] = $row['seat_expire_date'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['session'] = $row['session'];
                $_SESSION['floorNo'] = $row['floorNo'];
                $_SESSION['maritial_status'] = $row['maritial_status'];
                $_SESSION['image']=$row['image'];

               
                header("Location: home_student.php");

                exit();

            }else{

                header("Location: login1.php?error=Incorrect User Id or password");

                exit();

            }

        }else{

            header("Location: login1.php?error=Incorrect User Id or password");

            exit();

        }

    }

}else{

    header("Location: login1.php");

    exit();

}