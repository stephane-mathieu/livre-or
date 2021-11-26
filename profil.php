
<?php
session_start();
include('stock.php');

$conn = mysqli_connect("localhost", "root", "", "livreor");


if (isset($_SESSION['login'])) {
  $requette = "SELECT * FROM utilisateurs WHERE id = $id";
  $start = mysqli_query($conn, $requette);
  if (isset($start))
    $recuper = mysqli_fetch_all($start);
}
if (!empty($_POST['login'])  && !empty($_POST['password'])) {
  $logintest = $_POST['login'];
  $passwordtest = $_POST['password'];


  $query = "UPDATE `utilisateurs` SET `login` = '$logintest',`password` = '$passwordtest' WHERE `id` = $id ";
  $update = mysqli_query($conn, $query);
  echo "votre profil à été modifié <br>";


  if (isset($update)) {
    $requette = "SELECT * FROM utilisateurs WHERE id = $id";
    $start = mysqli_query($conn, $requette);
    $recuper = mysqli_fetch_all($start);
  }
} else
  echo "Veuillez remplire ces champs vide <br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./CSS/inscription.css" rel="stylesheet" />
  <link href="./CSS/index.css" rel="stylesheet" />
    <link href="./CSS/inscription.css" rel="stylesheet" />
  <!-- boostrap styles distant -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>

</head>

<body class="boudy">
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
    <h1 class="text-center  fst-italic text-white mt-5">Modifié son Profil</h1>
    <div>
      <div class="container col-5 position-absolute top-50 start-50 translate-middle bg-white  ">
        <form class="row g-3" action="" method="post">
          <div class="col-md-4 justify-content-center ">
            <label for="validationDefaultUsername" class="form-label">Login</label>
            <input type="text" class="form-control" value="<?php echo $recuper[0][1]; ?>" name="login" id="validationDefault03" placeholder="écris ton login">
          </div>
          <div class="mb-3 justify-content-center ">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" name="password" value="<?php echo $recuper[0][2]; ?>" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="d-flex  pb-4  justify-content-center ">
            <button class="btn btn-primary" name="submit" type="submit">modifier</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <footer class="py-3 my-4 fixed-bottom">
  <div class="container1">
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
  <!-- boostrap style distant js file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
