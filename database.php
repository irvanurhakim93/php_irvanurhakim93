<?php
$koneksi = mysqli_connect("localhost", "root", "", "dba");
$table = "SELECT hobi, COUNT(id) as jumlah_person FROM hobi GROUP BY hobi ORDER BY COUNT(id) DESC";
$orderby = mysqli_query($koneksi,$table);

?>