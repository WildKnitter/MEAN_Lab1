<!DOCTYPE html>
<html lang="en">
<!--Teams page for the Hip to be Square Capstone Project.-->
<!--Page to dynamically create a table for teams as selected from a JSON file.-->

<head>
    <link rel="icon" href="images/favicon.ico" />
    <title>Hip To Be Square</title>
    <!--JavaScript sheet-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- External CSS -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
</head>

<body>
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

    <!--Heading-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Crafting Teams</h2>
        </header>
    </div>
    <!--container end -->

    <!--Team Dropdown Selections-->
    <form id="teamForm" name="teamForm" method="GET" action="#">
        <div class="row firstRow">
            <div class="col-md-3 offset-md-1">
                <p>Select a Team by Organization</p>
                <select id="teamChoice" name="teamChoice">
                <option value="zero" selected>Select One</option>
            </select>
            </div>
            <div class="col-md-3">
                <p>Select a Team by Craft</p>
                <select id="teamType" name="teamtype">
                <option value="zero" selected>Select One</option>
            </select>
            </div>
            <div class="col-md-2">
                <p>View ALL Teams</p>
                <input class="btn btn-md btn-success" id="btnAllTeams" name="btnAllTeams" type="button" value="HERE!">
            </div>
            <div class="col-md-2">
                <p>Add a Team!</p>
                <a class="btn btn-md btn-primary" href="detailsteamadd.php" role="button">Add HERE!</a>
            </div>
        </div>

        <!--Team Table-->
        <div id="teamDiv">
            <table id="teamTable" class="table table-striped table-borderless table-hover">
                <thead id="teamTableHead">
                </thead>
                <tbody id="teamTableBody">
                </tbody>
            </table>
        </div>
    </form>

    <!-- Illustration -->
    <div class="row">
        <div class="col-lg-10">
            <div id="imgfranklinsquares"></div>
        </div>
    </div>
    <!--row end-->

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Pamela Belknap &middot;</p>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--External js script-->
    <script src="scripts/teams.js"></script>
</body>

</html>