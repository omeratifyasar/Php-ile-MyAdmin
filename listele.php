<?php
    /* BaÄŸlantÄ± bilgilerinin alÄ±nmasÄ±*/
    require_once("baglanti.php");

    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, "SELECT * FROM Eser");
?>
<html>
    <head>
        <title>MySQL-PHP Listeleme</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <h1>Eser Listesi</h1>
        <h3>Kayıltardaki toplam kitap sayısı <?php echo mysqli_num_rows($sonuc); ?> adet eser yer almaktadır.</h3>
        <p>MÃ¼ÅŸterilerin listesi aÅŸaÄŸÄ±da yer almaktadÄ±r:</p>
        <?php
            echo("<ol>");
            /* Sorgu sonuÃ§larÄ±nÄ±n yazdÄ±rÄ±lmasÄ± */
            while($satir = mysqli_fetch_assoc($sonuc)){
                echo("<li>".$satir["Eser"]."</li>");
            }
            echo("</ol>");
        ?>
    </body>
</html>
