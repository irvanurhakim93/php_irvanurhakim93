<?php
//melakukan koneksi ke database
$koneksi        = mysqli_connect("localhost", "root", "", "latihan");

//melakukan join antara tabel user dan tabel post
//dibaca : ambil semua data dari post gabungkan user dimana user.iduser = post.iduser
//iduser adalah penghubung diantara kedua tabel
//iduser disebut primary key di tabel user dan disebut foreign key di tabel post
$join           = "select * from post join user on user.iduser = post.iduser";
$select         = mysqli_query($koneksi, $join);
