<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

</head>
<body>
    <?php
    include ("nav.php");
    ?>
<form action="users.php" method="post">
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <button>Submit</button>
</form>






    <?php
include "footer.php";
?>

</body>
</html>