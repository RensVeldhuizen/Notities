<?php
    if (isset($_POST)){
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
            </div>
        </nav>
        <form id="contact-form" method="post" action="notitie_submit.php" role="form">
            <section class="bg-dark text-white" id="contact">
                <div class="container">

                    <!-- Row 1 -->
                    <div class="row">
                        <div class="col-lg-4 ml-auto text-center">
                            <div class="form-group">
                                <label for="naambeller">Naam beller:</label>
                                <input id="naambeller" type="text" name="naam" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 mr-auto text-center">
                            <div class="form-group">
                                <label for="bedrijf">Bedrijf:</label>
                                <input id="bedrijf" type="text" name="bedrijf" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Row 2 -->
                    <div class="row">
                        <div class="col-lg-4 ml-auto text-center">
                            <div class="form-group">
                                <label for="telefoon">Telefoon:</label>
                                <input id="telefoon" type="tel" name="telefoon" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 mr-auto text-center">
                            <div class="form-group">
                                <label for="adres">Adres:</label>
                                <input id="adres" type="text" name="adres" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Row 3 -->
                    <div class="row">
                        <div class="col-lg-4 ml-auto text-center">
                            <div class="form-group">
                                <label for="postcode">Postcode:</label>
                                <input id="postcode" type="tel" name="postcode" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 mr-auto text-center">
                            <div class="form-group">
                                <label for="plaats">Plaats:</label>
                                <input id="plaats" type="text" name="plaats" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Row 4-->
                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center">
                            <div class="form-group">
                                <label for="notitie">Notitie:</label>
                                <textarea id="notitie" name="notitie" class="form-control" rows="4"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center">
                            <input type="submit" class="btn btn-success btn-send" value="Opslaan">
                        </div>
                        <div class="col-lg-8 messages"></div>
                    </div>
                </div>
            </section>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
