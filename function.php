<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_zakat";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

//MENGAMBIL ROW DALAM DATABASE
function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];

    while ( $row = mysqli_fetch_assoc($result)) {
      $rows [] = $row;
    }
    return $rows;

}

//FUNGSI INSERT
function tambah($data) {
    global $conn;
    $c_name = $data['customer_name'];
    $c_email = $data['customer_email'];
    $c_address = $data['customer_address'];
    $c_city = $data['customer_city'];
    $c_contact = $data['customer_contact'];
    $c_masjid = $data['customer_masjid'];

    $masukData = "INSERT INTO customer (customer_name,customer_email,customer_address,customer_city,customer_contact,customer_masjid) VALUES
    ('$c_name','$c_email','$c_address','$c_city','$c_contact','$c_masjid')";
    mysqli_query($conn,$masukData);

    return mysqli_affected_rows($conn);

}

//FUNGSI DELETE
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//FUNGSI UPDATE
function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $nim = $data["nim"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $masukData = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                  WHERE id = $id
                  ";
    mysqli_query($conn,$masukData);

    return mysqli_affected_rows($conn);
}

?>
