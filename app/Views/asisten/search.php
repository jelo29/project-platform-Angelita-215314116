<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching Asisten</title>
</head>
<body>
    <form action="/asisten/search" method="post">
        <?= csrf_field() ?>
        search: <input type="text" name="key" />
        <input type="submit" name="submit" value="search"/>
</form>

<?php
if (!empty ($hasil)){
    echo "<h1>Hasil pencarian</h1>";
    echo "Nama:" . $hasil['nama'];
    echo "<br>Pratikum:" . $hasil['praktikum'];
    echo "<br>IPK:" . $hasil['ipk'];

}
?>  
</body>
</html>