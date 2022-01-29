<?php 

function display_cards($arr){
     foreach($arr as $items){
            echo "<div class=\"card\" style=\"width: 15rem; margin: 5px;\">";
                echo "<img height=\"250px\" class=\"card-img-top\" src=\"images/cvip/committee/".$items[1]."\" alt=\"\">";
                echo "<div class=\"card-body\">";
                    echo "<h5 class=\"card-title\">".$items[0]."</h5>";
                    echo "<p class=\"card-text\">".$items[2]."</p>";
                echo "</div>";
            echo "</div>";
    }
}



function reviewers(){
    $fp1 = fopen('reviewer1.csv', "r");
    $fp2 = fopen('reviewer2.csv', "r");
    // $arr2 = fgetcsv($list2);

    $arr1 = array();
    $arr2 = array();
    while(!feof($fp1) && ($line = fgetcsv($fp1)) !== false) {
        $arr1[] = $line;
    }
    while(!feof($fp2) && ($line = fgetcsv($fp2)) !== false) {
        $arr2[] = $line;
    }

    foreach($arr1 as $item){
        echo "<li class=\"col-lg-6 float-left\"><strong>".ucwords(strtolower($item[0]))."</strong>, {$item[1]}</li>";
    }
   foreach($arr2 as $item){
         echo "<li class=\"col-lg-6 float-left\"><strong>".ucwords(strtolower($item[0]))."</strong>, {$item[1]}</li>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>UPCON 2022</title>
    <?php include("layout/meta.php");?>
</head>

<body>
    <?php include("layout/nav.php");?>

    <!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/cvip/l03.jpg');background-size: cover;" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
<div class="col-md-9 ftco-animate pb-5">
<h1 class="mb-3 bread" style="color:white">Committee</h1>
<p class="breadcrumbs"><span class="mr-2"><a style="color:white" href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span style="color:white">Committee <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section> -->



    <section class="ftco-section" style="padding:10px; margin-top: 140px;">
        <!-- <div class="overlay"></div> -->
        <div class="container">


            <div class="row justify-content-center ftco-animate">

                <h1 class="col-12 text-center border-bottom">Technical Programme Committee</h1>
                <hr>
                <ol class="col-lg-12">
                    <?php reviewers();?>
                </ol>
            </div>
            

        

        </div>

    </section>
    <?php include("layout/footer.php");?>