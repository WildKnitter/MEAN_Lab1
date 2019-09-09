<!DOCTYPE html>
<html lang="en">
<!--teamdetails page for the Hip to be Square Capstone Project.-->
<!--Page to dynamically create a table for team details as selected from a JSON file.-->

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

    <!--Heading-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Team Details</h2>
        </header>
    </div>
    <!--container end -->

    <!--Register and Edit Team Details Buttons -->
    <div class="row">
        <div class="col-md-6 offset-md-4" >
            <div id="registerUpdateButtons" class="container">
                <input class="btn btn-md btn-success" id="btnRegister" name="btnRegister" type="button" value="Register Here!">
                <input class="btn btn-md btn-primary" id="btnEditTeamDetails" name="btnEditTeamDetails" type="button" value="Edit Team Details">
                <input class="btn btn-md btn-danger" id="btnDeleteTeam" name="btnDeleteTeam" type="button" value="Delete Team">
            </div>
        </div>
    </div>

    <!--Team Delete and Cancel container -->
    <div id="deleteCancelChoice" class="row justify-content-md-center">
        <div class="col-md-7 deleteCancelContainer border border-danger">
            <h3>Are you sure you wish to delete this team?</h3>
            <div id="msgDivDelete"></div>
            <div id="deleteCancelButtons" class="container col-md-4">
                <input class="btn btn-md btn-danger" id="btnYesDelete" name="btnYesDeleteTeam" type="button" value="Delete">
                <input class="btn btn-md btn-secondary" id="btnCancelAction" name="btnCancelAction" type="button" value="Cancel Action">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2 formContainer">
            <!--Table for Team -->
            <form id="detailsForm" name="detailsForm" method="post" action="#">
                <div id="detailsTeam">
                </div>
                <table id="memberTable" class="table table-borderless table-hover">
                    <thead id="memberTableHead">
                    </thead>
                    <tbody id="memberTableBody">
                    </tbody>
                </table>
            </form>
        </div>
    </div>

<!-- FOOTER -->
<?php include("inc/footer.php"); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include("inc/includes.php"); ?>

<!--External js script-->
<script src="scripts/teamdetails.js"></script>

</body>

</html>