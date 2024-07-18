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

    $maxNIK = mysqli_query($conn, "SELECT max(id_NIK) as MAX FROM akun");
    $hasil = mysqli_fetch_array($maxNIK);
    $id_NIK = $hasil['MAX'] + 1;

    mysqli_query($conn, "INSERT INTO akun VALUES
    ('','$nik','$nama','$email','$username','$password','','pelamar')
    ");

    mysqli_query($conn, "INSERT INTO pelamar VALUES
    ('$id_NIK','','','','')
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
    ('','$posisi','$divisi','$deskripsi','$jobdesk','$syarat','$lokasi','$tipe_lamaran','1')
    ");

    return mysqli_affected_rows($conn);
}

function lolos($data)
{
    global $conn;

    $id = $data['id'];
    $status = $data['status'];

    if ($status == "INTERVIEW") {
        mysqli_query($conn, "UPDATE info_pendaftaran SET status = 'DITERIMA' WHERE id_pendaftaran = '$id'");
    } else {
        mysqli_query($conn, "UPDATE info_pendaftaran SET status = 'LOLOS BERKAS' WHERE id_pendaftaran = '$id'");
    }

    return mysqli_affected_rows($conn);
}

function aturjadwal($data)
{
    global $conn;

    $id = $data['id'];
    $jadwal = $data['jadwal'];

    mysqli_query($conn, "UPDATE info_pendaftaran SET status = 'INTERVIEW', tanggal_interview = '$jadwal' WHERE id_pendaftaran = '$id'");

    return mysqli_affected_rows($conn);
}

function tolak($data)
{
    global $conn;

    $id = $data['id'];

    mysqli_query($conn, "UPDATE info_pendaftaran SET status = 'DITOLAK' WHERE id_pendaftaran = '$id'");

    return mysqli_affected_rows($conn);
}

function tutuplowongan($data)
{
    global $conn;

    $id = $data['id'];

    mysqli_query($conn, "UPDATE info_lowongan SET status = '0' WHERE id_lowongan = '$id'");

    return mysqli_affected_rows($conn);
}

function bukalowongan($data)
{
    global $conn;

    $id = $data['id'];

    mysqli_query($conn, "UPDATE info_lowongan SET status = '1' WHERE id_lowongan = '$id'");

    return mysqli_affected_rows($conn);
}
