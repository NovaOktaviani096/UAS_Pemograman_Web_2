<?php require('../admin/Model1.php');
if (isset($_GET['id_kucing'])) {
    editkucing();
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
    <?php echo (isset($_GET['id_kucing'])) ? "<title>Update user | user</title>" : "<title>Tambah Data | user</title>" ?>
</head>

<body>
<div class="forms">
    <form action="" method="post">
        <table>

            <tr>
                <td>
                    Kategori
                </td>
                <td>
                <input type="text" name="kategori" <?php echo (isset($_GET['id_kucing'])) ?  "value = " . $result[0]["kategori"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Foto
                </td>
                <td>
                    <input type="file" name="foto" <?php echo (isset($_GET['id_kucing'])) ?  "value = " . $result[0]["foto"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>

                    <input type="text" name="nama_kucing" <?php echo (isset($_GET['id_kucing'])) ?  "value = " . $result[0]["nama_kucing"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Umur
                </td>
                <td>
                    <input type="text" name="umur" <?php echo (isset($_GET['id_kucing'])) ?  "value = " . $result[0]["umur"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" <?php echo (isset($_GET['id_kucing'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Keterangan
                </td>
                <td>
                    <input type="text" name="keterangan" <?php echo (isset($_GET['id_kucing'])) ?  "value = " . $result[0]["keterangan"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_kucing'])) {
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
        tambahdatakucing( $_POST['kategori'],$_POST['foto'], $_POST['nama_kucing'], $_POST['umur'], $_POST['alamat'], $_POST['keterangan']);
    }
    if (isset($_POST['update'])) {
        updatekucing($_POST['id_kucing'], $_POST['kategori'] ,$_POST['foto'], $_POST['nama_kucing'], $_POST['umur'], $_POST['alamat'], $_POST['keterangan']);
    }
    ?>
</body>

</html>