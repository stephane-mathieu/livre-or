
<?php
  // Initialiser la session
  session_start();
  include('connectedmysql.php');
  include('stock.php');
  if (isset($_SESSION['login'])) {
    $requette = "SELECT * FROM utilisateurs WHERE id = $id";
    $start = mysqli_query($conn, $requette);
    if (isset($start))
      $recuper = mysqli_fetch_all($start);
  }
  if(isset($_POST['submit'])){
    session_unset();
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/index.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg">
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
            <?php
                if(isset($value['login']) == false){
                ?><li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="inscription.php">Inscription</a>
        </li>
        <?php }; ?>
                <?php
                if(isset($value['login']) == false){
                ?><li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="connexion.php">Connexion</a>
        </li>
        <?php }; ?>
            <?php
                if(isset($value['login'])){
                ?><li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="deconnexion.php">Deconnexion</a>
        </li>
        <?php }; ?>
              <?php
                if(isset($value['login'])){
                ?><li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="profil.php">Modifier son profil</a>
        </li>
        <?php }; ?>
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
    <h1 class="text-center  fst-italic text-white">Bienvenue sur votre page  <?php  echo $recuper[0][1] ; ?></h1>

<div class="f1-standings">
    <div class="mini">
        <div class="prem">
            <h1 class="prem2 text-center  mt-5 text-white ">STANDINGS</h3>
        </div>
        <div class="pilot mt-5 ">
                    <div class="hamilton" >
                        <img src="./img/hamilton.png" alt="hamilton">
                        <div class=" hi bg-secondary">
                            <span class="text-white h5">Lewis</span>
                            <img class="img1" src="./img/pays1.png" alt="">
                            <span class="text-white h3"><br>Hamilton</span>
                    </div>
                    </div>
                    <div class="Verstappen">
                    <img src="./img/verstappen.png" alt="Verstappen">
                    <div class=" hi bg-secondary">
                            <span class="te text-white h5">Max</span>
                            <img class="te img1" src="./img/pays2.png" alt="">
                            <span class="te text-white h3"><br>Verstappen</span>
                        </div>
                    </div>
                    <div class="Bottas">
                    <img src="./img/bottas.png" alt="Bottas">
                    <div class=" hi bg-secondary">
                            <span class="text-white h5">Valtteris</span>
                            <img class="img1" src="./img/pays3.png" alt="">
                            <span class="text-white h3"><br>Bottas</span>
                        </div>
                    </div>
        </div>
    </div>
    <ol class="list-group list-group-numbered mx-auto w-75 p-3 ">
    <li class="list-group-item d-flex justify-content-between align-items-start ">
        <div class="ms-2 me-auto">
            <div>Max <strong>Verstappen</strong> Red Bull Racing</div>
            </div>
            <span class=" pts badge rounded-pill">351.5 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div>Lewis <strong>Hamilton</strong> Mercedes</div>
            </div>
            <span class=" pts badge rounded-pill">343.5 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div>Valtteris <strong>Botas</strong> Mercedes</div>
            </div>
            <span class=" pts badge rounded-pill">203 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class=" ms-2 me-auto">
        <div>Sergio <strong>Peres</strong> Red Bull Racing</div>
            
            </div>
            <span class=" pts badge rounded-pill">190 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
        <div>Lando <strong>Norris</strong> McLaren</div>
            
            </div>
            <span class="pts badge  rounded-pill">153 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
        <div>Charles <strong>Leclerc</strong> Ferrari</div>
            
            </div>
            <span class="pts badge  rounded-pill">152 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
        <div>Carlos <strong>Sainz</strong> Ferrari</div>
            </div>
            <span class=" pts badge  rounded-pill">145.5 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
        <div>Daniel <strong>Ricciardo</strong> McLaren</div>
            
            </div>
            <span class="pts badge  rounded-pill">105 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
        <div>Pierre <strong>Gasly</strong> AlphaTauri</div>
            </div>
            <span class="pts badge  rounded-pill">92 PTS</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
        <div>Fernando <strong>Alonso</strong> Alpine</div>
            
            </div>
            <span class="pts badge rounded-pill">77 PTS</span>
        </li>
        </ol>
 
</div>


<div>
</main>
<footer>
<?php   include('./PHP/footer.php'); ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>