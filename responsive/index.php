<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "config.php";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Website mark</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/opmaak.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!--de header-->
<nav class="card-header">
   <img class="images nl-vlag float-left"  src="img/nederland.jpg" height="50" width="100"/>
    <img class="images en-vlag float-right" src="img/engels.jpg" height="50" width="100"/>
    <h1 class="align-content-center">Mark van Steenbeek</h1>
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100 slideshow align-content-center" src="img/achtergornd.jpg"
                         alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100 slideshow align-content-center" src="img/back.jpg"
                         alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100 slideshow align-content-center" src="img/achtergrond.JPG"
                         alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</nav>
<!--einde header-->
<!----de navbar----->
<div class="pos-f-t fixed-bottom">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="badge-dark p-4">
            <a href="#page1">Home</a><br>
            <a href="#page2">projecten</a><br>
            <a href="#page3">opdrachten</a><br>
            <a href="#page4">Contact/reaction</a><br>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<!--eerste page-->


<?php
$querytext = "SELECT * FROM PortofolioText";
$resultaattext = mysqli_query($mysqli, $querytext);
$aantalrijentext = mysqli_num_rows($resultaattext);
?>
<div class="" id="page1" style="height: 190%;">

    <!--Carousel Wrapper-->


    <?php
    while ($rijtext = mysqli_fetch_array($resultaattext)) {
            $firstpageimg = $rijtext["image"];
        ?>
        <div class="aboutme embed-responsive">
            <div class="embed-responsive">
                <p class="p float-left">
                    <img style="height: 40%; width: 40%; margin: 5px" class="float-left img-thumbnail"
                         src="firstpageimg/<?php echo $firstpageimg?>" alt="">
                    <?php
                    echo $rijtext['text'];
                    ?>
                </p>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<!--einde eerste page-->
<!--begin gallerij-->
<div id="page2">
    <h1 class="text-center" style="color: white">Projecten</h1>
    <hr>
                <?php
                $queryGal = "SELECT * FROM PortfolioGal";
                $resultaatgal = mysqli_query($mysqli, $queryGal);
                $aantalrijengal = mysqli_num_rows($resultaatgal);

                $gal_path = "imagesGal/";
           ?>
                <div class="container">
                    <hr class="mt-2 mb-5">
                    <div class="row text-center text-lg-left">
                            <?php
                            while ($images = mysqli_fetch_array($resultaatgal)) {
                                $galfoto = $images['imgname'];
                                $webname = $images['webname'];

                            ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a href="<?php echo $webname;?>" class="d-block mb-4 h-100">
                                 <?php echo "<img class='img-fluid img-thumbnail imgage'  src='$gal_path$galfoto'>";?>
                                </a>
                            </div>
                            <?php }?>
                    </div>
                    </div>
    <!--einde gallerij-->
    <!--begin pagina 3-->
<div class="" id="page3">

    <script>
        function switchen() {
            var mainFrameOne = document.getElementById("LOB");
            var mainFrameTwo = document.getElementById("ICT");

            mainFrameOne.style.display = (
                LOB.style.display == "none" ? "block" : "none");

            mainFrameTwo.style.display = (
                ICT.style.display == "none" ? "none" : "block");

        }
    </script>
    <button onclick="switchen()">Naar opdrachten ict-lab</button>

   <!---LOB opdrachten--->
    <div id="LOB">
        <h1 class="text-center" style="color: white">Opdrachten LOB</h1>
    <?php
    $query = "SELECT * FROM Portfolio ORDER BY opdrachtId DESC ";
    $resultaat = mysqli_query($mysqli, $query);
    $aantalrijen = mysqli_num_rows($resultaat);
    $dir_path = "imagesDB/";

    echo "<div class='container'>";
    echo "<div class='row'>";
    while ($rij = mysqli_fetch_array($resultaat)) {
        $foto = $rij['foto'];
        //de tekst
        echo "<div class='opdrachten col card-body' style='margin: 10px'>";
        echo $rij ['datum'], "<br>", "Mark van Steenbeek";
        echo "<h2>", $rij['title'], "</h2>";
        if ($rij['foto'] == '') {
        } else {
            echo "<a href='$dir_path$foto'><img class='img-thumbnail img-LOB' src='$dir_path$foto'></a>";
        }
        echo "<div class='textdiv'>";
        echo "<p>" . $rij['text'] . "</p>";

        echo "</div>";
        ?>
        <br>
        <br>
        <?php
        echo "</div>";

        echo "<br>";
    }
    echo "</div>";
    echo "</div>";
    ?>
    </div>
    <!---ICT Opdrachten--->
    <div id="ICT">
        <h1 class="text-center" style="color: white">Opdrachten ICT</h1>
    </div>

</div>  <!--einde page 3-->

    <!-----pagina 4----->
    <div id="page4">

<h1 class="text-center">Contact</h1>



        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="contact_box">
                        <img class="profile" src="img/ik.jpeg" alt="">
                       <p>
                        name: Mark van steenbeek<br>
                        Email: markvs@hotmail.nl<br>
                        phoneNumber: 0622026840<br>
                        adres:      <;hidden><br>
                        more info email me   <br>
                       </p>
                    </div>
                </div>
                <div class="col-md-2"></div>

                <div class="col-md-4 p-0" >
                    <div class="container reactieform">
                        <h2>reactie plaatsen</h2>
                        <form action= "reactieverwerk.php" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="name">name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="str">bericht:</label>
                                <textarea class="form-control" id="str" placeholder="Enter youre story" name="str"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-2">

                </div>

                <div class="col-md-4 reactie">
                    <?php
                    $queryReact = "SELECT * FROM PortfolioReactie ORDER BY id DESC ";
                    $resultaatReact = mysqli_query($mysqli, $queryReact);
                    $aantalrijenReact = mysqli_num_rows($resultaatReact);
                    while ($rijReact = mysqli_fetch_array($resultaatReact)) {
                        echo "<div class='w-75 card align-content-center p-1 shadow'>";
                        echo "<b>" .$rijReact['name']."</b>". "<br>";
                        echo $rijReact['bericht']. "<br>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>

</body>
</html>