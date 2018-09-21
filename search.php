<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "solutio_notities";

$conn = mysqli_connect($servername, $username, $password, $dbname);

        $search = $_GET['search'];

        $min_length = 2;

        if (strlen($search) >= $min_length) {
            
            $search = htmlspecialchars($search);

            $raw_results = mysqli_query($conn, "SELECT * FROM notities 
                WHERE (`bedrijf` LIKE '%".$search."%') OR (`postcode` LIKE '%".$search."%') OR (`naam` LIKE '%".$search."%') OR (`telefoon` LIKE '%".$search."%') OR (`notitie` LIKE '%".$search."%') ORDER BY id DESC") or die(mysqli_connect_error());
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
                        <th scope="col">datum</th>
                    </tr>
                </thead>
                <tbody id="userData">
                <?php
                    while ($results = mysqli_fetch_array($raw_results)) {
                        echo '<tr>
                            <td>'.$results['id'].'</td>
                            <td>'.$results['naam'].'</td>
                            <td>'.$results['bedrijf'].'</td>
                            <td>'.$results['telefoon'].'</td>
                            <td>'.$results['adres'].'</td>
                            <td>'.$results['postcode'].'</td>
                            <td>'.$results['plaats'].'</td>
                            <td>'.$results['notitie'].'</td>
                            <td>'.$results['datum'].'</td>
                          </tr>';
                    }
                ?>
                </tbody>
            </table>
</html>
<?php          
        }
        else {
            echo "Minimale lengte is ".$min_length;
        }
?>