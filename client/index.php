<!DOCTYPE html>
<html lang="en">
<!--Index Page for the Hip to be Square Capstone Project.-->

<?php
$subTitle = "Home";
?>

<?php include("inc/head.php"); ?>

<body>
    <header>
    <?php include("inc/nav.php"); ?>
    </header>

    <main>
        <!-- Carousel Indicators -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/logcabinwidescreen.png" alt="logcabincrochetafghan">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Hip to be Square!</h1>
                            <p>Make a Square, Warm a Heart!</p>
                            <p><a class="btn btn-lg btn-success" href="teams.php" role="button">Sign up today!</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/crochetafghanwidescreen.jpg" alt="crochetafghan">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Crocheting</h1>
                            <p><a class="btn btn-lg btn-info" href="teams.php" role="button">Sign up today!</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/pinkknittedsquarewidescreen.jpg" alt="knittedsquares">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Knitting</h1>
                            <p><a class="btn btn-lg btn-primary" href="teams.php" role="button">Sign up today!</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- START THE FEATURETTES -->

        <div class="row featurette">
            <div id="firstFeaturette" class="col-md-7">
                <h2 class="featurette-heading">Join the fun, for a good cause...many, in fact!</h2>
                <p class="lead">Hip to be Square consists of teams of knitters and crocheters who are banding together to create squares to be joined into afghans to donate to local organizations in need of warm blankets. We support:</p>
                <!-- Dynamically-created list for the Organizations -->
                <div id="leagueList">
                </div>
            </div>
            <div class="col-md-5">
                <img src="images/franklinknittedsquares500500.jpg" alt="franklinknittedsquares">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">How can I help?</h2>
                <p class="lead">Select an Organization, select a team, and then create an 8" x 8" square!</p>
                <ul>
                    <li>Yarn: any acrylic worsted weight yarn</li>
                    <li>Size: 8" x 8" inches square (20.32 x 20.32 cm)</li>
                    <li>Please include one 25" length of yarn per square</li>
                    <li>Address to send your squares: Hip to be Square, P.O. Box 118 Granby, CT 06035</li>
                </ul>
                <p><a class="btn btn-lg btn-info" href="patterns.php" role="button">View Patterns Here!</a></p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="images/smallyellowgrannysquare500500.jpg" alt="yellowgrannysquare">
            </div>
        </div>

        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->

    </main>
    
<!-- FOOTER -->
<?php include("inc/footer.php"); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include("inc/includes.php"); ?>

<!--External js script-->
<script src="scripts/index.js"></script>

</body>

</html>