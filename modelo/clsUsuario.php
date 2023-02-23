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

    public function setIdUsuario($idusuario){
        $this->ID_USUARIO=$idusuario;
    }
    public function setUsuario($usu){
        $this->USUARIO=$usu;
    }
    public function setContrasena($contra){
        $this->CONTRASENA=$contra;
    }
    public function setIdPersona($idpersona){
        $this->ID_PERSONA=$idpersona;
    }
    public function setNombre($name){
        $this->NOMBRE=$name;
    }
    public function setApellidoP($apep){
        $this->A_P=$apep;
    }
    public function setApellidoM($apem){
        $this->A_M=$apem;
    }
    public function SetTelefono($tel){
        $this->TELEFONO=$tel;
    }
    public function setDireccion($dir){
        $this->DIRECCION=$dir;
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
        $consulta = 'SELECT usuarios.Id_Usuario,usuarios.Id_Persona,personas.Nombre,personas.Apellido_P,personas.Apellido_M,personas.Telefono,personas.Direccion FROM usuarios INNER JOIN personas ON usuarios.Id_Persona=personas.Id_Persona WHERE Usuario="'.$this->USUARIO.'" AND Contrasena="'.$this->CONTRASENA.'"';
        $resultado = $this->con->query($consulta);
        return $resultado;
    }

    public function conexionDB(){
        $this->con=new mysqli('localhost','root','','veterinaria');
        if($this->con){
            print_r("Conexion Exitosa");
        }else{
            print_r("Conexion Fallida");
        }
        return $this->con;
    }
    public function escribeDatos(){
        echo $this->ID_USUARIO."<br>";
        echo $this->USUARIO."<br>";
        echo $this->CONTRASENA."<br>";
        echo $this->ID_PERSONA."<br>";
        echo $this->NOMBRE."<br>";
        echo $this->A_P."<br>";
        echo $this->A_M."<br>";
        echo $this->TELEFONO."<br>";
        echo $this->DIRECCION."<br>";
    }
}
?>