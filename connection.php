<?php
try{
        $conn = new PDO("mysql:host=127.0.0.1;dbname=43station;charset=utf8", 'root', '12345');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
        echo 'Veritabanı bağlantısı başarısız.';
        die();
} 
