<!DOCTYPE html>
<html lang="en">
<!--Teams page for the Hip to be Square Capstone Project.-->
<!--Page to dynamically create a table for teams as selected from a JSON file.-->
<?php
$subTitle = "Teams";
?>

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

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
<?php include("inc/footer.php"); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include("inc/includes.php"); ?>

<!--External js script-->
<script src="scripts/teams.js"></script>

</body>

</html>