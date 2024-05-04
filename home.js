$(document).ready(function(){
    $(".tour-search-form").submit(function(event) {
      event.preventDefault(); // Empêcher le formulaire de se soumettre normalement
      
      // Récupérer les valeurs des champs du formulaire
      var destination = $("#destination").val();
      var people = $("#people").val();
      var checkin = $("#checkin").val();
      var checkout = $("#checkout").val();
      
      // Envoyer les données du formulaire à votre script PHP via AJAX
      $.ajax({
        type: "POST",
        url: "votre_script_php.php",
        data: {
          destination: destination,
          people: people,
          checkin: checkin,
          checkout: checkout
        },
        success: function(response) {
          // Réponse du serveur en cas de succès
          alert(response); // Vous pouvez personnaliser cette alerte ou effectuer d'autres actions
        },
        error: function(xhr, status, error) {
          // Gestion des erreurs en cas d'échec de la requête AJAX
          console.error("Error:", error);
        }
      });
    });
  });
  
  
  