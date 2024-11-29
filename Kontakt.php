<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "./assets/layout/header.php";
?>
<main class="contact-main">
    <h2>Kontaktformular</h2>
    <form id="kontaktformular" class="contact-form">
        <!-- Kundendaten -->
        <fieldset class="customer-data">
            <legend>Kundendaten</legend>
            <label for="vorname">Vorname:</label><br>
            <input type="text" id="vorname" name="vorname" required><br>

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">E-Mail:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="telefon">Telefon (optional):</label><br>
            <input type="tel" id="telefon" name="telefon">
        </fieldset>

        <!-- Betreff -->
        <fieldset class="message-data">
            <legend>Nachricht</legend>
            <label for="betreff">Betreff:</label><br>
            <input type="text" id="betreff" name="betreff" required><br>

            <label for="beschreibung">Detaillierte Beschreibung:</label><br>
            <textarea id="beschreibung" name="beschreibung" rows="5" required></textarea>
        </fieldset>

        <!-- Senden-Button -->
        <button type="submit" class="submit-button">
            Absenden
        </button>
    </form>
    <script src="./assets/scripts/js/opengithub.js"></script>
    <script src="./assets/scripts/js/saveForm.js"></script>
    <script>
        // Attach the JavaScript function to the form submission event
        document.getElementById("kontaktformular").addEventListener("submit", function(event) {
            saveFormData(event); // Save form data to file
            openGitHubLink(event); // Open GitHub popup
        });
    </script>
</main>
<?php require_once "./assets/layout/footer.php"; ?>
</body>
</html>
