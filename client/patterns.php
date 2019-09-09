<!DOCTYPE html>
<html lang="en">
<!--Patterns Page for the Hip to be Square Capstone Project.-->

<head>
    <link rel="icon" href="images/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hip To Be Square</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- External CSS -->
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Hip to be Square</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teams.php">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patterns.php">Patterns</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--End Navigation Bar-->
    </header>

    <main>
        <!--Heading-->
        <div class="container">
            <header>
                <h1 class="display-3 regularHeader">Hip to be Square!</h1>
                <h2 class="regularSubHeader">Basic Square Patterns</h2>
            </header>
        </div>

        <!-- Intro -->
        <div class="row justify-content-md-center">
            <div class="col-md-7">
                <p class="lead">Although you are free to use any type of pattern, provided you use worsted weight yarn and the square measures 8 inches, the following are basic knitting and crocheting patterns to create 8 inch squares.</p>
            </div>
        </div>

        <!--Buttons to select Knitting or Crocheting Patterns -->
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div id="craftButtons" class="container">
                    <input class="btn btn-md btn-success" id="btnKnitting" name="btnKnitting" type="button" value="Knitting Patterns">
                    <input class="btn btn-md btn-primary" id="btnCrocheting" name="btnCrocheting" type="button" value="Crocheting Patterns">
                    <input class="btn btn-md btn-secondary" id="btnReset" name="btnReset" type="button" value="Reset">
                </div>
            </div>
        </div>

        <section id="knitPatterns">
            <h3>KNIT PATTERNS</h3>

            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <h4>Requirements</h4>
                    <ul>
                        <li>Materials: Worsted-weight acrylic yarn</li>
                        <li>Gauge: 5 stitches = 1 inch</li>
                        <li>Finished size: 8 inches by 8 inches</li>
                        <li>Needle size: 7 needles or size necessary to obtain gauge</li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">GARTER STITCH</h5>
                            <p class="card-text">Cast on 35 stitches.</p>
                            <p class="card-text">Knit every row until piece measures 8 inches.</p>
                            <p class="card-text">Bind off.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">STOCKINETTE STITCH</h5>
                            <p class="card-text">Cast on 35 stitches.</p>
                            <p class="card-text">Row 1: Knit all stitches.</p>
                            <p class="card-text">Row 2: Purl all stitches.</p>
                            <p class="card-text">Repeat these 2 rows until piece measures 8 inches.</p>
                            <p class="card-text">Bind off.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">SEED STITCH</h5>
                            <p class="card-text">Cast on 35 stitches.</p>
                            <p class="card-text">Row 1: Knit 1 stitch, purl the next stitch, knit the next. Continue alternating stitches across the row.</p>
                            <p class="card-text">Repeat this row until piece measures 8 inches.</p>
                            <p class="card-text">Bind off.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <div class="card text-white bg-purple mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">DOUBLE SEED STITCH</h5>
                            <p class="card-text">Cast on 35 stitches.</p>
                            <p class="card-text">Row 1: Knit 1 stitch, purl the next stitch, knit the next. Continue alternating stitches across the row.</p>
                            <p class="card-text">Row 2: Purl 1, knit 1, purl 1, alternating stitches across the row.</p>
                            <p class="card-text">Row 3: Work the same as Row 2.</p>
                            <p class="card-text">Row 4: Work the same as Row 1.</p>
                            <p class="card-text">Repeat this row until piece measures 8 inches.</p>
                            <p class="card-text">Bind off.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="crochetPatterns">
            <h3>CROCHET PATTERNS</h3>

            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <h4>Requirements</h4>
                    <ul>
                        <li>Materials: Worsted-weight acrylic yarn</li>
                        <li>Gauge: 9 stitches = 2 inches</li>
                        <li>Finished size: 8 inches by 8 inches</li>
                        <li>Hook: Size G crochet hook or size necessary to obtain gauge</li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">BASIC SINGLE CROCHET</h5>
                            <p class="card-text">Chain 30 for the foundation chain.</p>
                            <p class="card-text">Row 1: Single crochet in 2nd chain from hook, and in every chain in the foundation row. Chain 1 and turn your work.</p>
                            <p class="card-text">Row 2: Working under the 2 top loops of each stitch in the previous row, single crochet across the row. Chain 1 and turn.</p>
                            <p class="card-text">Repeat Row 2 until piece measures 8 inches.</p>
                            <p class="card-text">Fasten off.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">BASIC DOUBLE CROCHET</h5>
                            <p class="card-text">Chain 27 for the foundation chain.</p>
                            <p class="card-text">Row 1: Double crochet in 3rd chain from hook and in each chain of the foundation row. Chain 2 and turn your work.</p>
                            <p class="card-text">Row 2: Double crochet in each stitch across the row. Chain 2 and turn.</p>
                            <p class="card-text">Repeat Row 2 until piece measures 8 inches.</p>
                            <p class="card-text">Fasten off.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">ALTERNATING HALF DOUBLE CROCHETS</h5>
                            <p class="card-text">Chain 31 for the foundation chain.</p>
                            <p class="card-text">Row 1: Half double crochet into the 3rd chain from the hook, and into each chain across the row. Chain 2 and turn.</p>
                            <p class="card-text">Row 2: Skip 1 stitch. *Work 1 half double in the back loop of the next stitch and 1 half double in the front loop of the next stitch.* Repeat the sequence between the asterisks, ending with 1 half double worked into the top
                                of the turning chain. Chain 2 and turn.</p>
                            <p class="card-text">Repeat Row 2 until piece measures 8 inches.</p>
                            <p class="card-text">Fasten off.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Illustrations -->
        <div id="patternIllustrations" class="row justify-content-md-center">
            <div class="col-lg-4">
                <div id="imgcrochetbabyblanket"></div>
            </div>
            <div class="col-lg-4">
                <div id="imgyellowgrannysquare"></div>
            </div>
        </div>
        <!--row end-->

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2019 Pamela Belknap &middot;</p>
        </footer>
    </main>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--External js script-->
    <script src="scripts/patterns.js"></script>

</body>

</html>