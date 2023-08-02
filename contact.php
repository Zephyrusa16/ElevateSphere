<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Lakukan pemrosesan data di sini (misalnya: kirim email, simpan ke database, dll.)

  // Contoh: Kirim email
  $to = "elevatesphere16@gmail.com";
  $subject = "Pesan dari " . $name;
  $headers = "From: " . $email . "\r\n";
  mail($to, $subject, $message, $headers);

  // Redirect pengguna kembali ke halaman awal setelah pengiriman
  header("Location: index.html");
  exit();
}
?>
