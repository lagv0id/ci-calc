<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="bil1"></label><input type="text" name="bil1">
        <label for="bil2"></label><input type="text" name="bil2">
        <input type="submit" value="Lakukan Pembagian" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['bil1'] == '' || $_POST['bil2'] == '') {
            echo "<br>Please fill both forms.";
        } elseif ($_POST['bil2'] == 0) {
            echo "<br>Division by zero";
        } else {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            echo '<br>' . $bil1 . '/' . $bil2 . ' = ' . ($bil1 / $bil2);
        }
    }
    ?>
</body>

</html>