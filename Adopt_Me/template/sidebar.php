<html>
    <style>
        .sidebar {
            height: 100%;
            width: 190px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 40px;
            background-color: rgb(17, 17, 17);
            box-shadow: 2px 2px 2px grey;
            z-index: 9999;
        }
        li a{
            display: block;
            color: white;
            font-size: 20px;
        }
        li a:hover{
            color: green;
        }
        
        li {
	        list-style: none;
            position: relative;
            left: 20px;
            top: 60px;
            line-height: 40px;
        }
        option li {
	        list-style: none;
            position: relative;
            left: 20px;
            top: 60px;
            line-height: 40px;
        }
        .name{
            color: #fff;
            text-align:center;
            line-height: 25px;
        }
        b{
            font-size: 25px; 

        }
        d{
            font-size: 18px; 
            position: relative;
            bottom: 5px;
        }
        c{
            font-size: 18px; 

        }
    </style>
    <div class="sidebar">
        <div class="name">
            <b>Momonare</b><br>
            <d>Shelter</d><br>
            <c>Admin</c><br>
        </div class="menu">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="data_adopter.php">Adopters Data</a></li>
        
        <li><a href="data_user.php">Users Data</a></li>
        <li><a href="data_admin.php">Admins Data</a></li>

        <li><a href="data_kucing.php">Cat Data</a></li>
        <li><a href="data_history.php">Adopt History</a></li>

    </div>
</html>
