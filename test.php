<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "/xampp/htdocs/DieSpaceZeugsSeite.com/assets/layout/header.php";
?>
    <main>
        <h3>Einloggen</h3>
        <div class="login-form">
            <form action="#" method="POST">
                <input type="text" name="username" placeholder="Benutzername" required>
                <input type="password" name="password" placeholder="Passwort" required>
                <button type="submit">Einloggen</button><br><br>
                <button type="reset">reset</button>
            </form>
        </div>
        <div style="text-align: center; margin-top: 0px">
        <img src="./assets/image/something.jpg" alt="Spaceboi" style="width: 20%; height: 500px;">
        <?php require_once "./assets/layout/footer.php"; ?>
</body>
</html>