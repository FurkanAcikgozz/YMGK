<?php
try {

    $db=new PDO("mysql:hostname=Furkan;dbname=shopping;charset=utf8", "root","");


}
catch (PDOException $exception){
    echo $exception->getMessage();
}

?>
