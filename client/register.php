<!DOCTYPE html>
<html lang="en">
<!--Register Page for the Hip to be Square Capstone Project.-->
<!--Page to enter member info to register for a team and have the results post to a JSON file.-->

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

    <!--Heading-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Team Member Registration</h2>
        </header>
    </div>
    <!--container end -->

    <h3>Please Fill In Form below</h3>

    <!--Registration Form-->
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <form id="registrationForm" name="registrationForm" method="POST" action="index.php">
                <label for="teamname">Team Name</label>
                <input id="teamname" name="teamname" readonly>
                <input type="hidden" id="teamid" name="teamid">
                <br />
                <label for="membername">Member Name</label>
                <input id="membername" name="membername" type="text" placeholder="John Smith" autofocus required>
                <br />
                <label for="contactname">Contact Name (If Minor)</label>
                <input id="contactname" name="contactname" type="text" placeholder="Jane Smith">
                <br />
                <label for="email">Email Address</label>
                <input id="email" name="email" type="email" placeholder="johnsmith@email.com" required>
                <br />
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" type="tel" placeholder="860-555-1234" required>
                <br />
                <label for="age">Member Age</label>
                <input id="age" name="age" type="number" placeholder="18" required>
                <br />
                <input type="radio" name="gender" id="male" value="Male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female" checked>
                <label for="female">Female</label>
            </form>
        </div>
    </div>

    <!--Message Div for updates-->
    <div class="row">
        <div class="col-md-4 offset-md-5">
            <div id="msgDiv"></div>
            <div id="msgAdd"></div>
        </div>
    </div>

    <!--Buttons-->
    <div class="row">
        <div class="col-md-4 offset-md-5">
            <div id="registrationButtons" class="container">
                <input class="btn btn-md btn-success" id="btnRegisterForTeam" name="btnRegisterForTeam" type="button" value="Register!">
                <input class="btn btn-md btn-secondary" id="btnCancel" name="btnCancel" type="button" value="Cancel">
            </div>
        </div>
    </div>

<!-- FOOTER -->
<?php include("inc/footer.php"); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include("inc/includes.php"); ?>

<!--External js script-->
<script src="scripts/register.js"></script>

</body>

</html>