<?php
    require( 'connection.php' );
    $conn = connect();
    $strSQL = "SELECT * FROM `city`";     // запрос
    $rs = mysqli_query($conn, $strSQL) or die(mysqli_error($conn)); 
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form method='POST' action=''>
        <select>
            <option disabled selected>Выберите имя</option>
            <? while($var = mysqli_fetch_array($rs)){?>
            <option value ="<?=$var['id']?>"><?=$var['name']?></option>
            <?}?>
        </select>
        <input type="submit">
</form>
</body>
</html>