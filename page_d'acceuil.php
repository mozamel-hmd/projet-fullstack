<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="page_d'acceuil.css" />
    <title>SchoolTalk</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2><span class="bold">School</span>Talk</h2>
        <input type="text" placeholder="Recherche" /><ion-icon class="search-icon" name="search-outline"></ion-icon>
        <div class="navlinks">
        <a href="#" ><ion-icon class="icons" name="home-outline"></ion-icon>Acceuil</a>
        <a href="" ><ion-icon class="icons" name="people-outline"></ion-icon>Contact</a>
        <a href="messagerie/messageri.php" ><ion-icon class="message-icons" name="chatbubbles-outline"></ion-icon>Messagerie</a>
        <a href="" ><ion-icon class="icons" name="settings-outline"></ion-icon>Reglage</a>
        <a href="view_profil.php" ><ion-icon class="profil-icons" name="person-circle-outline" ></ion-icon >Profil</a></div>
      </nav>
    </header>
    <section class="section-gauche">
      <div class="profil">
        <div class="profil-pic">
        </div>
        <h3>Profil name</h3>
        <p>@ProfilName</p>
      </div>

      <div class="container-suggestion">
        <h3>Suggestions</h3>
        <div class="suggestion">
        <div class="pics"></div>
        <div id="profil-name">
        <span>Profil name</span>
        <p>@ProfilName</p>
        </div>
        <button>Add</button>
        </div>
        <div class="suggestion">
        <div class="pics"></div>
        <div id="profil-name">
        <span>Profil name</span>
        <p>@ProfilName</p>
        </div>
        <button>Add</button>
      </div>
        <div class="suggestion">
        <div class="pics"></div>
        <div id="profil-name">
        <span>Profil name</span>
        <p>@ProfilName</p>
        </div>
        <button>Add</button>
      </div>
        <div class="suggestion">
        <div class="pics"></div>
        <div id="profil-name">
        <span>Profil name</span>
        <p>@ProfilName</p>
        </div>
        <button>Add</button>
      </div>
      </div>
    </section>

    <div class="posts">
      <div class="post-pic"></div>
      <input type="text" placeholder="écrire un post" >
      <div id="media">
      <a href=""><ion-icon name="images-outline"></ion-icon>Photo</a>
      <a href=""><ion-icon name="videocam-outline"></ion-icon>Video</a>
      </div>
    </div>

    <section class="section-droite">
      <div class="notification">
        
        <ion-icon name="notifications-outline" id="notif-icon"></ion-icon>
        <h3>Notifications</h3>
        <ion-icon name="menu-outline" id="menu-burger"></ion-icon>

        <div class="notif-bubble1">
          <div id="profil-pics1"></div>
          <span id="title-post">Lorem, ipsum dolor sit amet:</span>
          <p id="description">Accusantium quasi sit arnom...</p>
          <span id="heure">4h</span>
        </div>
        <div class="notif-bubble2">
          <div id="profil-pics2"></div>
          <span id="title-post">Lorem, ipsum dolor sit amet:</span>
          <p id="description">Accusantium quasi sit arnom...</p>
          <span id="heure">1h</span>
        </div>
      </div>

      <div class="groups">
        <h3>Groups</h3>
        <a href="#" class="goups-link"
          ><ion-icon name="add-circle-outline" id="add-icon"></ion-icon> New
          group</a
        >
        <a href="#" class="goups-link"
          ><ion-icon name="person-add-outline" id="join-group"></ion-icon> Join
          group</a
        >
        <a href="#" class="goups-link"
          ><ion-icon name="people-circle-outline" id="group"></ion-icon> Group
          web1</a
        >
        <a href="#" class="goups-link"
          ><ion-icon name="people-circle-outline" id="group"></ion-icon> Group
          data1</a
        >
        <a href="#" class="goups-link"
          ><ion-icon name="people-circle-outline" id="group"></ion-icon> Group
          web2</a
        >
      </div>
    </section>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="settings/settings.js"></script>
  </body>
</html>
