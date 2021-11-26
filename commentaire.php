<?php
session_start();
include('connectedmysql.php');
include('contenair.php');
include('stock.php');
?>
<?php
 $DateAndTime = date('Y-m-d h:i:s', time());
// $date = new DateTime('01-12-2015');
// echo($date->format('D-M-Y'));   
if (isset($_POST['submit'])){
    $idd = $value['id'];
    $commm = $_POST['commentaire'];
    $res = mysqli_query($conn, "INSERT INTO commentaires(commentaire,id_utilisateur,date) VALUES ('$commm','$idd','$DateAndTime')");
    header("Location: livre-or.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
<div class="form">
    <form action="" method="POST">
    <textarea  name="commentaire"></textarea>
    <button class="btn btn-primary"  name = "submit" type="submit">Valider</button>
    </form>
<div>
</main>
<footer class=" faz py-3 my-4>
  <div class="container">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-black">Home</a>
    </li>
    <li class="nav-item">
      <a href="https://github.com/stephane-mathieu/livre-or.git" class="nav-link px-2 text-black">Github</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-black">Pricing</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-black">FAQs</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link px-2 text-black">About</a>
    </li>
  </ul>
  <p class="text-center text-black">© 2021 Company, Inc</p>

</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
