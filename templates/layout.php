<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <h1 class="header__h1">
            Каталог
        </h1>
    </header>
    <main class="main">
    <?php echo $content ?>
    </main>
    <footer class="footer">
        <p class="footer__copy">
            &copy; Все права защищены, <?= $name.", ".$year ?>
        </p>
    </footer>
</body>
</html>