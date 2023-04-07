
<div class="container">
    <h1>Ordenes</h1>
        <a href="/nueva-orden" class="btn btn-success">Crear Nueva Orden</a>
    <table class="table">
        <tr>
            <th>Orden ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Descripcion</th>
            <th>Fecha Inicio</th>
            <th>Detalles</th>
            <th>Ruta_archivos</th>
        </tr>
        <tr>
        <?php foreach ($resultado as $orden): ?>
        <tr>
            <td><?php echo $orden['ID']; ?></td>
            <td><?php echo $orden['Nombre']; ?></td>
            <td><?php echo $orden['Email']; ?></td>
            <td><?php echo $orden['Descripcion']; ?></td>
            <td><?php echo $orden['Fecha_Inicio']; ?></td>
            
            <td><a  class="btn btn-info" href="/admin-orden-detalle/<?php echo $orden['ID']; ?>">Ver Detalles</a></td>
            <td><?php echo $orden['Ruta_archivos']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
    <h1>Usuarios</h1>
    <table class="table">
        <tr>
            <th>User ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>RFC</th>
            <th>CodPostal</th>
        </tr>
        <tr>
        <?php foreach ($resultado2 as $orden): ?>
        <tr>
            <td><?php echo $orden['ID']; ?></td>
            <td><?php echo $orden['Nombre']; ?></td>
            <td><?php echo $orden['Email']; ?></td>
            <td><?php echo $orden['Contrasena']; ?></td>
            <td><?php echo $orden['RFC']; ?></td>
            <td><?php echo $orden['CodPostal']; ?></td>
            
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</div>