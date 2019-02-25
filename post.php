<?php
    require( 'connection.php' );

    $cityID = $_POST['cityID'];
    $providerID = $_POST['providerID'];

    $conn = connect();
    $strSQL = "SELECT customer.customer FROM customer
    INNER JOIN provider ON customer.id_provider = provider.id_provider
    WHERE provider.id_city = $cityID";     // запрос

    $strSQL2 = "SELECT * FROM provider";
    
    $rs = mysqli_query($conn, $strSQL)->fetch_assoc()['customer'] or die(mysqli_error($conn));
    $rs2 = mysqli_query($conn, $strSQL2)->fetch_assoc()['name'] or die(mysqli_error($conn));

    $out = json_encode(array(
        'city'=> $rs,
        'provider'=>$rs2,
    ));
    echo $out;

    
?>