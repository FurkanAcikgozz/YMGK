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



<!---Mysql den verileri çekme bölümü--->
<?php

try {

    $db=new PDO("mysql:hostname=Furkan;dbname=shopping;charset=utf8", "root","");

}
catch (PDOException $exception){
    echo $exception->getMessage();
}

$products = $db->query("SELECT * from products2",PDO::FETCH_OBJ)->fetchAll();


?>






<!--------------------------------- Ana_İçerik------------------------------------------------>
<h2 class="text-center">Amerika'da Asgari Ücret = 1200 $</h2>
<hr>
<div class="container"
<div class="row">
    <!--Php ile foreaach içerisinde products yapısını kullarak ürünleri ana sayfaya getiriyoruz.-->
    <?php foreach ($products as $product){ ?>

        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="assets/resimler/<?php echo $product->img_url;?>" alt="<?php echo $product->urunAdi;?>">
                <div class="caption">
                    <h3><?php echo $product -> urunAdi; ?></h3>
                    <p><?php echo $product -> detay; ?></p>
                    <p class="text-right fiyat-container"><strong><?php echo $product -> abdFiyat; ?> $</strong></p>
                    <p>
                        <button product-id="<?php echo $product->id;?>" class="btn btn-primary btn-block addToCartBtn" role="button">
                            <span class="glyphicon glyphicon-shopping-cart"></span>  Sepete Ekle
                        </button>
                    </p>
                </div>
            </div>
        </div>

    <?php } ?>


</div>
</div>
<!--------------------------------- #Ana_İçerik------------------------------------------------>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>