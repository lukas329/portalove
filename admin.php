<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(
    isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {

    echo '
    <a href="admin_articles.php"><button style="width: 150px; height: 20px">Články</button></a><br>
    <a href="admin_employees.php"><button   style="width: 150px; height: 20px">Zamestnanci</button></a><br>
    <br><br>
    <a href="index.php"><button style="width: 150px; height: 20px">Späť na stránku</button></a><br><br><br>
    <a href="logout.php"><button style="width: 150px; height: 20px">Odhlásiť sa</button></a><br>
    ';
} else {
    ?>
    <form method="post" action="login.php">
        Username: <br>
        <input name="username" type="text" placeholder="Username"><br>
        Password: <br>
        <input name="password" type="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
}
?>