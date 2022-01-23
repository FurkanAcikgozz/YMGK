$(document).ready(function (){
   $(".addToCartBtn").click(function (){
       var url="http://localhost:8080/asgari_Ucret/lib/alisverisDb.php";
       var data={
           p:"addToSepetUrun", product_id:$(this).attr("product-id")
       }
       $.post(url,data,function (responce){
           //Sepet eklenen sayısını yazdıyoruz.
           $(".sepet-count").text(responce);
       })
   })


    $(".removeFromCartBtn").click(function (){
        var url="http://localhost:8080/asgari_Ucret/lib/alisverisDb.php";
        var data={
            p:"removeFromCartBtn", product_id:$(this).attr("product-id")
        }
        $.post(url,data,function (responce){
            //sayfayı yeniliyoruz
            window.location.reload();
        })
    })
})

