<?php
class clsUsuario{
    
    private $ID_USUARIO;
    private $USUARIO;
    private $CONTRASENA;
    private $ID_PERSONA;
    private $NOMBRE;
    private $A_P;
    private $A_M;
    private $TELEFONO;
    private $DIRECCION;

    private $con;

    public function setUsuario($usu){
        $this->USUARIO=$usu;
    }
    public function setContrasena($contra){
        $this->CONTRASENA=$contra;
    }
    
    public function __construct($usu,$contra){
        $this->USUARIO=$usu;
        $this->CONTRASENA=$contra;
    }
    
    public function getUsers(){
        $query = $this->con->query('SELECT * FROM usuarios');
        $retorno=[];
        $i=0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i]=$fila;
            $i++;
        }
        return $retorno;
    }
    public function ValidarPerfil(){
        $query = $this->con->query('SELECT * FROM usuarios WHERE Usuario='.$this->$USUARIO." AND Contrasena=".$this->$CONTRASENA);
    }

    public function conexionDB(){
        $this->con=new mysqli('localhost','root','','veterinaria');
        if($this->con){
            print_r("Conexion Exitosa");
        }else{
            print_r("Conexion Fallida");
        }
        return $con;
    }
    
}
?>