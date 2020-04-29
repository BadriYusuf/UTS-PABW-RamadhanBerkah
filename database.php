<?php
try{
    $sdb = new PDO ('mysql:host=localhost;dbname=ramadhan','root','');
    $sdb ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    print $e->getmessage();
    die();
}