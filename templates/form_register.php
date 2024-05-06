<form method="post" action="controllers/user_controllers.php" enctype="multipart/form-data">
  <input type="hidden" name="action" value="register">
  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" name="firstname" class="form-control" id="firstname">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="lastname">
  </div>
  <div class="mb-3">
    <label class="form-label">Gender</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
      <label class="form-check-label" for="male">
        Male
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
      <label class="form-check-label" for="female">
        Female
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="other" checked value="other">
      <label class="form-check-label" for="other">
        Other
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" class="form-control" id="age">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" name="username" class="form-control" id="rusername">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="rpassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="rpassword">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Password Confirmation</label>
    <input type="password" name="cpassword" class="form-control" id="cpassword">
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Avatar</label>
    <input type="file" name="file" class="form-control" id="file">
  </div>
  <button type="submit" name="register" id="register" class="btn btn-primary">Submit</button>
</form>
