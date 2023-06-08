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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
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
                <label class="form-label">Fecha</label>
                <input type="time" class="form-control" name="fecha" placeholder="Ingrese fecha">
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
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
        </thead>
        <tbody>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
        </tbody>
    </table>

</div>

</body>
</html>