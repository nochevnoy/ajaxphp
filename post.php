<?php
    require( 'connection.php' );

    $cityID = $_POST['cityID'];

    $conn = connect();
    $strSQL = "SELECT customer.customer FROM customer
    INNER JOIN provider ON customer.id_provider = provider.id_provider
    WHERE provider.id_city = $cityID";     // запрос
    
    $rs = mysqli_query($conn, $strSQL)->fetch_assoc()['customer'] or die(mysqli_error($conn));
    echo $rs;

    
?>