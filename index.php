<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php
    include "nav.php";
    ?>
<main>
<section id="sec1">
   
    <div id="des">
        
    My description
nkjbghgb kjsbkjhhj skagbhdk sajvgvkjh aKJBHJGVB KHSGJHGH gsgjhjgjhvjygvKHJGH jvjkhasdigjhdvh
</div>
     <div id="profile"><img src="assets/al.png" alt="My profile" id="myimage"></div>
</section>
<div id="sec2">
    <div id="p"> Hello</div>
    <div id="time">12:30</div>
</div>
<div id="display" >

</div>
<button onclick="addElements()">Add elements</button>
<input type="text" placeholder="Enter your name">


</main>

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
        <td><?php echo htmlspecialchars($user['id']); ?></td>
        <td><?php echo htmlspecialchars($user['name']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td><?php echo htmlspecialchars($user['password']); ?></td>
    </tr> 
    <?php endforeach; ?>
</table>
<?php
include "footer.php";
?>






<script>
    function addElements(){
        display = document.getElementById("display");
        display.innerHTML += `<div class="w">
   
    <div id="des">
        
    My description
nkjbghgb kjsbkjhhj skagbhdk sajvgvkjh aKJBHJGVB KHSGJHGH gsgjhjgjhvjygvKHJGH jvjkhasdigjhdvh
</div>
     <div id="profile"><img src="assets/al.png" alt="My profile" id="myimage"></div>
</div>
`;
    
    }

</script>
</body>

</html>