
<html lang="en">
<head>
  <title>School talk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
   
    table{
      
      margin-top: 50px;
      border-radius: 10px;
      height: 20px;
      width: 30px;
      stroke: #ffdd33;
      border-color: #ffdd33;
      padding: 70px;
     
      border: solid 2px black;
      
    }
    tr{
      background-color: white;
    }
    td{
      background-color: white;
    }
    button{
      margin-top: 20px;
      border-radius: 6px;
      margin-left: 20px;
      font-size: 25px;
      background-color: #D0C2C2;
      color: black;
    }
    #but{
      font-size: 20px;
      background-color: #D0C2C2;
      border-radius: 5px;
      color: black;
    }
    #butt{
      font-size: 20px;
      background-color: #962E85;
      margin-left: 10px;
      color: white;
      border-radius: 5px;
    }
    tbody{
      color: black;
    }
    .visiteur{
      background-color:#D0C2C2;
      margin-top:30px;
      height: 07%;
      width: 70%;
      margin-left: 248px;
      border-radius: 10px;
    }
    .visiteur h4{
      font-size: 30px;
      color: black;
      margin-left: 13px;
      
    }
    .tb{
      margin-top:-30px;
      background-color: white;
      height: 07%;
      width: 70%;
      margin-left: 250px;
      stroke: #ffdd33;
      
      
      
    }
    #bout{
      margin-top: 18%;
      background-color: #962E85;
      color: white;
      font-size:32px ;
      
    }
    button img{
      margin-left: -68px;
      height: 50px;
      width: 50px;
    }
    
    /* #insta{
      margin-top: 5%;
      
      height: 35px;
      width: 35px;
      right: 50px;
    } */
    
    /* #zap{
     
      margin-top: 5%;
      height: 35px;
      width: 35px;
      margin-bottom: 10px;
      
      
    } */
    .lien a{
      position: relative;
      color: white;
      font-size: 20px;
      top: 40px;
      right: 100px;
      
    }
      
      /* #mail{
      
      margin-top: 5%;
      height: 35px;
      width: 35px;} */
    #bout h5{
      font-size: 20px;
      margin-left: 15px;
      margin-top: -48%;
    }
    body{
      background-color: #DDEEEE;
    }


    

    
  </style>
</head>
<body>
<?php
include('header.php');  
?>
<button>Add Users</button>
<div class="visiteur">
<h4>  Tables des utilsateurs</h4> 
</div>
<div class="tb">
<table class="table">
  <thead>
    
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>user</td>
      <td>user</td>
      <td><button id="but">edit</button><button id="butt">delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>admin</td>
      <td>admin</td>
      <td><button id="but">edit</button><button id="butt">delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>abcd</td>
      <td>abcd</td>
      <td><button id="but">edit</button><button id="butt">delete</button></td>
    </tr>
  </tbody>
</table>
</div>
<button id="bout"><img src="retour.png"><h5>Retour</h5></button>

</body>

</html>
