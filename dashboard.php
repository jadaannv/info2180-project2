<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="dashboard.css">
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
  <h1>Dashboard</h1>
  <button id = "addUser"> + Add Contact</button>
</div>

<div class = "d-bg">

  <div id = "filter">
    <img src = "filter-icon.png" alt = "Filter icon" height = "30" width = "30">
    <h3 id = filter-by>Filter by:</h3>
    <button id = all>All</button>
    <button id = sales>Sales Leads</button>
    <button id = support>Support</button>
    <button id = assign>Assigned to me</button>
  </div>

  <div class = "results">
      <!-- Results will apppear here -->   
  </div>

</div>
</main>

</div>
</body>
</html>

<?php
$host = 'localhost';
$dbname = 'dolphin_crm';
$username = 'root';
$password = 'password123';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password );

$pstmt = $pdo->prepare("SELECT * FROM contacts");

//$pstmt->bindParam( $country, PDO::PARAM_STR);

$pstmt->execute();

$users = $pstmt->fetchAll();

?>
<table class = user-list-table>
  <?php if($users) ?>
      <tr id = 'row-headings'>
        <th>Title</th>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th>  </th>
      </tr>

      <?php foreach ($users as $row): ?>

        <tr>
        <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['company']; ?></td>
          <td><?php echo $row['type']; ?></td>
          <td><a href = 'contact.php'>View</a>
        </tr>

      <?php endforeach; ?>

</table>



<!--

<table class = "dTable">
      <tr id= "row-headings">
        <th> Name </th>
        <th> Email </th>
        <th> Company </th>  
        <th> Type </th>
        <th>  </th>
      </tr> 
</table> 

-->