<?php
include '../database/db.php';

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $password = $_POST['password'];
    $role = "customer";
    $username = strtolower(str_replace(' ','',$last_name)) . "2023@" . $password; // Example: Dela Cruz => delacruz2023@091576 This will be the username of the user. AUTO GENERATED METHOD

    $query = "INSERT INTO users (username, password, role, birth_date, first_name, last_name)VALUES ('$username', '$password', '$role', '$birthdate', '$first_name', '$last_name')";
    $result = mysqli_query($db,$query);

    if ($result) { // if successfully added, then ..
        // TODO: add redirects
    }

} else {
    // Redirect to a 404 Page
    
}
?>