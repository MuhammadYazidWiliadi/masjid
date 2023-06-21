<?php
    $conn = mysqli_connect("localhost", "root", "", "db_masjid");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $kotak = [];

        while ($box = mysqli_fetch_assoc($result)) {
            $kotak[] = $box;
        }
        return $kotak;
    }
    function tambah($data)
{
    global $conn;

    $nama_donatur = htmlspecialchars($data["nama_donatur"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $nominal = htmlspecialchars($data["nominal"]);
    $metode = htmlspecialchars($data["metode"]);

    $query = "INSERT INTO db_donatur
              VALUES ('', '$nama_donatur', '$paket', '$kategori', '$nominal', '$metode')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>