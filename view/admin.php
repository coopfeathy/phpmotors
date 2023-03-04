<?php 
if (!$_SESSION['loggedin']){
    header('Location: /phpmotors/index.php/');
}
?><!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Share+Tech&display=swap" rel="stylesheet">
    <link rel = "stylesheet" media="screen" href = "/phpmotors/css/main.css">
</head>
<body>
    <div class = "page">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
            <?php echo $navList; ?>
        </nav>
        <main>
            <h1><?php echo $_SESSION['clientData']['clientFirstname'].' '.$_SESSION['clientData']['clientLastname']; ?></h1>
            <ul>
                <li><?php echo "First Name: ".$_SESSION['clientData']['clientFirstname']; ?></li>
                <li><?php echo "Last Name: ".$_SESSION['clientData']['clientLastname'] ?></li>
                <li><?php echo "Email: ".$_SESSION['clientData']['clientEmail']; ?></li>
                <li><?php echo "Level: ".$_SESSION['clientData']['clientLevel']; ?></li>
            </ul>
            <?php
            if (intval($_SESSION['clientData']['clientLevel']) > 1){
                echo "<a href = '/phpmotors/vehicles/'>Vehicle Management</a>";
            }
            ?>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>