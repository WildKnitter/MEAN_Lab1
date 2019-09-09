<!DOCTYPE html>
<html lang="en">
<!--Unregister Page for the Hip to be Square Capstone Project.-->
<!--Page to remove a member's registration for a team and have the results post to a JSON file.-->

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

    <!--Heading-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Remove Team Member Registration</h2>
        </header>
    </div>
    <!--container end -->

    <!--Member Delete and Cancel container -->
    <div id="deleteCancelChoice" class="row justify-content-md-center">
        <div class="deleteCancelContainer border border-danger col-md-8">
            <h3>Are you sure you wish to unregister this member?</h3>
            <div id="msgDivDelete"></div>
            <div id="deleteCancelButtons" class="container col-md-4">
                <input class="btn btn-md btn-danger" id="btnYesDelete" name="btnYesDeleteTeam" type="button" value="UNREGISTER">
                <input class="btn btn-md btn-secondary" id="btnCancelAction" name="btnCancelAction" type="button" value="Cancel Action">
            </div>
        </div>
    </div>

    <!--Unregister Form-->
    <div class="row">
        <div class="col-md-8 offset-md-4">
            <form id="unRegisterForm" name="unRegisterForm" method="POST" action="index.php">
                <input type="hidden" id="teamid" name="teamid">
                <br />
                <input type="hidden" id="memberid" name="memberid">
                <br />
                <label for="membername">Member Name</label>
                <input id="membername" name="membername" readonly>
                <br />
                <label for="contactname">Contact Name (If Minor)</label>
                <input id="contactname" name="contactname" readonly>
                <br />
                <label for="email">Email Address</label>
                <input id="email" name="email" readonly>
                <br />
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" readonly>
                <br />
                <label for="age">Member Age</label>
                <input id="age" name="age" readonly>
                <br />
                <label for="gender">Gender</label>
                <input id="gender" name="gender" readonly>
            </form>
        </div>
    </div>

    <!--Buttons-->
    <div class="row">
        <div class="col-md-4 offset-md-5">
            <div id="unRegisterButtons" class="container">
                <input class="btn btn-md btn-danger" id="btnUnRegisterForTeam" name="btnUnRegisterForTeam" type="button" value="Unregister">
                <input class="btn btn-md btn-secondary" id="btnCancel" name="btnCancel" type="button" value="Cancel">
            </div>
        </div>
    </div>

<?php include("inc/footer.php"); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include("inc/includes.php"); ?>

<!--External js script-->
<script src="scripts/unregister.js"></script>

</body>

</html>