<?php
include 'connexion.php';

// Vérifier si le formulaire a été soumis
if (isset($_POST['signup'])) {
    // Initialiser les variables pour stocker les valeurs du formulaire
    $fullname = $email = $password = $phone = $date = $gender = '';
    $errors = array();

    // Récupérer les valeurs du formulaire
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $date = $_POST['birthdate'];
    $gender = $_POST['gender'];

    // Validation des données du formulaire
    if (empty($fullname)) {
        $errors[] = "Full Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    // Vérifier si l'email existe déjà dans la base de données
    $checkemail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkemail);
    if ($result->num_rows > 0) {
        $errors[] = "Email address already exists";
    }

    // Si le formulaire est valide (aucune erreur)
    if (empty($errors)) {
        $insertQuery = "INSERT INTO users (fullname, email, password, phone, birthdate, gender)
                        VALUES ('$fullname', '$email', '$password', '$phone', '$date', '$gender')";
        // Exécuter la requête
        if ($conn->query($insertQuery)) {
            // Rediriger vers une page de confirmation ou une autre page après l'inscription
            header("Location: home.php");
            exit(); // It's important to exit after redirection to prevent further execution
        } else {
            $errors[] = "Erreur lors de l'inscription. Veuillez réessayer.";
        }
    }
}

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Afficher les erreurs
foreach ($errors as $error) {
    echo "<p>$error</p>";
}
?>
