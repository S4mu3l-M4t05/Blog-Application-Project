<form method="post" action="controllers/user_controllers.php">
  <input type="hidden" name="action" value="signin">
  <div class="mb-3">
    <label for="lusername" class="form-label">Username</label>
    <input type="username" name="username" class="form-control" id="lusername">  
  </div>
  <div class="mb-3">
    <label for="lpassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="lpassword">
  </div>
  <button type="submit" name="login" class="btn btn-primary">login</button>
  <button type="button" name="btn-register" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#register-modal">Register</button>
</form>
