<?php
    require( 'connection.php' );
    $conn = connect();
    $strSQL = "SELECT * FROM `city`";     // запрос городов
    $strSQL2 = "SELECT * FROM `provider`";    //запрос провайдеров

    $rs = mysqli_query($conn, $strSQL) or die(mysqli_error($conn)); 
    $rs2 = mysqli_query($conn, $strSQL2) or die(mysqli_error($conn));
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/ajax.js"></script>

</head>
<body>
    <form method='POST' action=''>
        <select class="select-city">
            <option disabled selected>Выберите город</option>
            <? while($var = mysqli_fetch_array($rs)){?>
            <option value ="<?=$var['id_city']?>"><?=$var['name']?></option>
            <?}?>
        </select>

        <div id="cont"></div>

        <select class="select-provider">
            <option disabled selected>Выберите провайдера</option>
            <? while($var = mysqli_fetch_array($rs2)){?>
            <option value ="<?=$var['id_provider']?>"><?=$var['name']?></option>
            <?}?>
        </select>

        <div id="cont2"></div>

    </form>
</body>
</html>