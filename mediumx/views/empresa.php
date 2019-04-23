<div class="contenedor">
<div class="form" enctype="multipart/form-data">


        <table>
            <thead>
                <tr>
                    <th><h2>N</h2></th>
                    <th><h2>Empresa</h2></th>
                    <th><h2>Eliminar</h2></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $key => $users):?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $users['nombre_empresa']; ?></td>
                        <td> <a href="?url=empresa&action=delete&id=<?= $users['id_empresa']?>" class="btn">Eliminar</a> </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>

</div>
</body>
</html>