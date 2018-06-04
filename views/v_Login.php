<html>
<head>
  <title></title>
</head>
<body>
  
  <div class='login'>
    <h2>Sign in</h2>

    <form method="GET">
      <input type="hidden" name="controller" value="Login">
      <input type="hidden" name="action" value="authentication">


      <input name='username' placeholder='Username' type='text' value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" >
      <input name='password' placeholder='Password' type='password' value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>">

      <input type='submit' value='Sign In' name="login">
    </form>

    <a class='create' href="?controller=Register&action=home">Dont have an account?</a>

  </div>
</body>
</html>
