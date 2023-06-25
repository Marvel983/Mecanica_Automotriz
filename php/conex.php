<?php
/**
 * Contiene la conexión a la Base de datos
 */
class conexión
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'mecánica_automotriz';

    /**
     * Recibe datos de la base de datos y conecta con mysqli_connect();
     */
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