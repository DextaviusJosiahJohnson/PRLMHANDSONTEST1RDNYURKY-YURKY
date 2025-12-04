<?php

$user = "Franklin Johns Yvonne 'Frank Ocean' Dextavius Le'Saint Ocean";

$pagbati = "Hiii";

$offer = [
    "Item on Offer" => "Lil Rudolfs",
    "Quantity of Product" => 4,
    "No Discount" => 67,
    "Yes Discount" => 42
];

$reg_price = $offer["Quantity of Product"] * $offer["No Discount"];

$reg_offer = $offer["Quantity of Product"] * $offer["Yes Discount"];

$saving = $reg_price - $reg_offer;

?>
<!DOCTYPE html>
<html>
<head>
    <style> <?php include 'css/styles.css' ?></style>
    <?php include 'includes/header.php'?>
    <?php include 'includes/footer.php'?>
</head>
<body>
    <p><?= $pagbati," ",$user; ?></p>
    <h2><?php foreach($offer as $x => $y){
        echo $x," : ",$y,"<br>";
    };echo "Saved Money (per purchase of 4 Lil Rudolfs): ",$saving;?></h2>
</body>
</html>