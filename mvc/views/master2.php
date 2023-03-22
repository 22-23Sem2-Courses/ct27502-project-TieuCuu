<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dandelion | <?php echo ucfirst($data["page"]); ?></title>
    <link rel="icon" href="./assets/icon/dandelion.png">
    <link rel="stylesheet" href="./assets/bootstrap5/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/font/font.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.2.1-web/css/brands.min.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.2.1-web/css/solid.min.css">
    <script src="./assets/bootstrap5/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/jquery/jquery-3.6.3.min.js"></script>
    <script src="./assets/jquery/jquery-ui.min.js"></script>
</head>

<body>

    <main id="master2-container">
        <?php require_once "../mvc/views/pages/" . $data["page"] . ".php" ?>
    </main>
</body>

</html>