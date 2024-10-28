<!DOCTYPE html>
<html>
<title>Aidan Bergeman - PHP Multiplication Table</title>
<link rel="stylesheet" href="main.css">
<body>
<div id="bio-section">
    <form id="password-form" method="POST">
        <label class="anon-pro" for="number"">Enter a number </label><input type="number" name="number" id="number" value="2">
        <br>
        <input class="anon-pro" id="submit" type="submit" value="Submit">
    </form>
    <h1 id="result" class="anon-pro"></h1>
</div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    echo "<ul>";
    for ($i = 1; $i <= $number; ++$i) {
        echo('<li>' .$i. '*' .$number. ' = ' .$number * $i . '</li>');
    }
    echo('</ul>');
}
?>
