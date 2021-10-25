<?php
    
    $FILE = "registered.csv";

    // $csv = file_get_contents($FILE);



    $fp1 = fopen($FILE, "r");
    // $arr2 = fgetcsv($list2);

    $arr1 = array();
    while(!feof($fp1) && ($line = fgetcsv($fp1)) !== false) {
        $arr1[] = $line;
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Registered Papers</title>



    <style>

    </style>
</head>

<body>

    <section>

        <div class="container-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
                <a class="navbar-brand" href="/">CVIP 2020</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/awards.php">CVIP 2020 Awards<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/accepted.php">Accepted Papers </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/registered.php">Registered Papers <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/files/pschedule.pdf" target="_blank">Program Schedule </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/files/paperschedule.pdf" target="_blank">Paper Presentation
                                Schedule</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-center">List of Registered Papers</h1>
                    <hr>
                    <ul class="list-group list-group-flush">

                        <?php foreach($arr1 as $key=>$value){ ?>
                        <li class="list-group-item">
                            <p><strong>#<?=$key+1;?></strong></p>
                            <strong class="lead"><?=$value[1];?></strong><br>
                            <p><?=ucwords($value[4]);?></p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>

        </div> <!-- container -->

    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>