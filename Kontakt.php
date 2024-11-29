
<main style="padding: 20px;">
        <h2>Kontaktformular</h2>
        <form id="kontaktformular" style="max-width: 600px; margin: 0 auto;">
            <!-- Kundendaten -->
            <fieldset style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; background: linear-gradient(to right, darkred, orangered, darkblue, lightblue, violet); background-blend-mode: overlay;">
                <legend style="font-weight: bold;">Kundendaten</legend>
                <label for="vorname">Vorname:</label><br>
                <input type="text" id="vorname" name="vorname" required style="width: 97.5%; padding: 8px; margin-bottom: 10px;"><br>

                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required style="width: 97.5%; padding: 8px; margin-bottom: 10px;"><br>

                <label for="email">E-Mail:</label><br>
                <input type="email" id="email" name="email" required style="width: 97.5%; padding: 8px; margin-bottom: 10px;"><br>

                <label for="telefon">Telefon (optional):</label><br>
                <input type="tel" id="telefon" name="telefon" style="width: 97.5%; padding: 8px; margin-bottom: 10px;">
            </fieldset>

            <!-- Betreff -->
            <fieldset style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; background: linear-gradient(to right, darkred, orangered, darkblue, lightblue, violet); background-blend-mode: overlay;">
                <legend style="font-weight: bold;">Nachricht</legend>
                <label for="betreff">Betreff:</label><br>
                <input type="text" id="betreff" name="betreff" required style="width: 97.5%; padding: 8px; margin-bottom: 10px;"><br>

                <label for="beschreibung">Detaillierte Beschreibung:</label><br>
                <textarea id="beschreibung" name="beschreibung" rows="5" required style="width: 97.5%; padding: 8px; resize: vertical;"></textarea>
            </fieldset>

            <!-- Senden-Button -->
            <button type="submit" style="padding: 10px 20px; background-color: gold; color: black; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
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
        <?php require_once "./assets/layout/footer.php"; ?>
</body>
</html>
