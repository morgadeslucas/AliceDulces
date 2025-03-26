<?php

    require "./conexion.php";

    if(isset($_GET['buscar'])){
        $sql = "SELECT * FROM producto WHERE nombre_producto like '%buscar%'";
        $result = $conexion->query($sql);

        $json = array();

        while($row = $result->fetch_assoc($result)){
            $json[] = $row;
        }

        echo json_encode($json);

    }



?>