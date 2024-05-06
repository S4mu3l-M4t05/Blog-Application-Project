<?php 
include 'templates/header.php'; 
$userManager = new UserManager();
?>
<title>Blog App - Users</title>
<!-- Add CSS style for cell hover effect -->
<style>
    .hoverable-cell:hover {
        background-color: #f5f5f5;
        cursor: pointer;
    }
</style>
<main>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-2">
                <?php include 'templates/sidebar.php' ?>
            </aside>
            <div class="col-md-9">
                <h1>Users</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $users = $userManager->getAllUsers();
                        foreach ($users as $user) {
                            echo '<tr>';
                            echo '<td><a class="nav-link hoverable-cell" data-toggle="modal" data-target="#userModal" data-username="' . $user['username'] . '">' . $user['username'] . '</a></td>';
                            echo '</tr>';
                            echo '<div class="user-info" id="' . $user['username'] . '-info" style="display: none;">';

                            // Display avatar
                            echo '<div class="col-md-6">';
                            echo '<img src="' . $user['avatar'] . '" alt="' . $user['username'] . '\'s Profile Picture" class="img-fluid">';
                            echo '</div>';

                            // Display other user information
                            echo '<div class="col-md-6">';
                            echo '<p><strong>Username:</strong> ' . $user['username'] . '</p>';
                            echo '<p><strong>First Name:</strong> ' . $user['firstname'] . '</p>';
                            echo '<p><strong>Last Name:</strong> ' . $user['lastname'] . '</p>';
                            echo '<p><strong>Age:</strong> ' . $user['age'] . '</p>';
                            echo '<p><strong>Gender:</strong> ' . $user['gender'] . '</p>';
                            echo '</div>';

                            echo '</div>';
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal for displaying user info -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-width" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php include 'templates/footer.php' ?>
