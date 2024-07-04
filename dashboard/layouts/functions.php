<?php

$conn = mysqli_connect("localhost", "root", "", "rekrutmen_pegawai");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($data)
{
    global $conn;

    $posisi = $data["posisi"];
    $divisi = $data["divisi"];
    $deskripsi = $data["deskripsi"];
    $jobdesk = $data["jobdesk"];
    $syarat = $data["syarat"];
    $lokasi = $data["lokasi"];
    $tipe_lamaran = $data["tipelamaran"];

    mysqli_query($conn, "INSERT INTO info_lowongan VALUES
    ('','$posisi','$divisi','$deskripsi','$jobdesk','$syarat','$lokasi','$tipe_lamaran')
    ");

    return mysqli_affected_rows($conn);
}
