<?php require('../admin/Model1.php');
if (isset($_GET['id_kategori'])) {
    editkategori();
}
?>
<?php include '../template/headerform.php';?>
<?php include '../template/sidebarform.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="form.css">
    <?php echo (isset($_GET['id_kategori'])) ? "<title>Update kategori | kategori</title>" : "<title>Tambah Data | kategori</title>" ?>
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
                    <input type="text" name="kategori" <?php echo (isset($_GET['id_kategori'])) ?  "value = " . $result[0]["kategori"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_kategori'])) {
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
        tambahdatakategori($_POST['kategori']);
    }
    if (isset($_POST['update'])) {
        updatekategori($_GET['id_kategori'], $_POST['kategori']);
    }
    ?>
</body>

</html>