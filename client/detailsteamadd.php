<!DOCTYPE html>
<html lang="en">
<!--detailsteamadd Page for the Hip to be Square Capstone Project.-->
<!--Page to fill in team details to create a team.-->

<?php include("inc/head.php"); ?>

<body>
<?php include("inc/nav.php"); ?>

    <!--Header-->
    <div class="container">
        <header>
            <h1 class="display-3 regularHeader">Hip to be Square!</h1>
            <h2 class="regularSubHeader">Team Details - Add a New Team</h2>
        </header>
    </div>
    <!--container end -->

    <!--Message Div for updates-->
    <div class="row">
        <div class="col-md-6 offset-md-4">
            <div id="msgDiv"></div>
            <div id="msgAdd"></div>
        </div>
    </div>

    <!-- Illustration -->
    <div class="row">
        <div class="col-md-6 offset-md-3 formContainer">
            <div id="imgcrochetbabyblanket"></div>
        </div>
    </div>
    <!--row end-->

    <!--Entry and Update Table for Team -->
    <form id="detailsInputForm" name="detailsInputForm" method="post" action="#">
        <div class="row">
            <div class="col-md-6 offset-md-3 formContainer">
                <div class="form-group">
                    <label for="teamName">Team Name</label>
                    <input id="teamName" name="teamname" placeholder="Team Name" required>
                </div>
                <div class="form-group">
                    <label for="leagueChoice">Organization</label>
                    <select id="leagueChoice" name="leaguecode">
                    <option value="zero" selected>Select One</option>
                </select>
                </div>
                <div class="form-group">
                    <input type="radio" name="teamtype" id="knitting" value="Knitting">
                    <label for="knitting">Knitting</label>
                    <input type="radio" name="teamtype" id="crocheting" value="Crocheting" checked>
                    <label for="crocheting">Crocheting</label>
                </div>
                <div class="form-group">
                    <label for="managerName">Team Manager Name</label>
                    <input id="managerName" name="managername" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="managerPhone">Team Manager Phone Number</label>
                    <input id="managerPhone" name="managerphone" type="tel" placeholder="860-555-1234" required>
                </div>
                <div class="form-group">
                    <label for="managerEmail">Team Manager Email Address</label>
                    <input id="managerEmail" name="manageremail" type="email" placeholder="johndoe@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="maxTeamMembers">Maximum Team Members</label>
                    <input id="maxTeamMembers" name="maxteammembers" type="number" placeholder="10" required>
                </div>
                <div class="form-group">
                    <label for="minMemberAge">Minimum Member Age</label>
                    <input id="minMemberAge" name="minmemberage" type="number" placeholder="5" required>
                </div>
                <div class="form-group">
                    <label for="maxMemberAge">Maximum Member Age</label>
                    <input id="maxMemberAge" name="maxmemberage" type="number" placeholder="100" required>
                </div>
                <div class="form-group">
                    <input type="radio" name="teamgender" id="male" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" name="teamgender" id="female" value="Female">
                    <label for="female">Female</label>
                    <input type="radio" name="teamgender" id="any" value="Any" checked>
                    <label for="any">Any</label>
                </div>
            </div>
        </div>
    </form>

    <!--Register Button -->
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div id="addCancelButtons" class="container">
                <input class="btn btn-md btn-success" id="btnAddTeam" name="btnAddTeam" type="button" value="Add New Team">
                <input class="btn btn-md btn-secondary" id="btnCancelAdd" name="btnCancelAdd" type="button" value="Cancel">
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include("inc/footer.php"); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("inc/includes.php"); ?>
    <!--External js script-->
    <script src="scripts/detailsteamadd.js"></script>
</body>

</html>