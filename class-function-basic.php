<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-function</title>
</head>
<body>
<?php

class kalkulatorBangunRuang {
    public function luasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    public function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    public function luasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    public function luasLingkaran($jariJari) {
        return pi() * pow($jariJari, 2);
    }

    public function kelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

$kalkulator = new kalkulatorBangunRuang();

echo nl2br("Luas Persegi Panjang: " . $kalkulator->luasPersegiPanjang(10, 5) . "\n");
echo nl2br("Keliling Persegi Panjang: " . $kalkulator->kelilingPersegiPanjang(10, 5) . "\n");
echo nl2br("Luas Persegi: " . $kalkulator->luasPersegi(4) . "\n");
echo nl2br("Keliling Persegi: " . $kalkulator->kelilingPersegi(4) . "\n");
echo nl2br("Luas Segitiga: " . $kalkulator->luasSegitiga(6, 3) . "\n");
echo nl2br("Luas Lingkaran: " . $kalkulator->luasLingkaran(7) . "\n");
echo nl2br("Keliling Lingkaran: " . $kalkulator->kelilingLingkaran(7) . "\n");

?>


</body>
</html>