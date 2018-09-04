<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "solutio_notities";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = 'SELECT * 
            FROM notities 
            ORDER BY id DESC LIMIT 15';

    $query = mysqli_query($conn, $sql);

    if (isset($_POST['zoek'])){
        var_dump($_POST);

    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">

        <!-- Custom Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <title>Notities telefoon</title>
    </head>
    <body id="page-top">
    <nav id="mainNav" class="navbar navbar-light ">
        <div class="container">
            <div class="" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Notitie maken</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bekijken.php">Notitie's bekijken</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline">
                <input id="zoek" class="form-control mr-sm-2" type="search" placeholder="Zoeken" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
            </form>
        </div>
    </nav>
    <section class="bg-dark text-white" id="contact">
        <div class="container w-100 table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Bedrijf</th>
                        <th scope="col">Telefoon</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Plaats</th>
                        <th scope="col">Notitie</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $total = 0;
                while ($row = mysqli_fetch_array($query))
                {

                    echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['naam'].'</td>
                            <td>'.$row['bedrijf'].'</td>
                            <td>'.$row['telefoon'].'</td>
                            <td>'.$row['adres'].'</td>
                            <td>'.$row['postcode'].'</td>
                            <td>'.$row['plaats'].'</td>
                            <td>'.$row['notitie'].'</td>
                          </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>
    </body>
</html>