<?php 

$conn = mysqli_connect("localhost", "farish", "farish", "latihan");

function query ($query) {
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $hasils = [];
    while($isi = mysqli_fetch_assoc($hasil)) {
        $hasils [] = $isi;
    }

    return $hasils;
}


function tambah ($data) {
    if(isset($_POST["submit"])) {
        global $conn;
        $list = $data["list"];
        $query = "INSERT INTO todo VALUES(todo='$list')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

?>