<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <header>
        <?php require_once "./blocks/header.php" ?>
    </header>

    <div id="master1-container">
        <?php require_once "./mvc/views/pages/" . $data["page"] . ".php" ?>
    </div>

    <footer>
        <?php require_once "./blocks/footer.php" ?>
    </footer>
</body>

</html>