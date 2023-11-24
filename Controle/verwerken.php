<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verwerkte Gegevens</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>

<section class="section">
  <div class="container">
    <h1 class="title">Verwerkte Gegevens</h1>

    <?php
    // Controleer of het formulier is verzonden
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ontvang de formuliergegevens
        $naam = $_POST["naam"];
        $email = $_POST["email"];

        // Voeg de gegevens toe aan de tabel (je moet deze functie vervangen door de daadwerkelijke database-invoeging)
        addToTable($naam, $email);

        // Toon een succesbericht
        echo "<p>Formuliergegevens zijn succesvol ontvangen en verwerkt!</p>";
    } else {
        // Toon een foutbericht als het formulier niet is verzonden
        echo "<p>Fout: Formulier niet verzonden.</p>";
    }

    // Functie om gegevens toe te voegen aan de tabel (simulatie, moet worden vervangen door echte database-invoeging)
    function addToTable($naam, $email) {
        // Hier zou je normaal de gegevens in een database invoegen
        // Voor dit voorbeeld wordt de invoeging gesimuleerd door de gegevens op de pagina weer te geven
        echo "<p>Naam: $naam</p>";
        echo "<p>E-mail: $email</p>";
    }
    ?>
  </div>
</section>

</body>
</html>
