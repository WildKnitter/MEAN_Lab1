<!DOCTYPE html>
<html lang="en">
<!--detailsteamedit Page for the Hip to be Square Capstone Project.-->
<!--Page to dynamically create a table to edit details as selected from a JSON file.-->

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

    <!--Heading-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Edit Team Details</h2>
        </header>
    </div>
    <!--container end -->

    <div class="row">
        <div class="col-md-4 offset-md-4 formContainer">
            <!-- Details Form to Edit -->
            <form id="detailsFormEdit" name="detailsFormEdit" method="post" action="/api/teams">
                <div id="detailsFormCreate">
                </div>
                <!-- End of detailsFormCreate -->
            </form>
            <!-- End of Details Form to Edit -->
        </div>
        <!-- End Classes for Columns -->
    </div>
    <!-- End Row -->

    <!-- Total Members -->
    <div id="memberCount" class="row justify-content-lg-center">
        <div class="col-md-2">
            <p>Members Registered:</p>
        </div>
        <div class="col-md-1">
            <div id="memberCnt"></div>
        </div>
    </div>

    <!-- Details For Members -->
    <div class="row">
        <div class="col-md-6 offset-md-3 formContainer">
            <table id="memberTable" class="table table-borderless table-hover">
                <thead id="memberTableHead">
                </thead>
                <tbody id="memberTableBody">
                </tbody>
            </table>
        </div>
    </div>

    <!--Message Div for updates-->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="msgEdit"></div>
            <div id="msgDiv"></div>
        </div>
    </div>

    <!--Edit and Cancel Buttons -->
    <div class="row">
        <div class="col-lg-4 offset-lg-4 btnjustifycenter">
            <div id="updateCancelButtons" class="container">
                <input class="btn btn-md btn-success" id="btnUpdateTeam" name="btnUpdateTeam" type="button" value="Update">
                <input class="btn btn-md btn-secondary" id="btnCancelUpdate" name="btnCancelUpdate" type="button" value="Cancel">
            </div>
        </div>
    </div>
    <!--End Edit and Cancel Buttons -->

    <?php include("inc/footer.php"); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>

    <!--External js script-->
    <script src="scripts/detailsteamedit.js"></script>
</body>

</html>