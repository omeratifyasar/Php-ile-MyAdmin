<?php
    /* VeritabanÄ± baÄŸlantÄ± bilgileri */
    $sunucu = "localhost";
    $kullanici = "root";
    $sifre = "";
    $veritabani = "classicmodels";
    $port = 3306;

    /* VeritabanÄ±na baÄŸlantÄ± */
    $baglanti = mysqli_connect($sunucu, $kullanici, $sifre, $veritabanı, 3306)
        or die("Veritabanına bağlantı gerçekleştirilemedi..!");

    /* TÃ¼rkÃ§e karakterler iÃ§in dÃ¼zenleme */
    mysqli_set_charset($baglanti,"utf8");

    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, "SELECT * FROM Eser");

    /* Sorgu sonuÃ§larÄ±nÄ±n yazdÄ±rÄ±lmasÄ± */
    while($satir = mysqli_fetch_assoc($sonuc)){
        printf ($satir["Eser"]."<br>");
    }
