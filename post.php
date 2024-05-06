<?php include 'templates/header.php'; ?>
<title>Blog App - Post</title>
<main>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-2">
                <?php include 'templates/sidebar.php'; ?>
            </aside>
            <div class="col-md-9">
                <h2>Create a New Post</h2>
                <form method="post" action="controllers/user_controllers.php">
                  <input type="hidden" name="action" value="sendPost">
                  <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>
</main>
<?php include 'templates/footer.php'; ?>