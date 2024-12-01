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
        <?php require_once "./assets/layout/footer.php"; ?>
</body>
</html>
