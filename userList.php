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
      <table class = user-list-table>
      <tr id=row-headings>
        <th> Name </th>
        <th> Email </th>
        <th> Role </th>
        <th> Created </th>
      </tr>  
   </div>
 </main>

</div>
</body>
</html>