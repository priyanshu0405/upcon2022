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

            <div class="row justify-content-center mb-5">
                <div class="col-12 heading-section text-center ftco-animate text-uppercase">
                    <h2>CONFERENCE COMMITTEE</h2>
                </div>


            </div>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Chief Patron</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/naghabushan.jpg" alt="" style="height:20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Prof. P. Nagabhushan</h5>
                        <p class="card-text">Director, IIIT Allahabad</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem;  margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/sriniwas.jpg" alt="" style="height:15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Sri Niwas Singh</h5>
                        <p class="card-text">IIT Kanpur</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/test2.jpeg" alt="" style="height:250px;">
                    <div class="card-body">
                        <h5 class="card-title">test</h5>
                        <p class="card-text">IIT Kanpur</p>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Patron</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/jrkumar.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. J. Ramkumar </h5>
                        <p class="card-text">IIT Kanpur</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/gc.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. G.C Nandi</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

                <!-- <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/ust.jpeg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. U.S Tiwari</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div> -->

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/aksingh.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof Asheesh Kumar Singh</h5>
                        <p class="card-text">MNNIT Allahabad</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/kvs.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Kumar Vaibhav Srivastava </h5>
                        <p class="card-text">IIT Kanpur</p>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">General Chair</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/shekhar" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Shekhar Verma</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/satish.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Satish K. Singh</h5>
                        <p class="card-text">Chair, IEEE UP Section</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">General Co-Chair</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/pavan.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Pavan Chakraborty </h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/rajeevKS.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Rajeev Kumar Singh</h5>
                        <p class="card-text">IIT BHU</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/rajat.jpeg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Rajat Kumar Singh</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

            </div>

            <?php 
            $conf_chairs = array(["Dr. Mohammed Javed","javed.jpg","IIIT Allahabad"],["Dr. Navjot Singh","navjot.jpg","IIIT Allahabad"]);
            $conf_convrs = array(["Dr. Muneendra Ojha ","mojha.jpg","IIIT Allahabad"],["Dr. Shiv Ram Dubey ","shiv.jpeg","IIIT Allahabad"],["Dr Prasanna Kumar Mishra","prasanna.jpg","IIIT Allahabad"],["Dr Sunny Sharma","sunny.jpg","IIIT Allahabad"]);

            $local_chairs = array(["Prof Pritish Kumar Varadwaj","pritish.jpg","IIIT Allahabad"]);
            ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Conference Chairs / Secretary</h1>
                <hr>
                <?php display_cards($conf_chairs);?>
            </div>

            <!-- Conference Convener -->
            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Conference Conveners</h1>
                <hr>
                <?php display_cards($conf_convrs);?>

            </div>

            <!-- Local Organizing Chair -->

            <!-- <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Local Organizing Chair</h1>
                <hr>
                <?php display_cards($local_chairs);?>


            </div> -->

            <!-- Advisory or Programme Committee -->
            <?php 
            $advisory = array(
                            ["Dr. B. H. Shekhar","bh.jpg","Mangalore University"],
                            ["Dr. Watanabe Osamu","osamu.jpeg","Takushoku University, Japan"],
                            ["Dr. Thinagaran Perumal","thinagaran.jpg","FSKTM, Malaysia"],
                            ["Dr. Sahana Gowda","shahana.png","BNMIT, Bengaluru"],
                            ["Dr. Ashish Khare","ashish.jpeg","University of Allahabad"],
                            ["Dr. Kiran Raja","kiran.jfif","Norwegian Biometrics Laboratory"],
                            ["Dr. Alireza Alaei","alaei.jfif","Southern Cross University, Australia"],
                            ["Dr. Gaurav Gupta","gupta.jpg","Wenzhou-Kean University, China"],
                            ["Dr. Prabhu Natarajan","prabhu.jfif","DigiPen Institute of Technology Singapore"],
                            ["Dr. Guoqiang Zhong","zhong.jfif","Ocean University of China, China"],
                            ["Dr. Sharad Sinha","sharad.jpg","IIT Goa"],
                            ["Dr. Bunil Kumar Balabantaray","bunil.jpg","NIT Meghalaya"]
                            );
        ?>

            <!-- <div class="row justify-content-center ftco-animate">
            <h1 class="col-12 text-center border-bottom">Advisory or Programme Committee</h1>
            <hr>
            <?php #isplay_cards($advisory);?>

        </div> -->

            <!-- Publicity Chair -->
            <?php 
        $pub_chair = array( ["Dr Amar Nath Yadav","amar.jpg","IIIT Allahabad"],
        ["Dr. Kokila Jagadeesh ","kokila.jpg","IIIT Allahabad"],
         ["Dr. Kavindra Kandpal","kavindra.jpg","IIIT Allahabad"],
        ["Dr. Krishan Kumar","kk_nituk.jpeg","NIT Uttarakhand"]       );

        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Publicity Chair</h1>
                <hr>
                <?php display_cards($pub_chair);?>

            </div>

            <?php 
            $tech = array(["Dr. Vrijendra Singh (Computers)","vrijsingh.jpg","IIIT Allahabad"],["Dr. Manish Goswami (Electronics)","manish.jpeg","IIIT Allahabad"],[]);

            ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Technical Programme Chair</h1>
                <hr>
                <?php display_cards($tech);?>
            </div>

            <?php 
        $publication_chair = array( 
        ["Dr. Varun Kumar Kakar","vkk.png","BTKIT Dwarahat"]          );

        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Publication Chair</h1>
                <hr>
                <?php display_cards($publication_chair);?>

            </div>

            <!-- Sponsorship Chair -->
            <?php 
            $spons = array(["Dr. Anjali Gautam ","anjali.jpg","IIIT Allahabad"],["Dr. Boddepalli SanthiBhushan ","shantiBhushan.jpg","IIIT Allahabad"],["Dr. Amaresh Kumar Sahoo","amaresh.png","IIIT Allahabad"]
            // ,["Dr Abdullah Bin Abu Baker","abdulla.jpeg","IIIT Allahabad"]
        );
        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Sponsorship Chair</h1>
                <hr>
                <?php display_cards($spons);?>

            </div>

            <!-- PhD Colloquium Chair -->
            <?php 
            $phd = array(["Prof. Neetesh Purohit","nitesh.jpeg","IIIT Allahabad"],["Prof. Yogesh Singh Chauhan","ysc.jpg","IIT Kanpur"],["Dr. Nabajyoti Mazumdar (Convener)","nabjyoti.jpeg","IIIT Allahabad"]);
        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">PhD Colloquium Chair</h1>
                <hr>
                <?php display_cards($phd);?>

            </div>

            
            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Workshop / Tutorial Chair</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/anshuanand.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Anshu S. Anand </h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/rameshkb.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr Ramesh Kumar Bhukya </h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Hospitality Chair</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/akhilesh.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Akhilesh Tiwari  </h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Web Management Committee</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/himanshu.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dr Himanshu Maurya</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/priyanshu.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Priyanshu Jain</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

            </div>

            <!-- <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Award Committee</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/ust.jpeg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. U.S Tiwari</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>
                
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/scs.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. S. C. Srivastava</h5>
                        <p class="card-text">IIT Kanpur</p>
                    </div>
                </div>
                
            </div> -->

        </div>

    </section>
    <?php include("layout/footer.php");?>