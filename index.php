<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "./assets/layout/header.php";
?>
<main>   
    <h2>Willkommen auf meiner persönlichen Website!</h2>
        <section id="textbox1" style="text-align: center; margin-bottom: 0px;">
            <h3>Über mich</h3>   
            <div style=
                "height: 210px; background: linear-gradient(to right, darkred, orangered, darkblue, lightblue, violet); background-blend-mode: overlay; color: white; display: inline-block; width: 40%;">
                <br><br>Hallo, ich bin Lars Germann. <br><br>Meines Zeichnes ein unfassbar talentierter, kluger, hübscher und muskolöser <br><br>Programmierer und Systemintegrator.<br><br> Ich bin im Kurs Web Programmierung von Ali Khorsandfard.</div>
            <p style="display: inline-block; width: 55%; margin-left: 5%; font-size: 18px;">
            </p>
        </section>
        <div style="text-align: center; margin-top: 0px">
        <img src="./assets/image/something.jpg" alt="Spaceboi" style="width: 20%; height: auto;">
    </div>
    <?php require_once "./assets/layout/footer.php"; ?>
</body>
</html>
