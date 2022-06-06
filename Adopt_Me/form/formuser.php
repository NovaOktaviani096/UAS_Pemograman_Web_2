<?php require('../admin/Model1.php');
if (isset($_GET['id_user'])) {
    edituser();
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
    <?php echo (isset($_GET['id_user'])) ? "<title>Update user | user</title>" : "<title>Tambah Data | user</title>" ?>
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
                    <input type="text" name="username" <?php echo (isset($_GET['id_user'])) ?  "value = " . $result[0]["username"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="text" name="email" <?php echo (isset($_GET['id_user'])) ?  "value = " . $result[0]["email"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>

                    <input type="text" name="password" <?php echo (isset($_GET['id_user'])) ?  "value = " . $result[0]["password"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_user'])) {
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
        tambahdatauser($_POST['username'], $_POST['email'], $_POST['password']);
    }
    if (isset($_POST['update'])) {
        updateuser($_GET['id_user'], $_POST['username'], $_POST['email'], $_POST['password']);
    }
    ?>
</body>

</html>