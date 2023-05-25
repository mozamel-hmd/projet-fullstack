<!DOCTYPE html>
<html>
<head>
<style>
  /* body{
    background-color: #DDEEEE;
  } */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-top: -15px;
  font-size: 18px;
    overflow:auto; 
  background-color: #D9D9D9;
  color: #111;
}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 18px 20px;
  text-decoration: none;
}

li a:hover {
  background-color: white;
  color: white;
}
li img{
    height: 35px;
}
#logo{
    position: absolute;
    margin-top:13px ;
    margin-left: 5px;
    font-size: 10%;
    width: 20% ;
}
.form-control{
  position: absolute;
  height: 40px;
  width: 450px;
  margin-top: 13px;
  margin-left: 150px;
}
</style>
</head>
<body>
    <div id="logo">
        <a class="active" href="#home"><img src="log.svg" alt=""></a>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>

<ul>
  
  <li><a href="view_profil.php"><img src="imag/profil.png" alt=""></a></li>
  <li><a href="messageri.php"><img src="imag/msg.png" alt=""></a></li>
  <li><a href="settings/index.php"><img src="imag/setting.png" alt=""></a></li>
  <li><a href="#about"><img src="imag/mai.png" alt=""></a></li>
</ul>

</body>
</html>


