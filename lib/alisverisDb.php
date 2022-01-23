<?php

try {
session_start();
    $db = new PDO("mysql:hostname=Furkan;dbname=shopping;charset=utf8", "root", "");


    function addToSepetUrun($product_item)
    {
        //sepetimizi session da tutacağız.
        /* ürünlerin
        *               ev kirası .....2.....1000.....2000
         *              araba-------1-------100000-----100000
         *Toplam. 2 ürün 1002000
         */
        if(!isset($_SESSION))
        {
            session_start();
        }

        if (isset($_SESSION["shoppingCart"])) {
            $shoppingCart = $_SESSION["shoppingCart"];
            $products = $shoppingCart["products"];
        } else {

            $products = array();
        }
        //Adet Kontrolü
        if (array_key_exists($product_item->id, $products)) {
            $products[$product_item->id]->count++;
        } else {
            $products[$product_item->id] = $product_item;

        }

        //Sepetin Hesaplanması
        $total_price = 0.0;
        $total_count = 0;
        foreach ($products as $product) {
            $product->total_price = $product->count * $product->trFiyat;
            $total_price = $total_price + $product->total_price;
            $total_count += $product->count;
        }

        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;

        $_SESSION["shoppingCart"]["products"] = $products;
        $_SESSION["shoppingCart"]["summary"] = $summary;

        //sepet eklenen sayısını return ediyoruz.
        return $total_count;


    }

    function removeToSepetUrun($product_id)
    {
        if(!isset($_SESSION))
        {
            session_start();
        }

        if (isset($_SESSION["shoppingCart"])) {
            $shoppingCart = $_SESSION["shoppingCart"];
            $products = $shoppingCart["products"];
        }
        //Ürünü Listeden Çıkar


        if (array_key_exists($product_id, $products)) {
            unset($products[$product_id]);
        }

        //Tekrardan Sepeti Hesapla
        $total_price = 0.0;
        $total_count = 0;
        foreach ($products as $product) {
            $product->total_price = $product->count * $product->trFiyat;
            $total_price = $total_price + $product->total_price;
            $total_count += $product->count;
        }

        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;

        $_SESSION["shoppingCart"]["products"] = $products;
        $_SESSION["shoppingCart"]["summary"] = $summary;
        return true;


    }

    function incCount($product_id)
    {
        if(!isset($_SESSION))
        {
            session_start();
        }

        if (isset($_SESSION["shoppingCart"])) {
            $shoppingCart = $_SESSION["shoppingCart"];
            $products = $shoppingCart["products"];
        }
        //Adet Kontrolü
        if (array_key_exists($product_id, $products)) {
            $products[$product_id]->count++;


            //Sepetin Hesaplanması
            $total_price = 0.0;
            $total_count = 0;
            foreach ($products as $product) {
                $product->total_price = $product->count * $product->trFiyat;
                $total_price = $total_price + $product->total_price;
                $total_count += $product->count;
            }

            $summary["total_price"] = $total_price;
            $summary["total_count"] = $total_count;

            $_SESSION["shoppingCart"]["products"] = $products;
            $_SESSION["shoppingCart"]["summary"] = $summary;

            //sepet eklenen sayısını return ediyoruz.
            return true;
        }
    }

    function decCount($product_id)
    {
        if(!isset($_SESSION))
        {
            session_start();
        }

        if (isset($_SESSION["shoppingCart"])) {
            $shoppingCart = $_SESSION["shoppingCart"];
            $products = $shoppingCart["products"];
        }
        //Adet Kontrolü
        if (array_key_exists($product_id, $products)) {
            $products[$product_id]->count--;
            if(!$products[$product_id]->count == 1){
                unset($products[$product_id]);
            }

            //Sepetin Hesaplanması
            $total_price = 0.0;
            $total_count = 0;
            foreach ($products as $product) {
                $product->total_price = $product->count * $product->trFiyat;
                $total_price = $total_price + $product->total_price;
                $total_count += $product->count;
            }

            $summary["total_price"] = $total_price;
            $summary["total_count"] = $total_count;

            $_SESSION["shoppingCart"]["products"] = $products;
            $_SESSION["shoppingCart"]["summary"] = $summary;

            //sepet eklenen sayısını return ediyoruz.
            return true;
        }

    }

    if ($_POST["p"]) {
        $islem = $_POST["p"];
        if ($islem == "addToSepetUrun") {
            $id = $_POST["product_id"];
            $product = $db->query("SELECT * from products WHERE id={$id}", PDO::FETCH_OBJ)->fetch();
            $product->count = 1;
            echo addToSepetUrun($product);


        } else if ($islem == "removeFromCartBtn") {
            $id = $_POST["product_id"];
            echo removeToSepetUrun($id);
        }

    }

    if ($_GET["p"]) {
        $islem = $_GET["p"];
        if ($islem == "incCount") {
            $id = $_GET["product_id"];

            if (incCount($id)) {
                header("Location:../alisverisSepeti.php");
            }
        } else if ($islem == "decCount") {
            $id = $_GET["product_id"];
            if (decCount($id)) {
                header("Location:../alisverisSepeti.php");
            }
        }

  }

}
catch (PDOException $exception){
    echo $exception->getMessage();
}


