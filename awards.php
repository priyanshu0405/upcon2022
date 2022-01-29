<?php
    
    $FILE = "bpapers.csv";

    // $csv = file_get_contents($FILE);



    $fp1 = fopen($FILE, "r");
    // $arr2 = fgetcsv($list2);

    $arr1 = array();
    while(!feof($fp1) && ($line = fgetcsv($fp1)) !== false) {
        $arr1[] = $line;
    }


    $fp2 = fopen("b2papers.csv", "r");
    // $arr2 = fgetcsv($list2);

    $arr2 = array();
    while(!feof($fp2) && ($line = fgetcsv($fp2)) !== false) {
        $arr2[] = $line;
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

    <title>Awards</title>



    <style>
    svg {
        color: maroon;
    }
    </style>
</head>

<body>

    <section>
        <div class="container-sm">

            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
                <a class="navbar-brand" href="/">UPCON 2022</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/awards.php">UPCON 2022 Awards<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/accepted.php">Accepted Papers <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/registered.php">Registered Papers </a>
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
                    <h1 class="display-4 text-center">UPCON 2022 Awards <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                        </svg></h1>
                    <hr>

                    <ul class="list-group list-group-flush">

                        <?php foreach($arr1 as $key=>$value){ ?>
                        <h5 class="p-1"><kbd style="background-color: red;"><?=$value[0];?><kbd></h5>
                        <li class="list-group-item">
                            <p><strong>Paper ID#<?=$value[1];?></strong></p>
                            <strong class="lead"><?=$value[2];?></strong><br>
                            <h6><?=$value[3];?></h6>
                            <p><?=ucwords($value[4]);?></p>
                        </li>
                        <?php }?>
                    </ul>
                    <hr>
                    <div class="col-12 border rounded p-1 bg-dark" style=" display: block;">
                        <h5 class="p-1 m-1"
                            style="width: 100%; color: #fff; font-family: SFMono-Regular,Menlo,Monaco,Consolas,'Liberation Mono','Courier New',monospace">
                            UPCON 2022 Best
                            Paper
                            Award
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach($arr2 as $key=>$value){ ?>
                        <li class="list-group-item">
                            <p><strong>Paper ID#<?=$value[0];?></strong></p>
                            <strong class="lead"><?=$value[1];?></strong><br>
                            <h6><?=$value[2];?></h6>
                            <p><?=ucwords($value[3]);?></p>
                        </li>
                        <?php }?>
                    </ul>
                    <hr>
                    <div class="col-12 border rounded p-1 bg-dark" style=" display: block;">
                        <h5 class="p-1 m-1"
                            style="width: 100%; color: #fff; font-family: SFMono-Regular,Menlo,Monaco,Consolas,'Liberation Mono','Courier New',monospace">
                            UPCON 2022 Best
                            PhD Thesis
                            Award
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="lead">Compression History Estimation and Source Identification for Image and
                                Audio Forensics</strong><br>
                            <h6>Vinay Verma</h6>
                        </li>
                    </ul>

                </div>
            </div> -->
            <h2>TBD</h2>

        </div> <!-- container -->

    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


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