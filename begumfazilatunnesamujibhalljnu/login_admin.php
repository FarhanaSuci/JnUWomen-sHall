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

        header("Location: login5.php?error=User Id is required");

        exit();

    }else if(empty($pass)){

        header("Location: login5.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE id='$uid' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['id'] === $uid && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['serial'] = $row['serial'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['designation'] = $row['designation'];
                $_SESSION['tenure_from'] = $row['tenure_from'];
                $_SESSION['tenure_to'] = $row['tenure_to'];
                $_SESSION['phnNo'] = $row['phnNo'];
                $_SESSION['image'] = $row['image'];
                $_SESSION['email'] = $row['email'];


     
                
              echo "<script type='text/javascript'>alert('Successfully logged in!'); 
                               </script>";
               header("Location: home_admin.php");

                exit();
                

            }else{

                header("Location: login5.php?error=Incorect User Id or password");

                exit();

            }

        }else{

            header("Location: login5.php?error=Incorect User Id or password");

            exit();

        }

    }

}else{

    header("Location: login5.php");

    exit();

}