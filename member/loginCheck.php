<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print('<h1>입력한 정보</h1>');
    print ($_POST['userID']);
    print('<br>');
    print($_POST['userPW']);
    ?>
</body>
</html>