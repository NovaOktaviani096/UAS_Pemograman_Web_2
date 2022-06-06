<?php
require('../admin/model1.php');
if (isset($_GET['id_user'])) {
    hapususer($_GET['id_user']);
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
        <a href="../form/formuser.php"><button>Tambah Data</button></a>
            <table border=1>
            <thead>
            <tr>
			    <th>No</th>
                <th>Id user</th>
			    <th>Username</th>
			    <th>Email</th>
			    <th>Password</th>
                <th>Aksi</th>
		    </tr>
            </thead>
            <?= tampildata("user") ?>
            </table>
        </body>
    </head>
</html>