<!DOCTYPE html>
<html>
<head>
<meta button="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  position: fixed;
  height: 100px;
  width: 100%;
  box-shadow: 2px 2px 2px grey;
  z-index: 9999;
}

.header a.logout{
  float: right;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}



@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
header. button{
    float:left;
}
a.name{
    float:left;
    font-size: 22px; 
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    line-height: 25px;
    border-radius: 4px;
}
a.button{
    position: relative;
    left: 100px;
    top: 20px;
    font-size: 20px; 
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none; 
    line-height: 25px;
    border-radius: 4px;
}
</style>
</head>
<body>
<div class="header">
  <div class="header-right">
    <a class="name">Momonare Shelter<br>Cats Adopt</a>
    <a class="button" href="home.php">Home</a>
    <a class="button" href="cat.php">Cats</a>
    <a class="button" href="kategory.php">Profil</a>
    <a class="button" href="admin/index.php">Admin</a>
    <a class="logout" href="index.php">Log out</a>
  </div>
</div>
</body>
</html>