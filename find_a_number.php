<?php
/**
 * Created by PhpStorm.
 * User: cagat
 * Date: 25.03.2019
 * Time: 23:13
 */



$subject = "MYaygın    25984652985462879456 m        inanc 2127821395641 ın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.

1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.a 05380335071 numaradan ulaşabilirsinz ";

$pattern = "/ 0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2} /";

preg_match_all($pattern,$subject,$result);


echo "Subject : " .$subject;
echo "<pre>";
echo print_r($result);
echo "</pre>";


echo "<br><br>";

$value		=	"0535225 51 44";
$pattern	=	"/^0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}$/";
$result		=	preg_match($pattern, $value);

if($result==1){
    echo "input (" . $value . ") It is a phonenumber";
}else{
    echo "input (" . $value . ") It is not a phonenumber";
}


echo "<br><br><br> <b>IT ALLOWS TO FIND ALL PHONE NUMBERS IN THE SUBJECT</b>";





	?>


