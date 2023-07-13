<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <center>

    <form method="post" action="login.php">
      <table>
        <tr>
          <td colspan="2" style="background-color: #33A8BD; padding-bottom: 5px; padding: top 5px;"><label>Login</label></td>
        </tr>
        <tr>
          <td align="center" rowspan="5"><img src="candado.png" alt="imagen de candado" /></td>
          <td><label>Usuario</label></td>
        </tr>

        <tr>
          <td><input type="text" name="txtusuario"></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
        </tr>
        <tr>
          <td><input type="password" name="txtpassword"></td>
        </tr>
        <tr>
          <td><input type="submit" value="ingresar"></td>
        </tr>
      </table>


    </form>
  </center>
</body>

</html>