<?php
require('../admin/model1.php');
if (isset($_GET['id_history'])) {
    hapushistory($_GET['id_history']);
}
?>
<html>
    <head>
        <title>History Data</title>
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
            <table border=1>
            <thead>
            <tr>
			    <th>No</th>
                <th>Id history</th>
			    <th>id adopter</th>
			    <th>Nama</th>
			    <th>Tanggal Adopsi</th>
                <th>Aksi</th>
		    </tr>
            </thead>
            <?= tampildata("history") ?>
            </table>
        </body>
    </head>
</html>