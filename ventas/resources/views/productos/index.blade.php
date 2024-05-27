<!-- resources/views/productos/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Productos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Marca</th>
                    <th>Proveedor</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto A</td>
                    <td>Marca X</td>
                    <td>Proveedor Y</td>
                    <td>100.00</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Producto B</td>
                    <td>Marca Y</td>
                    <td>Proveedor Z</td>
                    <td>150.00</td>
                    <td>30</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</body>
</html>
