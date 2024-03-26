<div class="card">
  <div class="card-header text-center">
    <h3 class="mb-0">Login</h3>
  </div>
  <?php Flasher::flash(); ?>
  <div class="card-body">
    <form action="<?php BASEURL; ?>Auth/login" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="username" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
  </div>
</div>