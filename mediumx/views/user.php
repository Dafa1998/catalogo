<div class="contenedor">
<div class="form" enctype="multipart/form-data">


        <table>
            <thead>
                <tr>
                    <th><h2>N</h2></th>
                    <th><h2>Correo</h2></th>
                    <th><h2>Eliminar</h2></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $key => $users):?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $users['correo_electronico']; ?></td>
                <?php if($users['id_rol']!=1): ?>
                        <td> <a href="?url=user&action=delete&id=<?= $users['id_usuario']?>" class="btn">Eliminar</a> </td>
                    <?php endif ?>
                    <?php if($users['id_rol']==1): ?>
                        <td> <a href="" class="btn btn-a">Eliminar</a> </td>
                    <?php endif ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>

</div>
</body>
</html>