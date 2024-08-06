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

function daftar($data)
{
    global $conn;

    $id_lowongan = $data['id_lowongan'];
    $id_NIK = $data['id_NIK'];

    mysqli_query($conn, "INSERT INTO info_pendaftaran VALUES
    ('','$id_NIK','$id_lowongan','TERDAFTAR','')
    ");

    return mysqli_affected_rows($conn);
}

function profil($data)
{
    global $conn;

    $id_nik = $data['id_nik'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $email = $data['email'];
    $linkedin = $data['linkedin'];
    $instagram = $data['instagram'];
    $password = $data['password_lama'];
    $new_password = $data['password_baru'];

    // Periksa password lama
    $result = mysqli_query($conn, "SELECT password FROM akun WHERE id_NIK ='$id_nik'");
    $row = mysqli_fetch_assoc($result);

    if ($row && $password == $row['password']) {
        if (isset($_FILES['image']['name'])) {
            $file_data = $_FILES['image']['tmp_name'];
            $fileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

            // Buat folder untuk simpan file image
            $tempdir = "../assets/img/avatars/";
            if (!file_exists($tempdir)) {
                mkdir($tempdir, 0755);
            }

            // Tentukan nama file baru sesuai dengan NIK
            $file_name = $nik . '.' . $fileType;
            $target_path = $tempdir . $file_name;

            // Jika file sudah ada, hapus file tersebut
            if (file_exists($target_path)) {
                unlink($target_path);
            }

            if (move_uploaded_file($file_data, $target_path)) {
                // Update path file yang baru diupload di database
                mysqli_query($conn, "UPDATE akun SET 
                foto = '$file_name'
            WHERE id_NIK = '$id_nik'");
            }
        }

        if (isset($_FILES['cv']['name'])) {
            $cv_data = $_FILES['cv']['tmp_name'];
            $fileType = strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION));

            // Buat folder untuk simpan file cv
            $tempdir2 = "../assets/dokumen/cv/";
            if (!file_exists($tempdir2)) {
                mkdir($tempdir2, 0755);
            }

            // Tentukan nama file baru sesuai dengan NIK
            $cv_name = 'CV_' . $nik . '.' . $fileType;
            $target_path_cv = $tempdir2 . $cv_name;

            // Jika file sudah ada, hapus file tersebut
            if (file_exists($target_path_cv)) {
                unlink($target_path_cv);
            }

            if (move_uploaded_file($cv_data, $target_path_cv)) {
                // Update path file yang baru diupload di database
                mysqli_query($conn, "UPDATE pelamar SET 
                    dokumen_cv = '$cv_name'
                WHERE id_NIK = '$id_nik'");
            }
        }

        if (isset($_FILES['portofolio']['name'])) {
            $porto_data = $_FILES['portofolio']['tmp_name'];
            $fileType = strtolower(pathinfo($_FILES['portofolio']['name'], PATHINFO_EXTENSION));

            // Buat folder untuk simpan file cv
            $tempdir3 = "../assets/dokumen/portofolio/";
            if (!file_exists($tempdir3)) {
                mkdir($tempdir3, 0755);
            }

            // Tentukan nama file baru sesuai dengan NIK
            $porto_name = 'PORTOFOLIO_' . $nik . '.' . $fileType;
            $target_path_porto = $tempdir3 . $porto_name;

            // Jika file sudah ada, hapus file tersebut
            if (file_exists($target_path_porto)) {
                unlink($target_path_porto);
            }

            if (move_uploaded_file($porto_data, $target_path_porto)) {
                // Update path file yang baru diupload di database
                mysqli_query($conn, "UPDATE pelamar SET 
                    dokumen_portofolio = '$porto_name'
                WHERE id_NIK = '$id_nik'");
            }
        }

        mysqli_query($conn, "UPDATE akun SET 
            nama_lengkap = '$nama',
            email = '$email',
            password = '$new_password' 
        WHERE id_NIK = '$id_nik'");

        mysqli_query($conn, "UPDATE pelamar SET 
            link_linkedin = '$linkedin',
            link_instagram = '$instagram' 
        WHERE id_NIK = '$id_nik'");

        return mysqli_affected_rows($conn);
    }
}
