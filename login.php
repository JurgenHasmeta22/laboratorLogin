<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laborator 3</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
  <section class="login-wrapper">
    <form id="form-login" action="controllers/users/loginUser.php" method="post">
      <h2>Login</h2>
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      <div class="input-box">
        <label for="">Username</label>
        <input
          type="text"
          name="username"
          placeholder="Shkruani username"
          required
        />
      </div>
      <div class="input-box">
        <label for="">Password</label>
        <input
          type="password"
          name="password"
          placeholder="Shkruani passwordin"
          required
        />
      </div>
      <button type="submit" >Logohu</button>
    </form>
  </section>
</body>
</html>