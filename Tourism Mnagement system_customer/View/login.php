<?php
include ('../control/login_control.php');
?>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Please Fill required information</h1>
  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post">
    <label>Email:</label>
    <input type="email" name="email" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" value="Login">
  </form>
</body>
</html>