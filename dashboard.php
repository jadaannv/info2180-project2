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
  <button id = "addUser"> + Add User</button>
</div>

<div class = "d-bg">
  <div id = "filter">
    <img src = "filter-icon.png" alt = "Filter icon" height = "30" width = "30">
    <h3 id = filter-by>Filter by:</h3>
    <p id = all>All</p>
    <p id = sales>Sales Leads</p>
    <p id = support>Support</p>
    <p id = assign>Assigned to me</p>
  </div>
  <div class = "dashboard">
      <!-- Table to display data from database -->
      <table class = "dTable">
      <tr id= "row-headings">
        <th> Name </th>
        <th> Email </th>
        <th> Company </th>  
        <th> Type </th>
        <th>  </th>
      </tr>  
  </div>
</div>
</main>

</div>
</body>
</html>