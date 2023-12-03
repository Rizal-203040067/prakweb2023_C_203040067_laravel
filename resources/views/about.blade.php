<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>WPU Blog | Home</title>
</head>
<body>
    <h1>Halaman About</h1>
    <h3><?= $name; ?></h3>
    <p><?= $email; ?></p>
    <img src="img/rizal.jpg" alt="" width="200">
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">

    <!-- <script src="js/script.js"></script> -->
</body>
</html>