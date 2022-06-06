<?php require('../admin/Model1.php');
if (isset($_GET['id_adopter'])) {
    editadopter();
}
?>
<?php include '../template/headerform.php';?>
<?php include '../template/sidebarform.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <?php echo (isset($_GET['id_adopter'])) ? "<title>Update adopter | adopter</title>" : "<title>Tambah Data | adopter</title>" ?>
</head>

<body>
<div class="forms">
    <form action="" method="post">
        <table>

            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["username"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Umur
                </td>
                <td>
                    <input type="text" name="umur" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["umur"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    jenis kelamin
                </td>
                <td>

                    <input type="text" name="jenis_kelamin" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["jenis_kelamin"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat

                </td>
                <td>
                    <input type="text" name="alamat" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br>

                </td>
            </tr>
            <tr>
                <td>
                    Penghasilan/bulan

                </td>
                <td>
                    <input type="text" name="penghasilan" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["penghasilan"] . "" : "value = '' "; ?> required> <br>

                </td>
            </tr>
            <tr>
                <td>
                    No Telepon

                </td>
                <td>
                    <input type="text" name="no_telepon" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["no_telepon"] . "" : "value = '' "; ?> required> <br>

                </td>
            </tr>
            <tr>
                <td>
                    Email

                </td>
                <td>
                    <input type="text" name="email" <?php echo (isset($_GET['id_adopter'])) ?  "value = " . $result[0]["email"] . "" : "value = '' "; ?> required> <br>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_adopter'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                    }

                    ?>
                </td>
            </tr>
        </table>
    </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        tambahdataadopter($_POST['username'], $_POST['umur'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['penghasilan'], $_POST['no_telepon'], $_POST['email']);
    }
    if (isset($_POST['update'])) {
        updateadopter($_GET['id_adopter'], $_POST['username'], $_POST['umur'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['penghasilan'], $_POST['no_telepon'], $_POST['email']);
    }
    ?>
</body>

</html>