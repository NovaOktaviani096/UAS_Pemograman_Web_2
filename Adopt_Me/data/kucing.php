<?php
require('../admin/model1.php');
if (isset($_GET['id_kucing'])) {
    hapuskucing($_GET['id_kucing']);
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
	            width: 1300px;
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
        <a href="../form/formkucing.php"><button>Tambah Data</button></a>
            <table border=1>
            <thead>
            <tr>
			    <th>No</th>
                <th>Id kucing</th>
                <th>Id kategori</th>
                <th>Foto</th>
			    <th>Nama</th>
			    <th>Umur</th>
			    <th>Alamat</th>
                <th>Keterangan</th>
                <th>aksi</th>
		    </tr>
            </thead>
            <?= tampildata("data_kucing") ?>
            </table>
        </body>
    </head>
</html>