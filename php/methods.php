<?php

    class métodosCrud{

        public function showData($sql){
            $obj = new conexión();
            $conn = $obj->conectar();

            $result = mysqli_query($conn, $sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }



    }
    
?>