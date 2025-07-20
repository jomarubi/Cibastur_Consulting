<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>
<div class="container mt-5">
    <h2>Listado de Proyectos</h2>
    <table  class="table table-bordered">
                                            
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Estado</th>
            </tr>
        </thead>
   
        <tbody>

        <?php
        $sql = "SELECT * FROM proyectos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['id_proyecto'] ?></td>
                <td><?= htmlspecialchars($row['nombre']) ?></td>
                <td><?= htmlspecialchars($row['descripcion']) ?></td>
                <td><?= $row['fecha_inicio'] ?></td>
                <td><?= $row['fecha_fin'] ?></td>
                <td><?= $row['estado'] ?></td>
            </tr>
        <?php
            endwhile;
        else:
            echo "<tr><td colspan='6'>No hay proyectos registrados.</td></tr>";
        endif;
        $conn->close();
        ?>
  
        </tbody>
         
    </table>

</div>
<?php include 'includes/footer.php'; ?>
