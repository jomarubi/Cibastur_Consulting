<?php include 'includes/header.php'; ?>
<div class="container mt-5">
    <h2>Formulario de Registro de Clientes Colaboradores </h2>
    <form method="post" action="send_form.php">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="mb-3">
            <label class="form-label">Empresa</label>
            <input type="text" class="form-control" name="empresa">
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <textarea class="form-control" name="direccion"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>
