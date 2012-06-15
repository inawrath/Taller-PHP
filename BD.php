<?php
class BD extends PDO {
   
    private $motor;
    private $host;
    private $db;
    private $user;
    private $pass;
    private $opciones;
   
    public function __construct(){
        $this->motor = 'pgsql'; //Driver a utilizar Ej: mysql
        $this->host = 'localhost'; //Servidor donde se encuentra la BAse de Datos
        $this->db = 'web'; //Nombre de la BAse de Datos
        $this->user = 'web'; //usuario Base de Datos
        $this->pass = 'root'; //Contrasena Base de DAtos
        $this->opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dns = $this->motor.':dbname='.$this->db.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass, $this->opciones);
      //parent::__construct( $dns, $this->user, $this->pass);
    }
}
?>
