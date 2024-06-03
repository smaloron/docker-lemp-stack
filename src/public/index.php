<?php



try {
    $db = new PDO("mysql:dbname=test;host=lemp-mariadb", 'root', 'secret');
    $sql = "DESCRIBE test";
    $rs = $db->query($sql);
    var_dump($rs->fetchAll(PDO::FETCH_ASSOC));
} catch (PDOException $ex){
    echo $ex->getMessage();
}


