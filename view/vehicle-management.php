<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
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
            <h1>Vehicle Management</h1>
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
            <p><a href = "/phpmotors/vehicles/index.php/?action=classifcation">Add a car classifcation.</a></p>
            <p><a href = "/phpmotors/vehicles/index.php/?action=vehicle">Add a vehicle to inventory.</a></p>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>