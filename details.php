<?php

    function validate_speaker($speaker){
        $data = ["massimo","sushmita","jiang", "gaurav", "ramakrishnan","guru","kamiya", "umapada","bchanda","kiran"];
        foreach ($data as $key => $value) {
            if($value == $speaker){
                return ["valid"=>"valid","speaker"=>$speaker];
            }
        }
        return ["valid"=>"invalid","speaker"=>"No details found!"];
    }


    if(isset($_GET['speaker'])){
        $speaker = trim($_GET["speaker"]);
        $v = validate_speaker($speaker);

        if(!($v["valid"] == "valid")){
            echo "No details found!";
            exit;

        }

    }
    else {
        echo "No details found!";
        exit;
    }

    $file=file_get_contents("keynote.json");
    $json = json_decode($file);

    $s = $json->speakers->$speaker;
    // print_r($s->name);
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

    <title><?php echo $s->name;?></title>



    <style>
    ul {
        list-style: none;
        /* Remove default bullets */
    }

    ul li::before {
        content: "\2022";
        /* Add content: \2022 is the CSS Code/unicode for a bullet */
        color: red;
        /* Change the color */
        font-weight: bold;
        /* If you want it to be bold */
        font-size: 16pt;
        display: inline-block;
        /* Needed to add space between the bullet and the text */
        width: 1em;
        /* Also needed for space (tweak if needed) */
        margin-left: -1em;
        /* Also needed for space (tweak if needed) */
    }
    </style>
</head>

<body>

    <section>
        <div class="container-sm">

            <div class="row pt-3 mb-2">
                <div class="col-12">
                    <div
                        class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                        <!-- Image -->
                        <div class="col-auto d-none d-lg-block">
                            <img src="images/cvip/committee/<?php echo $s->pic;?>" width="200px" alt="">
                        </div>

                        <!-- Details -->
                        <div class="col p-4 d-flex flex-column position-static">
                            <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                            <h3 class="mb-0"><?php echo $s->name; ?></h3>
                            <div class="mb-1 text-muted"><strong><?php echo $s->designation; ?></strong></div>
                            <address class="mb-auto">
                                <?php 
                            foreach($s->address as $a)
                                echo "<i>".$a."</i><br>"; 
                        ?>
                            </address>
                            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                        </div>

                    </div>

                    <!-- section 1 -->
                    <div class="jumbotron pt-4">
                        <h1 class="lead text-danger font-weight-bolder">Talk: <?php echo $s->topic;?></h1>
                        <?php if(strlen($s->date)>2)
                    echo "<p class=\"lead\">$s->date</p>";
                ?>
                        <hr class="my-4">
                        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured content or information.</p> -->
                        <?php 
                    foreach ($s->abstract as $line) {
                        echo "<p class=\"text-justify\">$line</p>";
                    }
                ?>
                    </div>

                    <!-- section 2 -->

                    <div class="jumbotron pt-4">
                        <h1 class="lead text-danger font-weight-bolder">Speaker's Biography</h1>
                        <hr class="my-4">
                        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured content or information.</p> -->
                        <?php 
                    foreach ($s->biography as $line) {
                        echo "<p class=\"text-justify\">$line</p>";
                    }
                ?>
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