<?php

//Bir resim formatı olduğunu belirtiyoruz
header("Content-type:image/png");

// 500 x 500 ebatlarında zemin oluşturduk
$ekran = imagecreate(500, 500);

//Zeminin rengini RGB Code ile boyadık
$arkaplan = imagecolorallocate($ekran,162,4,4);


// Kafa için renk belirledik
$kafa_renk = imagecolorallocate($ekran,166,238,73);
// 500x500 zemine ortalamak için 250x250 merkezi ölçülerine oturan 450x450 büyüklüğünde 360 Derecelik Bir Kafa Oluşturduk
imagearc($ekran,250,250,450,450,0,360,$kafa_renk);
// Kafanın içini $kafa_renk adlı değişkenin sahip olduğu renk ile doldurduk
imagefill($ekran, 250, 250, $kafa_renk);


//Göz için siyah bir renk belirledik
$goz_renk = imagecolorallocate($ekran,0,0,0);

//Sol göz kordinatları
imagearc($ekran,125,175,100,100,0,360,$goz_renk);
imagefill($ekran,125,175,$goz_renk);

//Sağ göz kordinatları
imagearc($ekran,375,175,100,100,0,360,$goz_renk);
imagefill($ekran,375,175,$goz_renk);


//Ağız için gülen bir ağız
imagearc($ekran,250,350,300,100,0,180,$goz_renk);


//PNG formatında çıktı aldık
imagepng($ekran);

