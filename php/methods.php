<?php
    /**
     * Clase contenedora para métodos CRUD
     */
    class métodosCrud{

        /**
         * Recibe una sentencia sql y la ejecuta
         */
        public function showData($sql){
            $obj = new conexión();
            $conn = $obj->conectar();

            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);
            if($rows >= 1){
                return mysqli_fetch_all($result, MYSQLI_ASSOC);
            }else{
                return false;
            }

        }
    }
    
?>