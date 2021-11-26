<?php
session_start();
include('connectedmysql.php');
include('stock.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/index.css" rel="stylesheet" />
    <link href="./CSS/commentaire.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="ka">
<header>
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class=" test container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="./img/f1white.png"  alt="">
            </a>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="connexion.php">Connexion</a>
            </li>
           <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="deconnexion.php">Deconnexion</a>
              </li>
          
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="profil.php">Modifier son profil</a>
              </li>
             <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="livre-or.php">livre-or</a>
             </li>
          </ul>
          <form class="d-flex">
            <input class="for " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success text-white" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
<main>
<div class="countere">
      <div class="comm">
            <?php
            //requette pour recup tous les commentaires//
            $querry = mysqli_query($conn, "SELECT commentaires.id,login,commentaire,date from utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER By date DESC");
            $result1 = mysqli_fetch_all($querry,MYSQLI_ASSOC);
            //requette pour recup tous les commentaires//
            foreach($result1 as $valued){
                  $valued['commentaire'];
                  $valued['id_utilisateur'];
                  $valued['date'];
                  $valued['login'];
            echo  "posté le " .$valued['date']." par ".$valued['login']." : ".$valued['commentaire']."<br>";
            }
            ?>
      <div>
                  <?php
                  if(isset($value['login'])){
            echo "<a href='commentaire.php'>Ajouter un commentaire</a>";
                  }
            ?>
      
      <div class="video">
            <iframe src="https://www.youtube.com/embed/h7gm9aqXabw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      </div>
</div>

</main>
<footer class="py-3 my-4 fixed-bottom">
  <div class="container">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-white">Home</a>
    </li>
    <li class="nav-item">
      <a href="https://github.com/stephane-mathieu/livre-or.git" class="nav-link px-2 text-white">Github</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-white">Pricing</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-white">FAQs</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-white">About</a>
    </li>
  </ul>
  <p class="text-center text-white">© 2021 Company, Inc</p>

</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



