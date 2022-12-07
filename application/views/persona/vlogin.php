<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>

    <body>
        <form action="<?php echo base_url();?>clogin/ingresar" method="POST">
            <table>
                <tr>
                    <td><label>Usuario</label></td>
                    <td><input type="text" name="txtusuario"></td>
                </tr>
                <tr>
                    <td><label>Contraseña</label></td>
                    <td><input type="password" name="txtclave"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Ingresar"></td>
                </tr>
            </table>
        </form>
        <?php echo $mensaje;?>
    </body>