<?php
/**
 * Clase contenedora para métodos CRUD
 */
class métodosCrud
{

    /**
     * Recibe una sentencia sql y la ejecuta
     */
    public function showData($sql)
    {
        $obj = new conexión();
        $conn = $obj->conectar();

        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }

    }

    public function insertData($arr)
    {
        $obj = new conexión();
        $conn = $obj->conectar();

        $sql = "INSERT INTO mecánico(nombre,
             apellido,
             rol,
             dui,
             teléfono,
             dirección, 
             fechaNacido,
             genero,
             remuneración,
             id_taller) values('$arr[0]',
             '$arr[1]',
             '$arr[2]',
             '$arr[3]',
             '$arr[4]',
             '$arr[5]',
             '$arr[6]',
             '$arr[7]',
             '$arr[8]',
             '$arr[9]'
            )";

        return $result = mysqli_query($conn, $sql);
    }

    public function deleteData($id){
        $obj = new conexión();
        $conn = $obj->conectar();

        $sql = "DELETE FROM mecánico WHERE id_mecánico = $id";
        
        return $result = mysqli_query($conn, $sql);
    }


    //Crud para el vehiculo por parte del usuario
    public function showDataVehi($sql)
    {
        $obj = new conexión();
        $conn = $obj->conectar();

        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    /*
    public function insertDataVehi($arr)
    {
        $obj = new conexión();
        $conn = $obj->conectar();

        $sql = "INSERT INTO vehículo(modelo,
             tipo,
             placa,
             dominio,
             color,
             num_motor, 
             clase,
             marca,
             fecha) values('$arr[0]',
             '$arr[1]',
             '$arr[2]',
             '$arr[3]',
             '$arr[4]',
             '$arr[5]',
             '$arr[6]',
             '$arr[7]',
             '$arr[8]',
            )";

        return $result = mysqli_query($conn, $sql);
    }*/

    public function deleteDataVehi($id)
    {
        $obj = new conexión();
        $conn = $obj->conectar();

        $sql = "DELETE FROM vehículo WHERE id_vehículo = $id";

        return $result = mysqli_query($conn, $sql);
    }

    // Crud para la reserva por parte del usuario
    public function showDataRes($sql)
    {
        $obj = new conexión();
        $conn = $obj->conectar();

        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }

    }

    public function deleteDataRes($id){
        $obj = new conexión();
        $conn = $obj->conectar();

        $sql = "DELETE FROM reserva WHERE id_reserva = $id";
        
        return $result = mysqli_query($conn, $sql);
    }
}





?>