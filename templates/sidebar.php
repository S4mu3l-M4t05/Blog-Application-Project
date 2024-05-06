<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
	<div class="row">
		<div class="">
			<?= "<h5>Welcome back, " . $_SESSION['username']."</h5>"; ?>
			<div class="profile-pic mb-3">
				<img src="<?php echo $_SESSION['avatar']; ?>" alt="Avatar" class="img-fluid img-thumbnail profile-pic-img">
			</div>
			<?php
			$userManager = new UserManager();
			$postNumber = $userManager->getPostNumber($_SESSION['username']);			 ?>
			<p>Post Number: <?= $postNumber ?></p>
		</div>
		<div class="d-flex justify-content-center flex-column">
			<form method="post" action="controllers/user_controllers.php" enctype="multipart/form-data">
				<input type="hidden" name="action" value="logout">
				<button type="submit" class="btn btn-primary">Logout</button></a>
			</form>
		</div>
	</div>
<?php else: ?>
	<?php include 'templates/form_login.php' ?>
	<?php include 'templates/modal_register.php' ?>
	<?php endif; ?>