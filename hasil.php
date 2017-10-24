<?php

require_once 'datasiswa.php';

$datasiswa= new datasiswa ('yeni','161710167','xi-rpl 1','bandung 23 oktober 2000');

echo"nama =".$datasiswa->get_nama()."<br>";
echo"tempat =".$datasiswa->get_nis()."<br>";
echo"kelas =".$datasiswa->get_kelas()."<br>";
echo"ttl =".$datasiswa->get_ttl()."<br>";

?>