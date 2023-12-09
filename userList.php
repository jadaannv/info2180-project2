<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>List of Users</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="list-of-users.css">
</head>
<body>
    <header>
    <?php include 'header.php';?>
     </header>
 <div class="container">

 <aside>
  <?php include 'aside.php'; ?>
 </aside>

 <main>
    <div class = "users">
    <h1>Users</h1>
    <button id = "addUser"> + Add User</button>
    </div>
    <div class = userTable>
      <!-- Table to display data from database -->
    </div>
 </main>

</div>



<?php
$host = 'localhost';
$dbname = 'dolphin_crm';
$username = 'root';
$password = 'password123';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password );

$pstmt = $pdo->prepare("SELECT * FROM users");

//$pstmt->bindParam( $country, PDO::PARAM_STR);

$pstmt->execute();

$users = $pstmt->fetchAll();

?>
<table class = user-list-table>
  <?php if($users) ?>
      <tr id = 'row-headings'>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
      </tr>

      <?php foreach ($users as $row): ?>

        <tr>
          <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['role']; ?></td>
          <td><?php echo $row['created_at']; ?></td>
        </tr>

      <?php endforeach; ?>

</table>

</body>
</html>