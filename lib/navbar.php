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


<!---------------------------------- Baslik -------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Ana Sayfa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="abdAnasayfa.php">ABD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="almanyaAnasayfa.php">Almanya</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ülkeler
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="abdAnasayfa.php">Amerika Birleşik Devletleri</a></li>
                        <li><a class="dropdown-item" href="almanyaAnasayfa.php">Almanya</a></li>
                        <li><a class="dropdown-item" href="#">Azerbaycan</a></li>
                        <li><a class="dropdown-item" href="#">Çin</a></li>
                        <li><a class="dropdown-item" href="#">Danimarka</a></li>
                        <li><a class="dropdown-item" href="#">Fransa</a></li>
                        <li><a class="dropdown-item" href="#">Hindistan</a></li>
                        <li><a class="dropdown-item" href="#">İngiltere</a></li>
                        <li><a class="dropdown-item" href="#">İngiltere</a></li>
                        <li><a class="dropdown-item" href="#">İtalya</a></li>
                        <li><a class="dropdown-item" href="#">Japonya</a></li>
                        <li><a class="dropdown-item" href="#">Japonya</a></li>
                        <li><a class="dropdown-item" href="#">Rusya</a></li>

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="iletisim.php">İletişim</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Furkan Açıkgöz</a>
                </li>
            </ul><!--
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->

            <!--Alışveriş sepeti iconu oluşturduk--->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="alisverisSepeti.php">
                        <span class="glyphicon glyphicon-shopping-cart sepet-icon"></span>
                        <span class="badge sepet-count"><?php echo $total_count; ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!---------------------------------- #Baslik -------------------------------------------------->