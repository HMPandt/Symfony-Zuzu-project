<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZuZu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <?php
        $day = date('l' );
        $daynum = date('d' );
        $mon = date('F' );
        $year= date('Y' );
        $datum =" " . $day . " " . $daynum . " " . $mon . " " . $year;

        $time = date('G');
        if ($time > 0 && $time < 12){
            $nu = "Goede Ochtend";
        } else if($time >= 12 && $time < 18){
            $nu = "Goedemiddag";
        } else{
            $nu = "Goedeavond";
        }




      ?>
  </head>
  <body>
   <div class="container-fluid p-0">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">Zuzu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="bestellen.php">Bestellen</a>
                </div>
            </div>
            </div>
        </nav>
        <div class="row text-center">
            <div class="col-12">
                <img src="img/4.png" width="100%" height="210x" alt="">
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-sm-12">
                <h1> <?php echo $nu; ?>, welkom bij Zuzu</h1>
                <p class="text-secondary">
                    Wij zijn gespecialiseerd in de Japanse keuken. <br>
                    Het woord "sushi" is afkostig van "su", wat azijn betekent, en "shi" -----rijst.
                </p>
                <h6>
                    <b> Vandaag <?php
                        echo $datum;
                        ?> <br>
                    Bezorgtijd vanaf nu: <?php

                        $h = date('G');
                        $m = date('i');
                        $bezorgtijd = $h + 1;
                        echo $bezorgtijd . ":" . $m;
                        ?> </b>

                </h6>
            </div>
        </div>
        <div class="container">
            <div class="row mt-2">
                <div class="col-sm-6">
                    <div class="card">
                        <img src="img/card1.jpg" alt="">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    Bestel bij ons je sushi's
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img src="img/card2.jpg" alt="">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    Keuze uit verschilende soorten sushi's
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-dark text-center text-light mt-4">
            <div class="col-sm-6 mt-3">
                <p>
                    <b>Contactgegevens</b> <br>
                    Restaurant ZuZu <br>
                    Apelstraat 1 <br>
                    1111AA Fruit <br>
                    zuzu@gmail.com <br>
                    06-12345678    
                </p>
            </div>
            <div class="col-sm-6 mt-3">
                <p>
                    <b>Openingstijden</b> <br>
                    <?php if ($day === "Monday"){
                        echo "<b>Maandag: </b>";
                    } else{
                        echo "Maandag: ";
                    } ?> Gesloten <br>
                    <?php if ($day === "Tuesday"){
                        echo "<b>Dinsdag: </b>";
                    } else{
                        echo "Dinsdag: ";
                    } ?> 16.00-22.00 <br>
                    <?php if ($day === "Wednesday"){
                        echo "<b>Woensdag: </b>";
                    } else{
                        echo "Woensdag: ";
                    } ?> 16.00-22.00 <br>
                    <?php if ($day === "Thursday"){
                        echo "<b>Donderdag: </b>";
                    } else{
                        echo "Donderdag: ";
                    } ?> 16.00-22.00 <br>
                    <?php if ($day === "Friday"){
                        echo "<b>Vrijdag: </b>";
                    } else{
                        echo "Vrijdag: ";
                    } ?> 15.00-22.00 <br>
                    <?php if ($day === "Saturday"){
                        echo "<b>Zaterdag: </b>";
                    } else{
                        echo "Zaterdag: ";
                    } ?> 15.00-22.00 <br>
                    <?php if ($day === "Sunday"){
                        echo "<b>Zondag: </b>";
                    } else{
                        echo "Zondag: ";
                    } ?> Gesloten
                </p>  
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>