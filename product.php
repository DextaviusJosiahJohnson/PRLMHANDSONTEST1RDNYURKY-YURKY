<?php

$user = "Franklin Johns Yvonne 'Frank Ocean' Dextavius Le'Saint Ocean";

$pagbati = "Hiii";

if ($user != ""){
    $pagbati = "Hiii $user";
}

$product = "Jacqueline Frost";

$cost = 10;

$subtotals;

$discount;

$totals;

for($i = 1; $i <= 15; $i++){
    $daquan = $i;
    $subtotals = $cost * $i;
    $discount = ($cost/100) * ($i*4);
    $totals = [
        $i => ($subtotals - $discount) 
    ];
};

?>
<!DOCTYPE html>
<html>
<head>
    <style> <?php include 'css/styles.css' ?></style>
    <?php include 'includes/header.php'?>
    <?php include 'includes/footer.php'?>
</head>
<body>
    <p><?= $pagbati?></p>
    <h2> <?= $product ?></h2>
    <table>
        <tr>
            <th>
                the uh
            </th>
            <th>
                yeah
            </th>
        </tr>
        <?php foreach ($totals as $quantity => $price): ?>
        <tr>
            <td><?php if($quantity === 1){
                echo "$quantity pack";}else{
                    echo "$quantity packs";};?></td>
            <td><?=$price?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>