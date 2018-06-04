<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class='login'>
      <h2>Sign up</h2>

      <form  role="form" method="POST">
        <input class="hidden" name="controller" value="Register"></input>
        <input class="hidden" name="action" value="register"></input>

        <input name='username' placeholder='Username' type='text'>
        <input name='nama' placeholder='Nama' type='text'>
        <input name='password' placeholder='Password' type='password'>

        <input type='submit' value='Sign Up'>
      </form>
  <a class='create' href="?controller=Login&action=home">Have an account?</a>
    </div>
  </body>
</html>
