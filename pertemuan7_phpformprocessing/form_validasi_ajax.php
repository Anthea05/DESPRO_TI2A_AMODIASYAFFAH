<?php
header('Content-Type: application/json');

$errors = [];
$data = [];

if (empty($_POST['nama'])) {
    $errors['nama'] = 'Nama harus diisi.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email harus diisi.';
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Format email tidak valid.';
}

// TAMBAHAN UNTUK 7.4
if (empty($_POST['password'])) {
    $errors['password'] = 'Password harus diisi.';
} elseif (strlen($_POST['password']) < 8) {
    $errors['password'] = 'Password minimal harus 8 karakter.';
}
// AKHIR TAMBAHAN

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Data berhasil divalidasi dan dikirim!';
}

echo json_encode($data);
?>