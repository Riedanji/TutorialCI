<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="<?php echo base_url();?>cPersona/actualizarDatos" method="POST">
        <?php echo "Usuario: ".$this->session->userdata('s_usuario');?>
        <h3>Actualiza tus datos</h3>

        <input type="text" name="txtNombre" placeholder="Nombre"><br><br>
        <input type="text" name="txtApPaterno" placeholder="Apellido Paterno"><br><br>
        <input type="text" name="textApMaterno" placeholder="Apellido Materno"><br><br>
        <input type="text" name="textEmail" placeholder="Correo"><br><br>
        <input type="submit" value="Actualizar">
    </form>
</body>