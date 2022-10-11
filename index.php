<?php
$conexion = mysqli_connect('localhost','root','12345','inmobiliaria');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de derpartamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Listado de derpartamentos</h1>
        <tr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>precio</th>
                    <th>descripcion</th>
                    <th>habitaciones</th>
                    <th>estacionamiento</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="SELECT * from departamentos";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)):
                ?>
                       <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['titulo'] ?></td>
                        <td><?php echo $mostrar['precio'] ?></td>
                        <td><?php echo $mostrar['descripcion'] ?></td>
                        <td><?php echo $mostrar['habitaciones'] ?></td>
                        <td><?php echo $mostrar['estacionamiento'] ?></td>
                        </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>