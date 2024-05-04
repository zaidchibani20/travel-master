<?php
include 'connexion.php';

$email = $password = '';
$errors = array();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (($password== $row['password'])) {
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: home.php");
            exit();
        } else {
            $errors[] =$row['password'];
        }
    } else {
        $errors[] = "Utilisateur non trouvé";
    }
}

// Afficher les erreurs (si nécessaire)
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
