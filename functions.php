<?php 

$conn = mysqli_connect("localhost", "root", "", "todo_list");

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
    global $conn;
    if(isset($data["submit"])) {
        $list = $data["list"];
        $query = "INSERT INTO todo VALUES('', '$list')";

        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
}

function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM todo WHERE id='$id'");

    return mysqli_affected_rows($conn);
}

// function tambah($data) {
//     global $conn;
//     if (isset($data["submit"])) {
//     $list = $data["todo"];

//     $query = "INSERT INTO list ('todo') VALUES('$list')";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }
// }

?>