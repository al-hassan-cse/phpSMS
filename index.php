<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="action_page.php" method="post">
      <table>
          <tr>
          <td>Username:</td>
          <td><input class="form-control" name="username"></td>
        </tr>
        <tr>
          <td>Hash:</td>
          <td><input class="form-control" name="hash"></td>
        </tr>
        <tr>
          <td>Sender:</td>
          <td><input class="form-control" name="sender"></td>
        </tr>
        <tr>
          <td>Number:</td>
          <td><input class="form-control" name="number"></td>
        </tr>
        <tr>
          <td>Message:</td>
          <td><textarea class="form-control" name="msg"></textarea></td>
        </tr>
      </table>
      
    <button type="submit" name="abc" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
