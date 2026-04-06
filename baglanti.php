<?php
        try {
            $db=new PDO('mysql:host=localhost;dbname=urunler;charset=utf8',"root","");
            //echo "bağlantı başarılı";
        }  
        catch (PDOException $e) {
            echo $e->getMessage();
            echo "bağlantıda sorun var";
        }
?>