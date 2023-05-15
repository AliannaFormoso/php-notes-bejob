<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trying includes requires</title>
</head>
<body>
    <div id="container">
        <?php require("header.php") ?>
        <div id="mainContent" >
            Main content

        </div>
        <?php include_once('buttons.php')?>
        <?php require_once("footer.php")?>

    </div>
</body>
</html>