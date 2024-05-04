<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs du formulaire
    $destination = $_POST['destination'];
    $people = $_POST['people'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

   

 

    // Vérifie la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Préparation de la requête d'insertion
    $sql = "INSERT INTO reservation (destination, people, checkin, checkout) VALUES ('$destination', '$people', '$checkin', '$checkout')";
} else {
    // Si le formulaire n'a pas été soumis, rediriger l'utilisateur vers une autre page ou afficher un message d'erreur
    echo "Une erreur s'est produite. Veuillez réessayer.";
}
?>
