<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Selecionar</title>
        <link rel="stylesheet" href="Diseño_menu.css">
        <script src="Desabilitar_boton_regresar.js"></script>
        
    </head>
    <body>
        <?php
       session_start();
        $usuario = $_GET["varUsuario"];
        $_SESSION['usuario'] = $usuario;
        $accesar = false;

        $conexion = mysqli_connect("localhost", "root", "", "mini_base") or
        die("problemas con la coneccion");

        $registros = mysqli_query($conexion, "select Realizo_examen
                        from registros 
                        WHERE Email='". $usuario ."'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
        

        $calif = mysqli_query($conexion, "select Calificacion, Nombre, Edad, Email, Apellido
        from registros 
        WHERE Email='". $usuario ."'") or
        die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($calif)) {
            $calificacion = $reg[0];
            $nombre  = $reg[1];
            $edad = $reg[2];
            $email = $reg[3];
            $apellido = $reg[4];
        }

        while ($reg = mysqli_fetch_array($registros)) {
            if($reg[0]==1){
                
            
                ?>
                <h1>Acceso al examen</h1>
        <div id="container">
        <h3 id="txt_0">Datos del alumno</h3>
        <button class="custom-btn btn-4" onclick="alertar();"><span>Ingresar al examen</button>
        <button class="custom-btn btn-3" onclick="location.href='Index.php';"><span>Regresar</span>
        <p id="elpepe_2">Calificacion del alumno: </p>
        <p id="txt_1">
        <?php
             echo $calificacion;
        ?>
        </p>
        <p id="elpepe_2">Nombre del estudiante: </p>
        <p id="txt_2">
        <?php
             echo $nombre;
        ?>
        </p>

        <p id="elpepe_2">Apellidos del estudiante: </p>
        <p id="txt_6">
        <?php
             echo $apellido;
        ?>
        </p>

        <p id="elpepe_2">Edad del estudiante </p>
        <p id="txt_1">
        <?php
             echo $edad . " años";
        ?>
        </p>

        <p id="elpepe_2">Email del estudiante: </p>
        <p id="txt_3">
        <?php
             echo $email;
        ?>
        </p>
        </div> 
        <?php
       
            } else{
    
                ?>
                <h1>Acceso al examen</h1>
        <div id="container">
        <h3 id="txt_0">Datos del alumno</h3>
        <button class="custom-btn btn-3" onclick="location.href='Examen.php';" ><span>Ingresar al examen</button>
        <button class="custom-btn btn-3" onclick="location.href='Index.php';"><span>Regresar</span>
        
        
        </p>
        <p id="elpepe">Nombre del estudiante: </p>
        <p id="txt_4_2">
        <?php
             echo $nombre;
        ?>
        </p>

        </p>
        <p id="elpepe">Apellidos del estudiante: </p>
        <p id="txt_7">
        <?php
             echo $apellido;
        ?>
        </p>

        <p id="elpepe">Edad del estudiante </p>
        <p id="txt_6_2">
        <?php
             echo $edad . " años";
        ?>
        </p>

        <p id="elpepe">Email del estudiante: </p>
        <p id="txt_5_2">
        <?php
             echo $email;
        ?>
        </p>
        </div> 
        <?php


            }
        }
        ?>
        
        
        
    </body>
</html>