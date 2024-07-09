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
function register($data)
{
    global $conn;

    $nik = $data["nik"];
    $nama = $data["nama"];
    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];

    $ceknik = mysqli_query($conn, "SELECT nomor_induk FROM akun WHERE nomor_induk ='$nik'");
    $cekuname = mysqli_query($conn, "SELECT username FROM akun WHERE username ='$username'");
    $cekemail = mysqli_query($conn, "SELECT email FROM akun WHERE email ='$email'");

    if (mysqli_fetch_assoc($ceknik)) {
        echo "
		<script>
			alert ('NIK anda sudah terdaftar');
		</script>
		";
        return false;
    } else if (mysqli_fetch_assoc($cekuname)) {
        echo "
		<script>
			alert ('username sudah terdaftar');
		</script>
		";
        return false;
    } else if (mysqli_fetch_assoc($cekemail)) {
        echo "
		<script>
			alert ('email sudah terdaftar');
		</script>
		";
        return false;
    }

    mysqli_query($conn, "INSERT INTO akun VALUES
    ('$nik','$nama','$email','$username','$password')
    ");

    return mysqli_affected_rows($conn);
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
