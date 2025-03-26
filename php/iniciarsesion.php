<?php
  
    require "../admin/php/conexion.php";

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' && contra = '$password'";
    $result = mysqli_query($conexion, $sql);

    // verificamos que exista la cuenta 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pwd = $row["contra"];
        $emial2 = $row["email"];
        // verificamos si la contraseñas coninciden
        if($email == $emial2 && $pwd == $pwd) {
            echo 1;
        }else{
            echo 2;
        }
    }else{
        echo "La cuenta no existe";
    }
    
    ?>