<?php

    include "nav.php";  
require_once "database/connect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare('INSERT INTO users(name,email,password) VALUES(:name,:email,:password)');
$stmt->execute([':name'=> $name, ':email'=> $email,'password'=> $password]);
echo "<br";
echo "user created successfully";
echo "<br";
$lastId = $pdo->lastInsertId();

}


?>

<?php
include "database/connect.php";
   $stmt = $pdo->prepare("SELECT * FROM users");
   $stmt->execute();
   $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
?>
<table border="2"> 
    <tr> 
        <th>ID</th> 
        <th>NAME</th> 
        <th>EMAIL</th> 
        <th>PASSWORD</th> 
       
    </tr> 
    <?php foreach ($users as $user): ?>
    <tr> 
        <td><?php echo htmlspecialchars($user['id']); ?> </td>
        <td><?php echo htmlspecialchars($user['name']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td><?php echo htmlspecialchars($user['password']); ?></td>
        
    </tr> 
    <?php endforeach; ?>
</table>
<?php
include "footer.php";
?>
<a href="contact.php">Add a new user</a>



<form action="users.php" method="get" id="#form">
<h1> DELETE USER </h1>
<input type="number" name="id">
<button>Delete</button>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['id'])){


$id = $_GET["id"];
$id = (int)$id;
$stmt = $pdo->prepare("DELETE FROM users WHERE id= :id");
$stmt->execute([":id" => $id]);
}
?>
<link href="form.css" rel="stylesheet">
<a href="https://wa.me/0790732430" target="_blank"><img src="assets/whatsapp.png" id="wame"></a>
<a href="mailto:jphtkatembo1841@gmail.com" >Email me</a>
<a href="tel:0790732430">Call</a>
<a href="#" download="assets/al.png"><</a>
<a href="https://laxt.me">Psite</a>
<style type="text/css">
#wame{
    width:100px;
    height: 100px;
    
    
}

</style>



