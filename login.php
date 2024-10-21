<?php
// Mulai session dan buffer output sebelum kode
session_start();
ob_start();

// Cek jika form telah disubmit
if (isset($_POST["username"]) && isset($_POST["password"])) {

    // Ambil data dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek apakah username dan password sesuai
    if ($username == "ajar.com" && $password == "ajar") {
        // Jika sesuai, redirect ke halaman company-profile.html
        header("Location: .../company-profile.html"); // Gunakan path absolut
        exit(); // Pastikan script berhenti setelah redirect
    } else {
        // Jika tidak sesuai, tampilkan pesan gagal login
        echo "Gagal Login";
    }
}

ob_end_flush(); // Hentikan output buffering

