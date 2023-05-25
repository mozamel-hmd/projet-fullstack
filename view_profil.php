<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>SchoolTalk</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  border-radius: 5px;
  height: 50px;
  width: 300px;
  margin-left: 200px;
  margin-top: 100px;
  position: relative;
}
th, td {
  padding: 2px;
  text-align: left;
  /* position: relative; */
  /* margin-top: 200px; */
  /* margin-left: 500px; */
}
table tr{
    height: 50px;
    width: 300px;
}
 .tab{
    width: 1000px;
  height:400px ;
  margin: 20px auto; 
  border: 3px solid #ccc;
  border-radius: 8px;
  padding: 2px; 
  background-color: white;
} 
 button{
     margin-left: 410px;
     margin-top: 30px;
     height: 40px;
     font-size: 20px;
     width: 235px;
     color: white;
     border-radius: 18px;
     position: absolute;
     background-color:#0000FF ;
     font-weight: bold;
    } 
    #im{
        height: 100px;
        position: relative;
        margin-left:460px ;
        margin-top: -550px;
    }
    body{
      background-color: #DDEEEE;
    }
    
</style>
<body>

<?php
include('header2.php');  
?>
  <h2 style="font-weight: bold;" class="text-center">PROFIL</h2>
            
<div class="tab">
    <table style="width:60%">
    <tr>
        <th>Name:</th>
        <td>Bill Gates</td>
    </tr>
    <tr>
        <th>User Name:</th>
        <td>Root</td>
    </tr>
    <tr>
        <th>Bio:</th>
        <td>########</td>
    </tr>
    <tr>
        <th>Genre:</th>
        <td>Femme</td>
    </tr>

    </table>
<div class="input_wrap">
    <a href="profil.php"><button id="button"  type="submit"> Modifier Profil</button></a>
</div>
<a href="profil.php"><img id="im" src="imag/pp.png" alt=""></a>
</div>
</body>
</html>