<?php

class conexión
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'mecanica_automotriz';

    public function conectar()
    {
        $connection = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        return $connection;
    }

}

?>