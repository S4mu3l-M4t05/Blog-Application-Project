<?php include 'templates/header.php' ?>
<title>Blog App - Profile</title>
<main>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-2">
                <?php include 'templates/sidebar.php' ?>
            </aside>
            <div class="col-md-9">
                <div class="container">
                    <h1 class="mt-4">Profile</h1>

                    <form method="post" action="controllers/user_controllers.php">
                        <input type="hidden" name="action" value="update">
                        <div class="mb-3">
                            <label for="newFirstname" class="form-label">New First Name:</label>
                            <input type="text" class="form-control" id="newFirstname" name="newFirstname">
                        </div>

                        <div class="mb-3">
                            <label for="newLastname" class="form-label">New Last Name:</label>
                            <input type="text" class="form-control" id="newLastname" name="newLastname">
                        </div>

                        <div class="mb-3">
                            <label for="newAge" class="form-label">New Age:</label>
                            <input type="number" class="form-control" id="newAge" name="newAge">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Gender:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newGender" id="male" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newGender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newGender" id="other" value="other" checked="checked">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="newUsername" class="form-label">New Username:</label>
                            <input type="text" class="form-control" id="newUsername" name="newUsername">
                        </div>

                        <div class="mb-3">
                            <label for="newEmail" class="form-label">New Email:</label>
                            <input type="email" class="form-control" id="newEmail" name="newEmail">
                        </div>

                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password:</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword">
                        </div>

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        </div>

                        <button type="submit" name="updateAccount" class="btn btn-primary">Update Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
