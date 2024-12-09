<?php


require_once '../source/config.php';
require_once '../source/database.php';

try {

$connection = database_connect();



//$sql = 'SELECT 1'; 

$sql = 'SELECT * FROM Klanten  ORDER BY id ASC'; 

$stmt = $connection->prepare($sql);

$stmt->execute();

$result = $stmt->get_result();

$klanten = mysqli_fetch_assoc($result);

var_dump( $klanten );

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGS Afsprakenplanner</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script src="../js/login.js" defer></script>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <div class="toggle-buttons">
            <button id="studentButton" class="active">Student</button>
            <button id="teacherButton">Docent</button>
        </div>
        <!-- Student Login Form -->
        <form id="studentForm" class="active">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Wachtwoord" required>
            <input type="text" placeholder="Student Code" required>
            <button type="submit" class="submit-button">Login as Student</button>
        </form>
        <!-- Teacher Login Form -->
        <form id="teacherForm">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Wachtwoord" required>
            <button type="submit" class="submit-button">Login as Docent</button>
        </form>
    </div>
</html>
