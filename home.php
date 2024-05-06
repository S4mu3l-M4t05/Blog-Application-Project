<?php include 'templates/header.php' ?>
<title>Blog App - Home</title>
<main>
    <div class="container-fluid">
        <div class="container-fluid row">
            <aside class="col-md-2">
                <?php include 'templates/sidebar.php' ?>
            </aside>
            <div class="col-md-9">
                <?php
                $userManager = new UserManager();
                $lastSevenPosts = $userManager->getLastSevenPosts();
                foreach ($lastSevenPosts as $post) {
                    echo '<div class="card mb-3 blog-card">';
                    echo '<div class="row g-0">';
                    echo '<div class="col-md-auto image-container">';
                    echo '<img src="' . $post['avatar'] . '" class="profile-pic img-fluid" style="max-width: 100%; max-height: 200px; width: auto;" alt="' . $post['avatar'] . '">';
                    echo '</div>';
                    echo '<div class="col flexing">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $post['title'] . '</h5>';
                    echo '<p class="card-text">' . $post['content'] . '</p>';
                    echo '<p class="card-text"><small class="text-body-secondary">Posted by: ' . $post['username'] . '</small></p>';
                    echo '<p class="card-text"><small class="text-body-secondary">Date: ' . $post['post_date'] . '</small></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }                
                ?>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
