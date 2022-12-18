
<p>
<table border="1" width="100%">
<tr>
  <td align="center" width="50%">

  Sign in to edit your member info:
  <form action="/tunes.org/members/edit.php" method="POST">
  <table border="0">
    <tr>
      <td>Alias (case sensitive):</td>
      <td><input type="text" name="alias"></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <input type="submit" value="Edit My Member Info">
  </form>

  </td>

  <td align="center" width="50%">

  Forgot password?
  <form action="/tunes.org/members/mailpw.php" method="POST">
  <table border="0">
  <tr>
    <td>Alias (case sensitive):</td>
    <td><input type="text" name="alias"></td>
  </tr>
  </table>
  <input type="submit" value="Mail Password">
  </form>

</table>
