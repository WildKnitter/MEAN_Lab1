<!DOCTYPE html>
<html lang="en">
<!--detailsmemberedit page for the Hip to be Square Capstone Project.-->
<!--Page to remove a member's registration for a team and have the results post to a JSON file.-->

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

    <!--Heading-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Edit Member Details</h2>
        </header>
    </div>
    <!--container end -->

    <!--Member Delete and Cancel container -->
    <div id="deleteCancelChoice" class="row justify-content-md-center">
        <div class="deleteCancelContainer col-md-8 border border-danger">
            <h3>Are you sure you wish to unregister this member?</h3>
            <div id="msgDivDelete"></div>
            <div id="deleteCancelButtons" class="container col-md-4">
                <input class="btn btn-md btn-danger" id="btnYesDeleteMember" name="btnYesDeleteMember" type="button" value="UNREGISTER">
                <input class="btn btn-md btn-secondary" id="btnCancelAction" name="btnCancelAction" type="button" value="Cancel Action">
            </div>
        </div>
    </div>

    <!--Unregister Form-->
    <div class="row">
        <div class="col-md-8 offset-md-4">
            <form id="memberDetailsFormEdit" name="memberDetailsFormEdit" method="POST" action="index.php">
                <div class="form-group">
                    <input type="hidden" id="teamid" name="teamid">
                </div>
                <div class="form-group">
                    <input type="hidden" id="memberid" name="memberid">
                </div>
                <div class="form-group">
                    <label for="membername">Member Name</label>
                    <input id="membername" name="membername" autofocus>
                </div>
                <div class="form-group">
                    <label for="contactname">Contact Name (If Minor)</label>
                    <input id="contactname" name="contactname">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="age">Member Age</label>
                    <input id="age" name="age">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input id="gender" name="gender">
                </div>
            </form>
        </div>
    </div>

    <!--Message Div for updates-->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="msgDiv"></div>
            <div id="msgDivEdit"></div>
        </div>
    </div>
    <!--Buttons-->
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div id="editMemberButtons" class="container">
                <input class="btn btn-md btn-success" id="btnEditMember" name="btnEditMember" type="button" value="Update">
                <input class="btn btn-md btn-secondary" id="btnCancel" name="btnCancel" type="button" value="Cancel">
                <input class="btn btn-md btn-danger" id="btnUnRegisterForTeam" name="btnUnRegisterForTeam" type="button" value="Unregister Member">
            </div>
        </div>
    </div>

    <?php include("inc/footer.php"); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>
    <!--External js script-->
    <script src="scripts/detailsmemberedit.js"></script>
</body>

</html>