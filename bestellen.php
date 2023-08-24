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
                <img src="img/4.png" width="100%" height="210px" alt="">
            </div>
        </div>
        <div class="container">
            <?php
            session_start();
            try {
                $db = new PDO("mysql:host=localhost;dbname=zuzu", "root", "");
                if (isset($_POST['send'])){
                    $query = $db->prepare("INSERT INTO customer(fname,lname,email,adress,city,zipcode) VALUES (:fname,:lname,:email, :adress, :city, :zipcode)");
                    if (!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['adress']) && !empty($_POST['zipcode']) && !empty($_POST['city'])){
                        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                        $lastname = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
                        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                        $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);
                        $postCode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING);
                        $woonPlaats = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);

                        if ($email === false){
                            echo "Jouw email is fout ingevuld!";
                        }else{
                            $_SESSION['email'] = $email;
                            $_SESSION['name'] = $name;
                            $_SESSION['lastName'] = $lastname;
                            $_SESSION['adress'] = $adress;
                            $_SESSION['postcode'] = $postCode;
                            $_SESSION['woonplaats'] = $woonPlaats;
                            $query->bindParam("fname", $name);
                            $query->bindParam("lname", $lastname);
                            $query->bindParam("email", $email);
                            $query->bindParam("adress", $adress);
                            $query->bindParam("zipcode", $postCode);
                            $query->bindParam("city", $woonPlaats);
                            if ($query->execute()){
                                header('location: sushideel.php');
                            } else {
                                echo "daar is iets fout gegaan";
                            }


                        }
                    } else{
                        echo "Je heb niet alles ingevuld!";
                    }
                }
            } catch (PDOException $e){
                die("Something is very wrong! Why arent you connected to the database, you monster.... baka!! \(*=W=*)/:" . $e->getMessage());
            }


            ?>
            <form method="post" class="row g-3 needs-validation" novalidate>
                <h1>Klantgegevens</h1>
                <div class="col-md-12">
                  <label for="validationServer01" class="form-label">Voornaam</label>
                  <input id="validationServer01" type="text" name="name"  class="form-control" value="" required>
                    <div class="invalid-feedback">
                        Please provide a first name.
                    </div>
                </div>

                <div class="col-md-12">
                  <label for="validationServer02" class="form-label">Achternaam</label>
                  <input id="validationServer02" type="text" name="lastName"  class="form-control" value="" required>
                    <div class="invalid-feedback">
                        Please provide a last name.
                    </div>
                </div>

                <div class="col-md-12">
                  <label for="validationServer03" class="form-label">Email</label>
                  <div class="input-group">
                    <input id="validationServer03" type="text" name="email"  class="form-control"  aria-describedby="inputGroupPrepend2" required>
                      <div class="invalid-feedback">
                          Please provide a valid email.
                      </div>
                  </div>

                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">Adres</label>
                  <input type="text" name="adress"  class="form-control"  required>
                  <div class="invalid-feedback">
                    Please provide a valid adress.
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="validationServer04" class="form-label">Postcode</label>
                    <input id="validationServer04" type="text" name="zipcode"  class="form-control" required>
                    <div class="invalid-feedback">
                        Please provide a valid zipcode.
                    </div>
                </div>

                  <div class="col-md-12">
                    <label for="validationServer05" class="form-label">Woonplaats</label>
                    <input id="validationServer05" type="text" name="city"  class="form-control" required>
                      <div class="invalid-feedback">
                          Please provide a valid Woonplaats.
                      </div>
                  </div>

                <div class="col-12">
                    <input class="btn btn-dark" name="send" type="submit" value="Ga na sushi's">
                </div>
            </form>
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