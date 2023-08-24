<!doctype html>
<html lang="en">

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
            <form method="post" class="row was-validated g-3">
                <h1>Sushi's bestellen</h1>
                <?php
                session_start();
                try {
                    $db = new PDO("mysql:host=localhost;dbname=zuzu", "root", "");
                    $query = $db->prepare("SELECT * FROM sushi");
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    if (isset($_POST['send'])){
                        if (!empty($_POST['Maki_komkommer']) && !empty($_POST['Maki_Avocado']) && !empty($_POST['Nigiri_Zalm']) && !empty($_POST['Philadelphia_Roll']) && !empty($_POST['Spicy_Tuna_Roll']) && !empty($_POST['California_Roll'])){
                            $maki = filter_input(INPUT_POST, 'Maki_komkommer', FILTER_VALIDATE_INT);
                            $makiAvo = filter_input(INPUT_POST, 'Maki_Avocado', FILTER_VALIDATE_INT);
                            $nigiri = filter_input(INPUT_POST, 'Nigiri_Zalm', FILTER_VALIDATE_INT);
                            $phily = filter_input(INPUT_POST, 'Philadelphia_Roll', FILTER_VALIDATE_INT);
                            $tuna = filter_input(INPUT_POST, 'Spicy_Tuna_Roll', FILTER_VALIDATE_INT);
                            $cali = filter_input(INPUT_POST, 'California_Roll', FILTER_VALIDATE_INT);
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            if ($maki === false){
                                echo "dit is over de max of geen nummer!";
                            }else{
                                $_SESSION['Maki_komkommer'] = $maki;
                                $_SESSION['Maki_Avocado'] = $makiAvo;
                                $_SESSION['Nigiri_Zalm'] = $nigiri;
                                $_SESSION['Philadelphia_Roll'] = $phily;
                                $_SESSION['Spicy_Tuna_Roll'] = $tuna;
                                $_SESSION['California_Roll'] = $cali;
                                header('location: besteld.php');
                            }
                        } else{
                            echo "Je heb niet alles ingevuld! vul het in!!";
                        }
                    }
                } catch (PDOException $e){
                    die("Something is very wrong! Why arent you connected to the database, you monster.... baka!! \(*=W=*)/" . $e->getMessage());
                }
                echo "<div class=col-md-12>";

                foreach ($result as &$data){
                    echo "<b>" . $data["name"] . "</b> " . "( max = 10) " . "<br>";
                    echo "Er is nog [" . $data["amount"] . "] sushi beschikbaar " . "<br>";
                    echo "<img class='images img-fluid' src='img/" . $data['image'] . "'> <br>";
                    echo  "<input type='number' max='10' min='-0'  name='" . $data["name"] . "' class='form-control' id='" . $data["name"] . "' required>" . "<br>" ;
                }
                echo "</div>";


                ?>
                <div class="col-12">
                  <input name="send" class="btn btn-dark" type="submit" value="verzenden">
                </div>
              </form>
        </div>
        <div class="row bg-dark text-center text-light mt-4">
            <div class="col-sm-6 mt-3">
                <p>
                    <b>Contactgegevens</b> <br>
                    Restaurant ZuZu <br>
                    Appelstraat 1 <br>
                    1111AA Fruit <br>
                    zuzu@gmail.com <br>
                    +31 06-12345678
                </p>
            </div>
            <div class="col-sm-6 mt-3">
                <p>
                    <b>Openingstijden</b> <br>
                    <?php
                    $day = date("l");
                    if ($day === "Monday"){
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