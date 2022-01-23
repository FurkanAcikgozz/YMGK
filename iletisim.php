<!doctype html>
<html lang="tr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Listesi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
</head>
<body>
<!---imclude ile navbarı projemize çağırıyoruz. Fazladan yer kaplamasını engelliyoruz-->
<?php include "lib/navbar.php";?>

<?php require_once "lib/db.php";?>



<!--------------------------------- Ana_İçerik------------------------------------------------>
<h2 class="text-center"><?php
    $soyturk = "İLETİŞİM";
    $yazirenk = "#FF6600";
    $yaziboyut = "30";
    $yazitipi = "Verdana";

    echo"<font face=$yazitipi size=$yaziboyut color=$yazirenk>$soyturk</font>";

    ?></h2>
<hr>
<div class="container"
<div class="row">


<h5 class="text-center">


<br><br>
    <?php
    $soyturk = "Eklememizi istediğiniz ürünleri veya fiyatlarda yanlışlık olduğunu düşünüyorsanız<br> ";
    $yazirenk = "#000000";
    $yaziboyut = "30";
    $yazitipi = "Verdana";

    echo"<font face=$yazitipi size=$yaziboyut color=$yazirenk>$soyturk</font>";

    ?>
</h5>
    <h4 class="text-center">
    <?php
    $soyturk = "<br> asgari_ucret_ile_yapilacaklar@gmail.com adresimize yazınız ";
    $yazirenk = "#8B0000";
    $yaziboyut = "30";
    $yazitipi = "Verdana";

    echo"<font face=$yazitipi size=$yaziboyut color=$yazirenk>$soyturk</font>";

    ?>
</h4>
</div>
</div>
<!--------------------------------- #Ana_İçerik------------------------------------------------>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>