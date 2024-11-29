<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "./assets/layout/header.php";
?>
<main>
    <section id="textbox1" class="dozent-section">
        <h2>Unser Dozent</h2>   
        <div class="dozent-highlight">
            Er, <br>der uns das Web-Programming näherbrachte, <br><br>
            und im Kurs doch sehr oft lachte, <br><br>
            Herr Khorsandfard der wahre Meister, <br>
            brachte uns schön öfters weiter, <br><br>
            Danke für den guten Kurs, <br><br>
            leider war er viel zu kurz.
        </div>
        <p class="dozent-description"></p>
    </section>
    <div class="media-container">
        <img src="./assets/image/Screenshot 2024-11-28 081544.png" alt="Screenshot 1" class="media-image">
        <video controls class="media-video">
            <source src="./assets/videos/2024-11-29 08-51-09.mp4" type="video/mp4">
        </video>
        <img src="./assets/image/Screenshot 2024-11-28 090743.png" alt="Screenshot 2" class="media-image">
    </div>
</main>
<?php require_once "./assets/layout/footer.php"; ?>
</body>
</html>

