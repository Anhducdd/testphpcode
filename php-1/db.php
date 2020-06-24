<?php
try {
    $db = new PDO('pgsql:host=ec2-52-87-135-240.compute-1.amazonaws.com;dbname=dvjv9f6i58b5d','jyalqhpnugmukb','12fa02ab206be164f948547f7a0f236c5d044bb31efd2db2b9621c9561f5027b');
    return $db;
}catch (Exception $e){
    echo "Kết nối ko thành công";
}
