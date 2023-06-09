<?php
    $URL = "https://6480e3aef061e6ec4d4a000d.mockapi.io/Informacion";

    $credenciales["http"]["method"] = "GET";
    $credenciales["http"]["header"] = "Content-type: application/json";
    
    $data = [
        "Nombre"=> "Nombre 18",
        "Apellido"=> "Apellido 18",
        "Direccion"=> "Direccion 18",
        "Edad"=> 18,
        "Email"=> "Email 18",
        "Horario"=> 1686285833,
        "TEAM"=> "TEAM 18",
        "Trainer"=> "Trainer 18",
        "id"=> "18"
    ];
    
    $data = json_encode($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);
    $DATA = file_get_contents($URL, false, $config);
    echo "<pre>";
    var_dump($DATA);
    echo "</pre>";
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
</head>
<body>
    <div class="container mt-5">
    <form>
        <div class="row one">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre">
                </div>
                <div class="mb-3">
                  <label class="form-label">Apellido</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellido">
                </div>
                <div class="mb-3">
                  <label class="form-label">Direccion</label>
                  <input type="text" class="form-control" name="direccion" placeholder="Ingrese direccion">
                </div>
            </div>
            <div class="col-6">
                <!-- <img src="../img/logo.png" width="100px"> -->
                <h1 class="display-3">Campuslands</h1>
                <div class="mb-3">
                  <label class="form-label">Edad</label>
                  <input type="number" class="form-control" name="edad" placeholder="Ingrese edad">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Ingrese email">
                </div>
            </div>
        </div>
    <div class="two">
        <div class="row">
            <div class="col-6 mb-3">
                <label class="form-label">Horario</label>
                <input type="time" class="form-control" name="hora">
            </div>
            <div class="col"></div>
            <div class="col-1">
                <button type="submit" value="confirmar">&#10004;</button>
            </div>
            <div class="col"></div>
            <div class="col-1">
                <button type="submit" value="eliminar">&#10006;</button>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label class="form-label">Team</label>
              <input type="text" class="form-control" name="team" placeholder="Ingrese team">
           </div>
           <div class="col"></div>
            <div class="col-1">
                <button type="submit" value="editar">&#9999;</button>
            </div>
            <div class="col"></div>
            <div class="col-1">
                <button type="submit" value="buscar">&#128269;</button>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
              <label class="form-label">Trainer</label>
              <input type="text" class="form-control" name="trainer" placeholder="Ingrese trainer">
            </div>
            <div class="col-6 mb-3">
              <label class="form-label">Cedula</label>
              <input type="number" class="form-control" name="cedula" placeholder="Ingrese cedula">
            </div>
        </div>
        </div>
    </form>
    
    <table>
        <thead>
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
            foreach ($variable as $key => $value) {
                echo "<td>$va</td>";
            }
         ?>
        </tbody>
    </table>

</div>

</body>
</html>