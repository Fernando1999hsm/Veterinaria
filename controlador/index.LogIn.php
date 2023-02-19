<?php
    require('../modelo/clsUsuario.php');
    //print_r(get_included_files());
    print_r(var_dump(function_exists('conexionDB')));

    $usuario=$_POST['inputUsuario'];
    $contra=$_POST['inputContra'];
    if($usuario==""){
        header('Location: ../vistas/UnaSolaVista/LogInForm.php');
    }else{
        $claseUsuario = new clsUsuario($usuario,$contra);
        $conexion = $claseUsuario.conexionDB();
        $busqueda = $claseUsuario.ValidarPerfil();
    }
?>