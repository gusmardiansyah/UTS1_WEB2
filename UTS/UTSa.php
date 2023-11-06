<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$Dicount = [
    [
        "tanggal" => "6 november 2023", 
        "product" => [
            "Minyak Telon" => 30000,
            "Diapers" => 20000,
            "Baby Oil" => 16000,
            "Shampo" => 20000,
            "Bedak" => 15000,
            "Baju Bayi" => 35000,
            "Jumper" => 50000
        ],
    ]
];
?>
<div style="border: 1px solid #000;padding: 3px; width:fit-content">
<?php
foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["product"]["Minyak Telon"]+$discountTotal["product"]["Diapers"]+$discountTotal["product"]["Baby Oil"] +$discountTotal["product"]["Shampo Baby"]
    +$discountTotal["product"]["Bedak"]+$discountTotal["product"]["Baju Bayi"]+$discountTotal["product"]["Jumper"];
    

    if ($total >= 50000 ) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }else if ($total >= 100000) {
        $discount=(($total*20)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Produksi    :".$discountTotal["tanggal"]."</p>";
    echo "<p>"."Product             :"."</p>";
    echo "<p>"."Baju Bayi(1x35.500) :"."Rp.".$discountTotal["product"]["Baju bayi"]."</p>";
    echo "<p>"."Diapers(3x51.000)     :"."Rp.".$discountTotal["product"]["Diapers"]."</p>";
    echo "<p>"."Minyak Telon(2x30.000)     :"."Rp.".$discountTotal["product"]["Minyak Telon"]."</p>";
    echo "<p>"."Total               :"."Rp.".$total."</p>";
    echo "<p>"."Discount            :"."Rp.".$discount."</p>";
    echo "<p>"."Total Pembayaran    :"."Rp.".$total_bayar."</p>";
}
?>
</div>
</div>
</body>
</html>