<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sepetim</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />


</head>
<body>

<!---imclude ile navbarı projemize çağırıyoruz. Fazladan yer kaplamasını engelliyoruz-->
<?php include "lib/navbar.php";?>
<?php require_once "lib/db.php";?>


<!-- Sepete Ekle Butonunu Yaptık.-->

<?php


    if(!isset($_SESSION))
    {
        session_start();
    }


if (isset($_SESSION["shoppingCart"])){

    $shoppingCart=$_SESSION["shoppingCart"];
    $total_count=$shoppingCart["summary"]["total_count"];
    $total_price=$shoppingCart["summary"]["total_price"];
    $shopping_products=$shoppingCart["products"];


}
else{
    $total_count=0;
    $total_price=0.0;

}
?>






<!--------------------------------- Ana_İçerik------------------------------------------------>
<div class="container">
    <?php if($total_count>0){?>
        <h2 class="text-center">Sepetinizde <strong class="sepet-kırmizi-yazi"><?php echo $total_count;?></strong> adet ürününüz bulunmaktadır.</h2>
        <hr>
</div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!---table-hover: üzerine geldiğinde renk değiştirme
                      table-bordered: Çizgili olması için
                      table-striped her satırı farklı renk yapıyor-->
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <th class="text-center">Ürün Resimi</th>
                    <th class="text-center">Ürün Adı</th>
                    <th class="text-center">Fiyatı</th>
                    <th class="text-center">Adeti</th>
                    <th class="text-center">Toplam</th>
                    <th class="text-center">Sepetten Çıkar</th>
                    </thead>

                    <tbody>

                    <?php foreach ($shopping_products as $product) {?>

                        <tr>
                            <td class="text-center" width="120">
                                <img src="assets/resimler/<?php echo $product->img_url;?>" alt="" width="90">
                            </td>
                            <td class="text-center" width="375"><?php echo $product->urunAdi;?></td>
                            <td class="text-center"><strong><?php echo $product->trFiyat;?> TL</strong></td>
                            <td class="text-center">
                                <!--bootstrap ile btn-xs: x small buton ekliyor
                                btn-success yeşil renk yapıyoruz gly-plus ise + işaretlisi--->
                                <a href="lib/alisverisDb.php?p=incCount&product_id=<?php echo $product->id;?>" class="btn btn-xs btn-success">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                                <input type="text" class="sepet-adet-girisi" value="<?php echo $product->count;?>">
                                <a href="lib/alisverisDb.php?p=decCount&product_id=<?php echo $product->id;?>" class="btn btn-xs btn-danger">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                            </td>
                            <td class="text-center"><strong><?php echo $product->total_price;?> TL</strong></td>
                            <!---glyphicon ile remove icon ekliyoruz, btn danger ile kırmızı buton ekliyoruz--->
                            <td class="text-center" width="140">
                                <button product-id="<?php echo $product->id;?>" class="btn btn-danger btn-sm removeFromCartBtn">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    Sepetten Çıkar
                                </button>
                            </td>
                        </tr>

                    <?php } ?>




                    </tbody>

                    <tfoot>
                    <th colspan="2" class="text-right">
                        Toplam Ürün: <span class="sepet-kirmizi-yazi"><?php echo $total_count;?> Adet</span>
                    </th>

                    <th colspan="4" class="text-right">
                        Toplam Ürün: <span class="sepet-kirmizi-yazi"><?php echo $total_price;?> TL</span>
                    </th>

                    </tfoot>

                </table>
            </div>
        </div>
        }

    <?php } else {?>
        <div class="alert alert-info">
            <strong>
                Sepetinizde henüz bir ürün bulunmamaktadır. Eklemek için <a href="index.php">TIKLAYINIZ</a>
                İletişim için <a href="iletisim.php">TIKLAYINIZ</a>
            </strong>
        </div>
    <?php } ?>

</div>

<!--------------------------------- #Ana_İçerik------------------------------------------------>



<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>