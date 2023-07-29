<?php
    function bolumunu_kontrol_et($sayi) {
        if (empty($sayi)) {
            return "Değer boş olamaz.";
        }

        $sayi = (int)$sayi; // Sayıyı integer'a çeviriyoruz.

        if ($sayi % 3 === 0) {
            return "Girdiğiniz sayı 3'e tam olarak bölünebilir.";
        } else {
            $bolumunebilen = ceil($sayi / 3) * 3;
            return "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı: $bolumunebilen";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $girilen_sayi = $_POST["sayi"];
        $sonuc = bolumunu_kontrol_et($girilen_sayi);
        echo "<p>Girilen Sayı: $girilen_sayi</p>";
        echo "<p>$sonuc</p>";
    }
    ?>