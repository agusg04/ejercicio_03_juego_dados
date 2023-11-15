<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Tarea PHP Agustin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <h1>Obtener Productos</h1>

    <?php

    $datos = [
        '1020TV' => ['Codigo' => '1020TV', 'Nombre del producto' => 'Televisor', 'Precio' => '750€', 'Stock' => '30', 'Marca' => 'LG', 'Ultima actualizacion' => '13/10/2022'],
        '1518CM' => ['Codigo' => '1518CM', 'Nombre del producto' => 'Cámara', 'Precio' => '325€', 'Stock' => '22', 'Marca' => 'Nikon', 'Ultima actualizacion' => '10/10/2022'],
        '2050CN' => ['Codigo' => '2050CN', 'Nombre del producto' => 'Consola', 'Precio' => '299€', 'Stock' => '15', 'Marca' => 'Nintendo', 'Ultima actualizacion' => '23/09/2022'],
        '3065PT' => ['Codigo' => '3065PT', 'Nombre del producto' => 'Portátil', 'Precio' => '595€', 'Stock' => '7', 'Marca' => 'Lenovo', 'Ultima actualizacion' => '31/08/2022'],
        '3560AA' => ['Codigo' => '3560AA', 'Nombre del producto' => 'Aire Acondicionado', 'Precio' => '420€', 'Stock' => '18', 'Marca' => 'Daikin', 'Ultima actualizacion' => '09/09/2022'],
        '4090RC' => ['Codigo' => '4090RC', 'Nombre del producto' => 'Robot de Cocina', 'Precio' => '380€', 'Stock' => '35', 'Marca' => 'Moulinex', 'Ultima actualizacion' => '26/09/2022'],
        '5020MC' => ['Codigo' => '5020MC', 'Nombre del producto' => 'Microondas', 'Precio' => '175€', 'Stock' => '8', 'Marca' => 'Candy', 'Ultima actualizacion' => '19/08/2022'],
        '5575RI' => ['Codigo' => '5575RI', 'Nombre del producto' => 'Ratón inalámbrico', 'Precio' => '15€', 'Stock' => '35', 'Marca' => 'Logitec', 'Ultima actualizacion' => '29/09/2022'],
        '6070AV' => ['Codigo' => '6070AV', 'Nombre del producto' => 'Altavoces', 'Precio' => '30€', 'Stock' => '4', 'Marca' => 'Sony', 'Ultima actualizacion' => '03/10/2022'],
        '7025MV' => ['Codigo' => '7025MV', 'Nombre del producto' => 'Móvil', 'Precio' => '500€', 'Stock' => '10', 'Marca' => 'Samsung', 'Ultima actualizacion' => '16/10/2022']
    ];

    function obtenerDatos($datos, $codigos = null, $adicional = null)
    {
        echo "<table style='border-collapse: collapse;'>";

        if ($codigos === null && $adicional === null) {
            echo "<br>";
            echo "<tr>
                    <th>Código</th>
                    <th>Nombre del producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Marca</th>
                    <th>Última actualización</th>
                  </tr>";
            foreach ($datos as $codigo => $producto) {
                echo "<tr>
                        <td>" . $producto['Codigo'] . "</td>
                        <td>" . $producto['Nombre del producto'] . "</td>
                        <td>" . $producto['Precio'] . "</td>
                        <td>" . $producto['Stock'] . "</td>
                        <td>" . $producto['Marca'] . "</td>
                        <td>" . $producto['Ultima actualizacion'] . "</td>
                      </tr>";
            }
            echo "</table>";
        }

        if ($codigos !== null && $adicional === null) {
            echo "<br>";
            echo "<table style='border-collapse: collapse;'>";
            echo "<tr>
                    <th>Código</th>
                    <th>Nombre del producto</th>
                  </tr>";
            foreach ($codigos as $codigo) {
                if (isset($datos[$codigo])) {
                    $producto = $datos[$codigo];
                    echo "<tr>
                            <td>" . $producto['Codigo'] . "</td>
                            <td>" . $producto['Nombre del producto'] . "</td>
                          </tr>";
                }
            }
            echo "</table>";
        }

        if ($adicional !== null) {
            echo "<br>";
            echo "<table style='border-collapse: collapse;'>";
            echo "<tr>
                    <th>Código</th>
                    <th>Nombre del producto</th>
                    <th>Información adicional</th>
                  </tr>";
            foreach ($codigos as $codigo) {
                if (isset($datos[$codigo])) {
                    $producto = $datos[$codigo];
                    echo "<tr>
                            <td>" . $producto['Codigo'] . "</td>
                            <td>" . $producto['Nombre del producto'] . "</td>
                            <td>" . $adicional[$codigo] . "</td>
                          </tr>";
                }
            }
            echo "</table>";
        }
    }

    obtenerDatos($datos);
    obtenerDatos($datos, ['1020TV']);
    obtenerDatos($datos, ['1020TV'], ['1020TV' => '750€']);

    ?>

    <footer>
        <p>Agustin</p>
    </footer>

</body>

</html>
