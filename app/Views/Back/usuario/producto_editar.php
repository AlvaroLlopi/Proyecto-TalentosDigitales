<body class="gradient-custom">
    <div class="container mt-5">
        <div class="row justify-content-md-center">
        <div class="card col-lg-3 bg-dark" style="width: 50%; color:white">
            <center>
                <h2>Editar Producto</h2>
            
            <br>

            <?php if (isset($produc)): ?>
                <form action="<?= base_url("/producto/update/{$produc['id_producto']}") ?>" method="post">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" value="<?= $produc['nombre'] ?>"><br>
                    <label for="descripcion">Descripcion:</label><br>
                    <input type="text" name="descripcion" value="<?= $produc['descripcion'] ?>"><br>
                    <label for="categoria_id">Categoria: 1-Interno 2-Externo:</label><br>
                    <input type="number" name="categoria_id" value="<?= $produc['categoria_id'] ?>"><br>
                    <label for="precio">Precio:</label><br>
                    <input type="number" name="precio" value="<?= $produc['precio'] ?>"><br>
                    <label for="stock">Stock:</label><br>
                    <input type="number" name="stock" value="<?= $produc['stock'] ?>"><br>
                    <br>
                    <input class="btn btn-success" type="submit" value="Guardar Cambios">
                    <a class="btn btn-danger" href="<?php echo base_url('productoListado')?>">Cancelar</a>
                </form>
            <?php else: ?>
                <p>Producto no encontrado.</p>
            <?php endif; ?>
            <br>
            </center>
        </div>
        </div>
    </div>
</body>