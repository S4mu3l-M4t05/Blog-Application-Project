<?php
include 'head.inc.php';
$msgErr = isset($_SESSION['msg_err']) ? $_SESSION['msg_err'] : '';
$msgSuc = isset($_SESSION['msg_suc']) ? $_SESSION['msg_suc'] : '';
unset($_SESSION['msg_err']);
unset($_SESSION['msg_suc']);
$post_err = isset($_SESSION['post_err']) ? $_SESSION['post_err'] : '';
$post_suc = isset($_SESSION['post_suc']) ? $_SESSION['post_suc'] : '';
unset($_SESSION['post_err']);
unset($_SESSION['post_suc']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Blog App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link hover" href="home.php">Home</a>
                    <a class="nav-link hover" href="post.php">Post</a>
                    <a class="nav-link hover" href="profile.php">Profile</a>
                    <a class="nav-link hover" href="users.php">Users</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="popup-alert">
    <?php if (!empty($msgErr)): ?>
        <div class="alert alert-danger alert-dismissible fade show mx-auto">
            <?= $msgErr ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (!empty($msgSuc)): ?>
        <div class="alert alert-success alert-dismissible fade show mx-auto">
            <?= $msgSuc ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>
