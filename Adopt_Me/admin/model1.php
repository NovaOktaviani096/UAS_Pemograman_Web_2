<?php
require '../config/koneksi.php';

// membuat fungsi tampil
function tampildata($tabel)
{
    $stmt = koneksi()->prepare("SELECT * FROM $tabel");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $no=1;
    if (!empty($result)) {
        if ($tabel == "adopter") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>" ;
                echo "<td>" . $row['id_adopter'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['umur'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['penghasilan'] . "</td>";
                echo "<td>" . $row['no_telepon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td align='center'>";
                echo "<a href='../form/formadopter.php?id_adopter=" . $row['id_adopter'] . "'>edit</a>";
                echo " | ";
                echo "<a href='data_adopter.php?id_adopter=" . $row['id_adopter'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($tabel == "user") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $no++  . "</td>";
                echo "<td>" . $row['id_user'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td align='center'>";
                echo "<a href='../form/formuser.php?id_user=" . $row['id_user'] . "'>edit</a>";
                echo " | ";
                echo "<a href='data_user.php?id_user=" . $row['id_user'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($tabel == "admin") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $no++  . "</td>";
                echo "<td>" . $row['id_admin'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td align='center'>";
                echo "<a href='../form/formadmin.php?id_admin=" . $row['id_admin'] . "'>edit</a>";
                echo " | ";
                echo "<a href='data_admin.php?id_admin=" . $row['id_admin'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($tabel == "data_kucing") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $no++  . "</td>";
                echo "<td>" . $row['id_kucing'] . "</td>";
                echo "<td>" . $row['id_kategori'] . "</td>";
                echo "<td> <img src='../images=" . $row['foto']. "'width='80'> </td>";
                echo "<td>" . $row['nama_kucing'] . "</td>";
                echo "<td>" . $row['umur'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['keterangan'] . "</td>";
                echo "<td align='center'>";
                echo "<a href='../form/formkucing.php?id_kucing=" . $row['id_kucing'] . "'>edit</a>";
                echo " | ";
                echo "<a href='data_kucing.php?id_kucing=" . $row['id_kucing'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($tabel == "history") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $no++  . "</td>";
                echo "<td>" . $row['id_history'] . "</td>";
                echo "<td>" . $row['id_adopter'] . "</td>";
                echo "<td>" . $row['nama_adopter'] . "</td>";
                echo "<td>" . $row['tgl_adopt'] . "</td>";
                echo "<td align='center'>";
                echo "<a href='../form/formhistory.php?id_history=" . $row['id_history'] . "'>edit</a>";
                echo " | ";
                echo "<a href='data_history.php?id_history=" . $row['id_history'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($tabel == "kategori") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $no++  . "</td>";
                echo "<td>" . $row['id_kategori'] . "</td>";
                echo "<td>". $row['kategori'] . "</td>";
                echo "<td align='center'>";
                echo "<a href='../form/formkategori.php?id_kategori=" . $row['id_kategori'] . "'>edit</a>";
                echo " | ";
                echo "<a href='data_kategori.php?id_kategori=" . $row['id_kategori'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }
    }
}


function tambahdataadopter($username, $umur, $jenis_kelamin, $alamat, $penghasilan, $no_telepon, $email)
{
    $sql = "INSERT INTO `adopter` (`username`, `umur`, `jenis_kelamin`, `alamat`,`penghasilan`,`no_telepon`,`email`) VALUES (:username,:umur,:jenis_kelamin,:alamat,:penghasilan,:no_telepon,:email)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':username' => $username, ':umur' => $umur, ':jenis_kelamin' => $jenis_kelamin, ':alamat' => $alamat, ':penghasilan' => $penghasilan, ':no_telepon' => $no_telepon, ':email' => $email));
    if (!empty($result)) {
        header('location:../admin/data_adopter.php');
    }
}

function tambahdatauser($username,$email,$password){
    $sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES (:username,:email,:password)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':username' => $username, ':email' => $email, ':password' => $password));
    if (!empty($result)) {
        header('location:../admin/data_user.php');
    }
}

function tambahdataadmin($username,$email, $password)
{
    $sql = "INSERT INTO `admin` (`username`, `email`, `password`) VALUES (:username,:email,:password)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':username'=> $username, ':email'=> $email, ':password'=> $password));

    if (!empty($result)) {
        header('location:../admin/data_admin.php');
    }
}
function tambahdatakucing($id_kategori, $foto, $nama_kucing, $umur, $alamat, $keterangan)
{
    $sql = "INSERT INTO `data_kucing` (`id_kategori`, `foto`, `nama_kucing`, `umur`, `alamat`, `keterangan`) VALUES (:foto, :id_kategori :nama_kucing,:umur,:alamat,:keterangan)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_kategori'=> $id_kategori, ':foto'=> $foto, ':nama_kucing'=> $nama_kucing,':umur'=> $umur,':alamat'=> $alamat,':keterangan'=> $keterangan));

    if (!empty($result)) {
        header('location:../admin/data_kucing.php');
    }
}
function tambahdatahistory($id_history, $id_adopter, $nama_adopter, $tgl_adopt)
{
    $sql = "INSERT INTO `history` (`id_history`, `id_adopter`, `nama_adopter`, `tgl_adopt`) VALUES (:id_history,:id_adopter,:nama_adopter,:tgl_adopter)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_history' => $id_history , ':id_adopter'=> $id_adopter, ':nama_adopter'=> $nama_adopter, ':tgl_adopt'=> $tgl_adopt));

    if (!empty($result)) {
        header('location:data_history.php');
    }
}
function tambahdatakategori($kategori)
{
    $sql = "INSERT INTO `kategori` (`kategori`) VALUES (:kategori)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':kategori'=> $kategori));

    if (!empty($result)) {
        header('location:../admin/data_kategori.php');
    }
}

function editadopter(){
    $stmt = koneksi()->prepare("SELECT * FROM adopter WHERE id_adopter =". $_GET['id_adopter']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
function editadmin()
{
    $stmt = koneksi()->prepare("SELECT * FROM admin where id_admin=" . $_GET["id_admin"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function edituser()
{
    $stmt = koneksi()->prepare("SELECT * FROM user where id_user=" . $_GET["id_user"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editkucing()
{
    $stmt = koneksi()->prepare("SELECT * FROM data_kucing where id_kucing=" . $_GET["id_kucing"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editkategori(){
    $stmt = koneksi()->prepare("SELECT * FROM kategori WHERE id_kategori =". $_GET['id_kategori']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}


function updateadopter($id_adopter, $username, $umur, $jenis_kelamin, $alamat, $penghasilan, $no_telepon, $email) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE adopter SET username='" . $username ."', umur='" . $umur . "', jenis_kelamin='" . $jenis_kelamin . "', alamat='" . $alamat ."', penghasilan='" . $penghasilan ."', no_telepon='" . $no_telepon . "', email='" . $email .   "' WHERE id_adopter = ". $id_adopter
    );
    $res = $pdo_statement->execute();
    if (!empty($res)) {
        header('location:../admin/data_adopter.php');
    }
}

function updateadmin($id_admin,$username,$email,$password)
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE admin SET username='" . $username . "', email='" . $email . "', password='" . $password . "' where id_admin=" . $id_admin
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:../admin/data_admin.php');
    }
}
function updateuser($id_user,$username,$email,$password)
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE user set username='" . $username . "', email='" . $email . "', password='" . $password . "' where id_user=" . $id_user
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:../admin/data_user.php');
    }
}

function updatekucing($id_kucing, $id_kategori, $foto, $nama_kucing, $umur, $alamat, $keterangan) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE data_kucing SET id_kategori='" . $id_kategori ."',foto='" . $foto ."', nama_kucing='" . $nama_kucing . "', umur='" . $umur ."', alamat='" . $alamat ."', keterangan='" . $keterangan .   "' WHERE id_kucing = ". $id_kucing
    );
    $result = $pdo_statement->execute();
    if (!empty($result)) {
        header('location:../admin/data_kucing.php');
    }
}
function updatekategori($id_kategori, $kategori) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE kategori SET kategori='" . $kategori . "' WHERE id_kategori = ". $id_kategori
    );
    $res = $pdo_statement->execute();
    if (!empty($res)) {
        header('location:../admin/data_kategori.php');
    }
}

function hapusadopter($id_adopter)
{
    $stmt = koneksi()->prepare("DELETE FROM adopter where id_adopter=" . $id_adopter);
    $result = $stmt->execute();
    if ($result) {
        header('location:data_adopter.php');
    }

}
function hapususer($id_user)
{
    $stmt = koneksi()->prepare("DELETE FROM user where id_user=" . $id_user);
    $result = $stmt->execute();
    if ($result) {
        header('location:data_user.php');
    }
}
function hapusadmin($id_admin)
{
    $stmt = koneksi()->prepare("DELETE FROM admin WHERE id_admin=" . $id_admin);
    $result = $stmt->execute();
    if ($result) {
        header('location:data_admin.php');
    }
}
function hapuskucing($id_kucing)
{
    $stmt = koneksi()->prepare("DELETE FROM kucing WHERE id_kucing=" . $id_kucing);
    $result = $stmt->execute();
    if ($result) {
        header('location:data_kucing.php');
    }
}
function hapushistory($id_history)
{
    $stmt = koneksi()->prepare("DELETE FROM history WHERE id_history=" . $id_history);
    $result = $stmt->execute();
    if ($result) {
        header('location:data_history.php');
    }
}
function hapuskategori($id_kategori)
{
    $stmt = koneksi()->prepare("DELETE FROM kategori WHERE id_kategori=" . $id_kategori);
    $result = $stmt->execute();
    if ($result) {
        header('location:data_kategori.php');
    }
}