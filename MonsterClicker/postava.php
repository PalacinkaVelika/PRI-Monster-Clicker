<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRI-projekt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['player'])) {
      $_SESSION['player'] = array();
  }
  if (!isset($_SESSION['prisera'])) {
    $_SESSION['prisera'] = array();
  }
  ?>
    <div class="main-container">
    <div class="inner-container p-3">
            <button class="list-group-item list-group-item-action custom-link" style="height: 25%; width: 100%; margin-bottom: 10px;">
                <a href="index.php">Dobrodružství</a>
            </button>
            <button class="list-group-item list-group-item-action custom-link" style="height: 25%; width: 100%; margin-bottom: 10px;">
                <a href="boss.php">Velké příšery</a>
            </button>
            <button class="list-group-item list-group-item-action custom-link" style="height: 25%; width: 100%; margin-bottom: 10px;">
                <a href="obchod.php">Obchod</a>
            </button>
            <button class="list-group-item list-group-item-action custom-link" style="height: 25%; width: 100%;">
                <a href="postava.php">Postava</a>
            </button>
        </div>
        <div class="inner-container p-3">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h2 class="display-4">Postava</h2>
              </div>
          </div>
          <div class="row justify-content-center">
                <div class="col-6">
                    <img src="imgs/adventurer.png" class="img-fluid square-image" alt="Image">
                </div>
          </div>
        </div>
        <div class="inner-container p-3">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h2 class="display-4">Statistiky</h2>
              </div>
          </div>
            <p>Životy: <mark id="hp">100</mark></p>
            <p>Rychlost: <mark id="spd">5</mark></p>
            <p>Hamižnost: <mark id="ham">5</mark></p>
            <p>Zlato: <mark id="loot">7</mark></p>
        </div>
    </div>
    <script>
        const zombossImage = document.getElementById('enemyImg');

        function UpdateHracVisuals(prisera){
          document.getElementById('hp').textContent  = prisera["vlastnosti"]["dmg"];
          document.getElementById('spd').textContent  = prisera["vlastnosti"]["spd"];
          document.getElementById('ham').textContent  = prisera["vlastnosti"]["greed"];
          document.getElementById('loot').textContent  = prisera["vlastnosti"]["gold"];
        }
        const xhr = new XMLHttpRequest();
              xhr.open('GET', 'logic/xmlManipulator.php?function=hracData', true);
              xhr.onload = function() {
                  if (xhr.status >= 200 && xhr.status < 300) {
                      console.log(xhr.responseText);
                      prisera = JSON.parse(xhr.responseText);
                      UpdateHracVisuals(prisera);
                  } else {
                      console.error('Request failed with status:', xhr.status);
                  }
              };
              xhr.send();
       

          
    </script>
</body>
</html>