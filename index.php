<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vücut Kitle Endeksi Hesaplama by Muhammed Zaim</title>
    <meta name="description" content="Vücut kitle endeksinizi (Beden kitle endeksi) hesaplamak için buraya tıklayın."/>
    <meta name="keywords" content="vücut kitle endeksi hesaplama, vücut kitle endeksi nasıl hesaplanır, vücut kitle endeksi nedir, vücut kitle indeksi hesaplama, vücut kitle indeksi nasıl hesaplanır, vücut kitle indeksi nedir, beden kitle endeksi hesaplama, beden kitle endeksi nasıl hesaplanır, beden kitle endeksi nedir"/>
    <link rel="stylesheet" href="zeropage.css">
    <link rel="stylesheet" href="zerogrid.css">
    <link rel="stylesheet" href="style.css">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-56284082-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: muhammedzaim
 * Date: 16.06.2016
 * Time: 10:12
 */

header("Content-type:text/html; charset=UTF8");
try{
    $baglan = new PDO("mysql:hostname=localhost; dbname=VERITABANI-ADI;", "VERITABANI-KULLANICI-ADI" , "VERITABANI-KULLANICI-SİFRE");
    $baglan->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
}catch(PDOException $e){
    die($e->getMessage());
}


function GetIP(){
    if(getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ',')) {
            $tmp = explode (',', $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}

$IpNumarasi = GetIP();



if($_POST){
    $Boy = $_POST['Boy'];
    $Kilo = $_POST['Kilo'];
    if($Boy > 0 && $Kilo > 0){
        $Hesapla = $Kilo/(($Boy/100)*($Boy/100));

        $ekle = $baglan->prepare("insert into Kullanici(KullaniciIp,KullaniciKitleEndesk) values (?,?)");
        $ekle->execute([$IpNumarasi , $Hesapla]);

    }

}


?>
            <div class="hesap">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <form action="" method="post">
                            <div class="col-5  yazi">
                                Boyunuz
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-6">
                                <input type="text" name="Boy" required>
                            </div>
                            <div class="col-5 yazi">
                                Kilonuz
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-6">
                                <input type="text" name="Kilo" required>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="col-1"></div>
                    <div class="sonuc">
                        <div class="col-12">
                            <div class="col-12 yazi">
                                Vücut Kitle Endeksiniz
                            </div>
                            <div class="col-12">
                                <?php @print $Hesapla; ?>0
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-12 yazi">
                                Sonucunuz
                            </div>
                            <div class="col-12">
                                <?php
                                /**
                                 * Created by PhpStorm.
                                 * User: muhammedzaim
                                 * Date: 16.06.2016
                                 * Time: 10:12
                                 */
                                 if(@$Hesapla > 1 && $Hesapla < 18.5){
                                    echo "Zayıf :(";
                                }
                                 if($Hesapla >= 18.5 && $Hesapla < 25){
                                    echo "Normal :D ";
                                }
                                 if($Hesapla >= 25 && $Hesapla < 29.9){
                                    echo "Fazla Kilolu ;)";
                                }
                                 if($Hesapla >= 30 && $Hesapla < 34.9){
                                    echo "Şişman (Obez) - I. Sınıf :(";
                                }
                                 if($Hesapla >= 35 && $Hesapla < 44.9){
                                    echo "Şişman (Obez) - II. Sınıf :/ ";
                                }
                                 if($Hesapla >= 45){
                                    echo "Aşırı Şişman (Aşırı Obez) - III. Sınıf :/";
                                }


                                ?>
                            </div>
                        </div>
                    </div>
            </div>

                <footer>
                    Powered by Muhammed Zaim
                </footer>


</body>
</html>


<a href="https://github.com/muhammedzaimtr/Vucut-Kitle-Endeks"><img style="position: absolute; width: 100px; height: 100px; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>

