<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full COntact Details </title>
</head>
<body>

<?php
include "aside.php";

if (isset($_POST["id"])) {
    include "connection.php";
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    $stringForQuery = "SELECT * FROM contacts WHERE id = '$id'";
    $grab = $conn->query($stringForQuery);
    $rush = $grab->fetch(PDO::FETCH_ASSOC);
    $id_createdBy = $rush['created_by'];
    $stringForQuery = "SELECT firstname , lastname FROM users WHERE id = '$id_createdBy'";
    $id_createdBy = $conn->query($stringForQuery);
    $maker = $id_createdBy->fetch(PDO::FETCH_ASSOC);

    echo '<div id="fullContactHolder">';
    echo '<h2><img src="default picture.png" alt="default contact icon">' . $rush['title'] . ' ' . $maker['firstname'] . ' ' . $maker['lastname'] . '</h2>';
    echo '<p>Created on ; by ' . $maker['firstname'] . ' ' . $maker['lastname'] . ';</p>';
    echo '<p>Updated on ; </p>';
    echo '</div>';

    echo '<table id="contactDetails">';
    echo '<tr>';
    echo '<th>Email <br>' . $rush['email'] . '</th>';
    echo '<th>Telephone <br>' . $rush['telephone'] . '</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Company <br>' . $rush['company'] . '</th>';
    echo '<th>Assigned to <br>' . $rush['assigned_to'] . '</th>';
    echo '</tr>';
    echo '</table>';
}
?>


<section id="loader">
    <div id="fullContactHolder">
        <h2><img src="default picture.png" alt="default contact icon"><?= $rush['title'] . " " . $fetch['firstname'] . $fetch['lastname']; ?></h2>
        <p>Created on ; by <?= $maker['firstname'] . " " . $maker['lastname']; ?>;</p>
        <p>Updated on ; </p>
    </div>

    <table id="contactDetails">
        <tr>
            <th>Email <br><?= $rush['email']; ?></th>
            <th>Telephone <br><?= $rush['telephone']; ?></th>
        </tr>
        <tr>
            <th>Company <br><?= $rush['company']; ?></th>
            <th>Assigned to <br><?= $rush['assigned_to']; ?></th>
        </tr>
    </table>

    <?php include "newNotes.php"; ?>
</section>


<script src="ajax.js"></script>

</body>
</html>
