<?php

// $mahasiswa = [
//     [
//         "nama" => "Deyos",
//         "nrp" => "153040083",
//         "email" => "deyos@mail.unpas.ac.id"
//     ],
//     [
//         "nama" => "DeLI",
//         "nrp" => "153040084",
//         "email" => "deLI@mail.unpas.ac.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;



?>