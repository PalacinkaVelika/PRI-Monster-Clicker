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
                  <h2 class="display-4"><s>Obchod</s> List příšer</h2>
              </div>
          </div>
          <div class="row justify-content-center">
                <div class="col-6">
                    <img src="imgs/merchant.png" class="img-fluid square-image" alt="Image">
                </div>
          </div>
        </div>
        <div class="inner-container p-3">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h2 class="display-4">Zobrazit list příšer</h2>
              </div>
          </div>
            
          <form action="xmlUploader.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload XML File" name="submit">
        </form>


        </div>
    </div>
</body>
</html>