<?php
try {
    $db = new  pg_connect("host=ec2-34-197-141-7.compute-1.amazonaws.com
 dbname=db7lrj93isfe3h user=hlphipxlcbjlwm password=ea2f7fd249414dbe1e27433c83057cc931dd53a782295ac070c40d29e9d8a94f");
    return $db;
}catch (Exception $e){
    echo "Kết nối ko thành công";
}
