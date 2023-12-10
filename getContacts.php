<?php
$host = 'localhost';
$dbname = 'dolphin_crm';
$username = 'root';
$password = 'password123';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password );
$sql = "SELECT Users.firstname, Users.lastname, Users.email, Contacts.company, Contacts.type, Contacts.title FROM Users JOIN Contacts ON Users.email = Contacts.email;";
$pstmt = $pdo->query($sql);

// Get the filter parameter from the GET request
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

// Prepare the SQL query based on the filter

//All contacts query
if ($filter == 'all') {
    $sql = "SELECT * FROM `contacts` WHERE 1;";
    $pstmt = $pdo->prepare("SELECT * FROM contacts");
} 

//Sales Query
elseif ($filter == 'sales') {
    $sql = "SELECT * FROM `contacts` WHERE type = \"sales lead\";";
    $pstmt = $pdo->prepare($sql);
} 

//Support Query
elseif ($filter == 'support') {
    $sql = "SELECT * FROM `contacts` WHERE type=\"support\";";
    $pstmt = $pdo->prepare($sql);

} 
elseif ($filter == 'assigned_to') {
    // Replace 1 with current user ID
    $sql = "SELECT* FROM contacts WHERE assigned_to=1;";
    $pstmt = $pdo->prepare($sql);
} 
else{
    $pstmt;
}

$pstmt->execute();

// fetch all data
$contacts = $pstmt->fetchAll(PDO::FETCH_ASSOC);


?>
<table class = user-list-table>
  <?php if($contacts) ?>
      <tr id = 'row-headings'>
        <th>Title</th>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th>  </th>
      </tr>

      <?php foreach ($contacts as $row): ?>

        <tr>
        <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['company']; ?></td>
          <td><?php echo $row['type']; ?></td>
          <!-- add the view contact file -->
          <td><a href = 'viewFullContact.php'>View</a>
        </tr>

      <?php endforeach; ?>

</table>
