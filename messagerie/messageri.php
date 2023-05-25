<!DOCTYPE html>
<html>
<head>
  <title>SchoolTalk</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="messageri.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

</style>
<body>
<?php
include('header2.php');  
?>


  <div class="chat-container">
    <div class="chat-header">
      <h2>Prince😂
</h2>
      <p>en ligne<p>
      <a><img id="menu" src="imag/menu.png" alt=""></a>
      <a><img id="appel" src="imag/appel.png" alt=""></a>
      <a><img id="video" src="imag/video.png" alt=""></a>
    </div>
    <div class="chat-messages" id="chat-messages">
      <!-- Les messages s'afficheront ici -->
    </div>
    <div class="chat-input">
      <input type="text" id="message-input" placeholder="Tapez votre message">
      <button onclick="sendMessage()">Envoyer</button>
    </div>
  </div>
  <div class="mss">
  <div class="vertical-menu">
  <a href="#" class="active">Messagerie</a>
  <img id="mess" src="imag/menu.png" alt="">
  <img id="edit" src="imag/edit.png" alt="">
  <div class="form-group">
        <input type="text" class="form-controll" placeholder="Search" name="search">
      </div>
  <a href="#"></a>
  <a href="#"><img id="pp1" src="imag/pp.png" alt=""> Vivi ❤🔥
 <p id="vv">Lorem ipsum dolor sit amet</p></a>
  <a href="#"><img id="pp1" src="imag/pp.png" alt="">Marie ❤🔥
 <p id="vv">Lorem ipsum dolor sit amet</p></a>
  <a href="#"><img id="pp1" src="imag/pp.png" alt="">Lorand 🔥
 </a>
  <a href="#"><img id="pp1" src="imag/pp.png" alt="">Prince ❤
 </a>
  <a href="#"><img id="pp1" src="imag/pp.png" alt="">Michael ❤
</a>
<a href="#"><img id="pp1" src="imag/pp.png" alt="">Christ 🥰

</a>
<a href="#"><img id="pp1" src="imag/pp.png" alt="">Lydia😘

</a>
<a href="#"><img id="pp1" src="imag/pp.png" alt="">Charles😘❤<p id="vv">Lorem ipsum dolor sit amet hffg y rf fcfty</p>
</a>

  </div>
</div>
<div class="notif">
  <div class="notification">

      <div class="avatar"><img src="imag/notif.png" alt=""></div>
      <div class="message">
        <div class="name">Vivi ❤🔥
</div>
        <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <div class="time">10 minutes ago</div>
      </div>
    </div>

    <div class="notification2">
      <div class="avatar"><img src="imag/notif.png" alt=""></div>
      <div class="message">
        <div class="name">Michael ❤🔥
</div>
        <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <div class="time">2 day ago</div>
      </div>
    </div>
  </div>
<div class="grpe">
    <div class="contact-block">
    <a href=""> <img src="imag/profil.png" alt="Photo de profil">
      <p>Nicky</p>
      <p>0758629620</p></a>
    </div>

  
    <div class="contact-block3">
    <a href=""> <img src="imag/grp.png" alt="Photo de profil">
      <p>Science Crew</p>
      <p>52 Membres</p></a>
    </div>

    <div class="contact-block4">
    <a href=""> <img src="imag/grp.png" alt="Photo de profil">
      <p>Stage Alternance Help</p>
      <p>120 Membre</p></a>
    </div>
    <div class="contact-block5">
    <a href=""> <img src="imag/profil.png" alt="Photo de profil">
      <p>Doja Cat</p>
      <p>0758629620</p></a>
    </div>
  <div class="group">
    <h3> Add group</h3><img src="imag/add.png" alt="">
  </div>
</div>  
</body>



<script>
    function sendMessage() {
  var inputElement = document.getElementById('message-input');
  var message = inputElement.value;

  if (message.trim() !== '') {
    var messageElement = document.createElement('div');
    messageElement.classList.add('message');
    messageElement.innerHTML = '<span class="sender">Moi :</span> ' + message + '<br>' +
                               '<span class="timestamp">' + getCurrentTimestamp() + '</span>';

    var chatMessagesElement = document.getElementById('chat-messages');
    chatMessagesElement.appendChild(messageElement);

    inputElement.value = '';
  }
}

function getCurrentTimestamp() {
  var now = new Date();
  var timestamp = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
  return timestamp;
}

</script>
</html>
