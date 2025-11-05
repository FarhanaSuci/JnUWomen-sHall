<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "begum_fazilatunnesa_mujib_hall_jnu";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}