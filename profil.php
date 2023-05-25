<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Shool Talk</title>
</head>
<style>
    .image img{
        height: 100px;
       margin-top: 80px;
      margin-left: -700px;
        position: absolute;
    }
    /* .image #avatar{
        height: 70px;
        margin-top: 100px;
        margin-left: -600px;
        
        
    } */
    /* #p1 a{
        position: absolute;
       margin-left: -600px;
       margin-top: 180px;
       color: black;
       font-weight: bold;
    } */
    h2{
      margin-left: -120px;
    }
    #p2 a{
        position: absolute;
       margin-left: -705px;
       margin-top: 180px;
       color: black;
       font-weight: bold;
    }
   .formulaire #input1{
    margin-top: 150px;
    margin-left: 410px;
    height: 40px;
    width: 235px;
    border-radius: 4px;
    position: relative;
   } 

   .formulaire #input2{
    border-radius: 4px;
    margin-left: 410px;
    margin-top: 15px;
    height: 40px;
    width: 235px;
    position: relative;
   } 

   .formulaire textarea{
     margin-left: 410px;
     margin-top: 15px;
     border-radius: 4px;
     position: relative;
   } 
   .formulaire select{
     margin-left: 410px;
     margin-top: 3px;
     height: 40px;
     width: 235px;
     border-radius: 4px;
     position: relative;
    } 
    .formulaire button{
     margin-left: 410px;
     margin-top: 30px;
     height: 40px;
     width: 235px;
     color: white;
     font-size: 20px;
     border-radius: 18px;
     position: absolute;
     background-color:#0000FF;
     font-weight: bold;
    } 
.formulaire #label1{
  margin-top: 155px;
  position: absolute;
  margin-left: 320px;
}
.formulaire #label2{
  position: absolute;
  margin-left: 320px;
  margin-top: 20px;
}
.formulaire #label3{
  margin-top: 25px;
  position: absolute;
  margin-left: 320px;
}
.formulaire #label4{
  margin-top: 10px;
  position: absolute;
  margin-left: 320px;
}
.formulaire{
  max-width: 1400px;
  height:550px ;
  margin: 20px auto; 
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 2px; 
  background-color: white;
}
body{
  background-color: #DDEEEE;
}    


</style>
<body>
<?php
include('header2.php');  
?>
     <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h2 style="font-weight: bold;" class="text-center">Modifier le profil</h2>
          <hr style="height: 1px;color: black;background-color: black; font-weight: bold; margin-left:12px;">
        </div>

        <div class="image">
            <a><img src="imag/pp.png" alt="avatar"></a>
            
            
            <!-- <a><img id="avatar" src="imag/profil.png" alt="profil"></a> -->
        </div>
        <!-- <p id="p1"><a>Edit Profil</a></p> -->
        <p id="p2"><a>Changé le Profil</a> </p>

        <div class="formulaire">
          <form action="">
          <div class="form_wrap">
                <div class="input_grp"></div>
                    <div class="input_wrap">
                        <label id="label1" for="nom">Name</label>
                        <input id="input1" type="text" name="nom">
                    </div>
                    <div class="input_wrap">
                        <label id="label2"for="prenom">User Name</label>
                        <input id="input2"type="text" name="prenom">
                    </div>
                    <div class="input_wrap">
                        <label id="label3" for="bio">Bio</label>
                        <textarea name="Bio" id="" cols="30" rows="0"></textarea>
                    </div>
                    
                    <label id="label4"for="country">Genre</label>
                        <select id="country" name="country">
                          <option value="australia">Homme</option>
                          <option value="canada">Femme</option>
                          <option value="usa">Aucun</option>
                        </select>
                    
                    <div class="input_wrap">
                        <button id="button" type="submit"> Submit</button>
                    </div>
            </div>
          </form>

        </div>
</body>
</html>