<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form method="POST">
        <input type="number", name="a" placeholder="Bilangan a">
        <input type="number" name="b" placeholder="Bilangan b">
        <div style="margin-top:1rem">
            <button type="button" onclick="location.href = '?clear'">Clear</button>
            <button type="submit" name="tambah">Hitung</button>
    </div>
    </form>
    <?php 
    if(isset($_POST['tambah'])){
        echo $_POST['a'] + $_POST['b'];
    }
    ?>
</body>
</html>