<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="shortcut icon" type="image/jpg" href="./img/skatebaord.png"/>
    <title>Design your board</title>
  </head>
  <body>
    <main class="contrainer">
        <div class="row">   
            <div class="col-6">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                    <h1 class="display-4"><b>Skatepedia presents</b></h1>
                    <h2 class="display-5">Design your board</h2>
                    <p class="lead">Op deze pagina kan jij je eigen skateboard designen!</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light col-6" style="background-color: #dadadb;">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                 <a class="nav-link active" aria-current="page" href="./index.html">Homepagina</a>
            </div>
          </div>
        </div>
      </nav>
    </nav>
        <div class="row">
            <div class="col-6">
              <form action= "./create.php" method= "post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kleur van het deck</label>
                    <input type="game" class="form-control" id="game1" aria-describedby="emailHelp" placeholder="Enter kleur" name= "kleur1">
                    <small id="emailHelp" class="form-text text-muted">Jouw kleur!</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kleur van de wielen</label>
                    <input type="game" class="form-control" id="game2" aria-describedby="emailHelp" placeholder="Enter kleur" name= "game2">
                    <small id="emailHelp" class="form-text text-muted">Jouw kleur!</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kleur van de griptape</label>
                    <input type="game" class="form-control" id="game3" aria-describedby="emailHelp" placeholder="Enter kleur" name= "game3">
                    <small id="emailHelp" class="form-text text-muted">Jouw kleur!</small>
                </div>
                    <button type="submit" class="btn btn-primary">Versturen</button>
                </form>
            </div>
        </div>    
    </main>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html> 