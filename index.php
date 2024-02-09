<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud en php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fortawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">TSE</h1>
    <div class="container-fluid row">
        <form class="col-4" p-3>
            <h3 class="text-center text-secondary">Busca Departamento</h3>
            <fieldset disabled>
                <legend>Escribe El Nombre</legend>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Departamentos</label>
                    <input type="text" class="form-control" name="sede">
                </div>

                <br>
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Buscar</button>
            </fieldset>
        </form>
        <div class="col-8 p-4"></div>
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">DUI</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CARGO</th>
                    <th scope="col">DEPARTAMENTO</th>
                    <th scope="col">CDT</th>
                    <th scope="col">DISTRITO</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <?php include "modelo/conexion.php";$_sqli = $_conexion->query("select * usuarios");while ($datos = $_sqli->fetch_object()) {?>
                <tbody>

                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-small btn-warning">editar</a>
                            <a href="" class="btn btn-small btn-danger">eliminar</a>
                        </td>
                    </tr>

                </tbody>
            <?php } ?>
        </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>