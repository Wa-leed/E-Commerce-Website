<?php

include "db_connection.php";

if (isset($_POST['submit'])) {

  $first_name = $_POST['firstname'];

  $last_name = $_POST['lastname'];

  $email = $_POST['email'];

  $quantity = $_POST['quantity'];

  $size = $_POST['size'];

  $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `quantity`, `size`) VALUES ('$firstname','$lastname','$email','$quantity','$size')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "New record created successfully.";

  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;

  }

  $conn->close();

}

?>

<!DOCTYPE html>

<html>

<body>

  <h2>User info</h2>

  <form action="" method="POST">

    <fieldset>

      <legend>Personal information:</legend>

      First name:<br>

      <input type="text" name="firstname">

      <br>

      Last name:<br>

      <input type="text" name="lastname">

      <br>

      Email:<br>

      <input type="email" name="email">

      <br>

      Quantity:<br>

      <input type="quantity" name="quantity">

      <br>

      Size:<br>

      <input type="radio" name="gender" value="Male">41

      <input type="radio" name="gender" value="Female">42

      <br><br>

      <input type="submit" name="submit" value="submit">

    </fieldset>

  </form>

</body>

</html>