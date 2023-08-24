<!doctype html>
<html lang="en">
    <?php
    $day = date("l")

    ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zuzu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                <a class="nav-link active" href="bestellen.php">Bestellen</a>
                </div>
            </div>
            </div>
        </nav>
        <div class="row text-center">
            <div class="col-12">
                <img src="img/4.png" width="100%" height="210x" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-titel">
                               <h3> Bestelling</h3>
                            </div>
                            <div class="card-text">
                                <?php
                                session_start();
                                echo "Maki komkommer:" . $_SESSION['Maki_komkommer'] . "<br>";
                                echo "Maki Avocado:" . $_SESSION['Maki_Avocado'] . "<br>";
                                echo "Nigiri Roll:" . $_SESSION['Nigiri_Zalm'] . "<br>";
                                echo "Philidelfia Rool:" . $_SESSION['Philadelphia_Roll'] . "<br>";
                                echo "Spicy Tuna Rool:" . $_SESSION['Spicy_Tuna_Roll'] . "<br>";
                                echo "Californai Rool:" . $_SESSION['California_Roll'] . "<br>";



                                ?>
                                <p> <b>Totaal:</b> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-titel">
                                <h3>Klantgegevens</h3>
                            </div>
                            <div class="card-text">

                                <?php
                                        echo $_SESSION['name'] . " " . $_SESSION['lastName'] . "<br>";
                                        echo $_SESSION['email'] . "<br>";
                                        echo $_SESSION['adress'] . "<br>";
                                        echo $_SESSION['postcode'] . "<br>";
                                        echo $_SESSION['woonplaats'];

                                ?>
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