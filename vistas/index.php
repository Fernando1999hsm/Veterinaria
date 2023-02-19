<?php
/* echo "Hola!";
$objeto = $_SESSION['claseUsuario'];
$objeto->escribeDatos();  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- CustomCSS -->
  <link rel="stylesheet" href="../CSS/Css.css">
  <title>Veterinaria</title>
</head>

<body>
    <?php
        include('modulos/header.php');
    ?>
    <div class="firstShowcase">
        <div class="content">
            <h1>Bienvenido a la Veterinaria</h1>
            <p>Ofrecemos un sercivio de calidad para usted y sus mascotas</p>
        </div>
    </div>
    <div class="secondShowcase">
        <div class="content">
            <div class="izquierda">
                <h1>Bienvenido a la Veterinaria</h1>
            </div>
            <div class="derecha">
                <p>En Clínica Veterinaria Chihuahua contamos con los mejores especialistas en atención veterinaria de la ciudad, nos mantenemos en constante preparación para mantenernos a la vanguardia de tus necesidades, con nosotros encontrarás un diagnóstico preciso, seguimiento en tratamientos y excelentes resultados de ortopedia canina, la cual es proporcionada por un especialista en cuidado de equinos, el Dr. Héctor Manuel Maynez.</p>
                <p>Si buscas atención veterinaria en Chihuahua, visítanos, tenemos a especialistas de la UNAM en temas de medicina y cirugía para perros y gatos, somos tu mejor opción, ya que nos especializamos en la atención y cuidado de las mascotas.</p>
                <p>Ponemos a tu disposición un completo esquema de servicios veterinarios, así como amplia gama de productos y servicios como son: estética canina y felina, alimentos, accesorios, camas, collares, juguetes, ropa para mascotas y medicamentos.</p>
                <p>Conócenos, en Clínica Veterinaria Chihuahua nuestro servicio de estética para mascotas es completo e incluye: corte de pelo, baño quita garrapatas y corte de uñas de todo tipo de razas de perros y gatos. Damos atención profesional para cualquier animal de compañía.</p>
                <p>Manejamos desde atención veterinaria en general y hospitalización, hasta hospedaje para cuyos dueños de perros tienen que salir de la ciudad. Este servicio incluye comidas, paseos, atenciones especiales caninas, etc.</p>
            </div>
        </div>
    </div>
    <?php
        include('modulos/footer.php');
    ?>
</body>
</html>