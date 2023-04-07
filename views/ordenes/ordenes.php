
<div class="container">
    <h1>Ordenes</h1>
        <a href="/nueva-orden" class="btn btn-success">Crear Nueva Orden</a>
    <table class="table">
        <tr>
            
            <th>Descripcion</th>
            <th>Fecha Inicio</th>
            <th>Modificar</th>
            <th>Detalles</th>
        </tr>
        <tr>
        <?php foreach ($resultado as $orden): ?>
        <tr>
            <td><?php echo $orden['Descripcion']; ?></td>
            <td><?php echo $orden['Fecha_inicio']; ?></td>
            
            <td><a href="/modificar-orden/<?php echo $orden['ID']; ?>" class="btn btn-primary">Modificar</a></td>
            <td><a  class="btn btn-info"href="/detalle-orden/<?php echo $orden['ID']; ?>">Ver Detalles</a></td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</div>
