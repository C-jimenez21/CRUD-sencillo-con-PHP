<?php
    $URL = "https://6480e3aef061e6ec4d4a000d.mockapi.io/Informacion";

    //validar cedula
    if(isset($_POST["cedula"])){
        
    }
    //Inputs vacios
    function validateInput($datos){
        foreach($datos as $items){
            if($items === ""){
                echo "<h1>SE DEBEN LLENAR TODOS LOS ESPACIOS</h1>";
                return false;
        }else{
            return true;
        }
    }
        
    }
    //existe? 

    //se pudo crear


    //agregar
    function addDAta($data){
        if(validateInput($data)){
            global $URL;
            $opts = array(
                'http'=>array(
                  'method'=>"POST",
                  'header'=>"Content-type: application/json",
                  "content" => json_encode($data)
                  )
                );
            $config = stream_context_create($opts);
            return file_get_contents($URL, false, $config);
            }
        
    }

    //editar


    //eliminar


    //buscar


    //Switch para saber que funcion es

    if(isset($_POST["btn"])){
        $accion = $_POST["btn"];
        $datos = $_POST;
        switch($accion){
            case "confirmar":
                addDAta($datos);
                break;
            case "eliminar":
                break;
            case "buscar":
                break;
            case "editar":
                break;
        }
    }







    /*$opts = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Content-type: application/json",
          "content" => json_encode($data)
        )
      );
    $config = stream_context_create($opts);
    */
    $DATA = file_get_contents($URL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    
</head>
<body>
    <div class="container mt-5">
    <form>
        <div class="row one">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="Nombre" placeholder="Ingrese nombre">
                </div>
                <div class="mb-3">
                  <label class="form-label">Apellido</label>
                  <input type="text" name="Apellido" placeholder="Ingrese apellido">
                </div>
                <div class="mt-4">
                  <label class="form-label">Direccion</label>
                  <input type="text" name="Direccion" placeholder="Ingrese direccion">
                </div>
            </div>
            <div class="col-6">
                <img src="../img/logo2.jpeg">
                <!-- <h1 class="display-3">Campuslands</h1> -->
                <div class="mb-3 mt-3">
                  <label class="form-label">Edad</label>
                  <input type="number" name="Edad" placeholder="Ingrese edad">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="Email" placeholder="Ingrese email">
                </div>
            </div>
        </div>
    <div class="two">
        <div class="row">
            <div class="col-6 mb-3">
                <label class="form-label">Horario</label>
                <input type="time" name="Hora">
            </div>
            <div class="col"></div>
            <div class="col-1">
                <button type="submit" name= "btn" value="confirmar">&#10004;</button>
            </div>
            <div class="col"></div>
            <div class="col-1">
                <button type="submit" name= "btn" value="eliminar">&#10006;</button>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label class="form-label">Team</label>
              <input type="text" name="Team" placeholder="Ingrese team">
           </div>
           <div class="col"></div>
            <div class="col-1">
                <button type="submit" name= "btn" value="editar">&#9999;</button>
            </div>
            <div class="col"></div>
            <div class="col-1">
                <button type="submit" name= "btn" value="buscar">&#128269;</button>
            </div>
    //editar


    //eliminar
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
              <label class="form-label">Trainer</label>
              <input type="text" name="Trainer" placeholder="Ingrese trainer">
            </div>
            <div class="col-6 mb-3">
              <label class="form-label">Cedula</label>
              <input type="number" name="Cedula" placeholder="Ingrese cedula">
            </div>
        </div>
        </div>
    </form>
    
    <table class="table mt-5">
        <thead>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Horario</th>
            <th>Team</th>
            <th>Trainer</th>
            <th>Action</th>
        </thead>
        <tbody>
         <?php
         $arrInfo = json_decode($DATA, true);
            foreach($arrInfo as $parametro) {
                echo "
                <tr>
                    <td>{$parametro["Cedula"]}</td>
                    <td>{$parametro["Nombre"]}</td>
                    <td>{$parametro["Apellido"]}</td>
                    <td>{$parametro["Direccion"]}</td>
                    <td>{$parametro["Edad"]}</td>
                    <td>{$parametro["Email"]}</td>
                    <td>{$parametro["Horario"]}</td>
                    <td>{$parametro["Team"]}</td>
                    <td>{$parametro["Trainer"]}</td>
                    <td><button>i</button></td>
                </tr>
                ";
            }
         ?>
        </tbody>
    </table>

</div>

</body>
</html>