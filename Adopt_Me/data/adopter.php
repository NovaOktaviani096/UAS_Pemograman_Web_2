<?php
require('../admin/model1.php');
if (isset($_GET['id_adopter'])) {
    hapusadopter($_GET['id_adopter']);
}
?>
<html>
    <head>
        <title>Cat Data</title>
        <style>
            table{
	            position: absolute;
	            padding: 5px 10px;
	            margin: auto;
	            border-collapse: collapse;
	            height: auto;
	            vertical-align: top;
	            width: 1310px;
	            table-layout: fixed;
	            word-wrap: break-word;
	            background-color: #ffffff;
	            border: #929292;
            }
            th{
	            height: 30px;

            }
            td{
	            height: 30px;
            }
            
        </style>
        <body>
        <a href="../form/formadopter.php"><button>Tambah Data</button></a>
            <table border=1>
            <thead>
            <tr>
			    <th>No</th>
                <th>Id adopter</th>
			    <th>Username</th>
			    <th>Umur</th>
			    <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Penghasilan/bulan</th>
                <th>No.Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
		    </tr>
            </thead>
            <?= tampildata("adopter") ?>
            </table>
        </body>
    </head>
</html>