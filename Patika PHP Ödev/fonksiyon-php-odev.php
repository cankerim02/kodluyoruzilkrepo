
<?php 

function ucgen_ciz($satir_sayisi) {
        // Artan satır sayısı ile üçgen çizme işlemi
    for($i = 1; $i <= $satir_sayisi; $i++) {
// Her satırda '0' karakterini satır sayısı kadar yazdırma işlemi
        $j = 1;
        while ($j <= $i) {
            echo '0';
            $j++;
        }
        // Bir sonraki satıra geçmek için yeni satır karakteri ekleme
        echo "<br>"; 
    }
}
ucgen_ciz(15);




?>