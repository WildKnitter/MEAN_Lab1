 <!-- This is the include code for the common <nav> tag for the site - The Navigation Bar-->
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Hip to be Square</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" <?php if($subTitle == "Home"){echo "active";} ?> href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if($subTitle == "Teams"){echo "active";} ?> href="teams.php">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if($subTitle == "Patterns"){echo "active";} ?> href="patterns.php">Patterns</a>
                    </li>
                </ul>
            </div>
        </nav>