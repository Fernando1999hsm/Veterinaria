<?php
    require('../modelo/clsUsuario.php');
    $usuario=$_POST['inputUsuario'];
    $contra=$_POST['inputContra'];
    if($usuario==""){
        header('Location: ../vistas/UnaSolaVista/LogInForm.php');
    }else{
        $claseUsuario = new clsUsuario($usuario,$contra);
        $conexion = $claseUsuario->conexionDB();
        $busqueda = $claseUsuario->ValidarPerfil();
        foreach($busqueda as $valor){
            $claseUsuario->setIdUsuario($valor['Id_Usuario']);
            $claseUsuario->setIdPersona($valor['Id_Persona']);
            $claseUsuario->setApellidoP($valor['Apellido_P']);
            $claseUsuario->setApellidoM($valor['Apellido_M']);
            $claseUsuario->SetTelefono($valor['Telefono']);
            $claseUsuario->setDireccion($valor['Direccion']);
        }
        $claseUsuario->escribeDatos();
    }
?>