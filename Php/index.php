<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['fullname'];
  $email = $_POST['email'];
  $pesan = $_POST['message']; 

  
  $tujuan_email = 'muslimmumtaz2018@gmail.com'; 

  $subjek = 'Pesan Dari Contact From mumtaz portofolio';

  $pesan_email = "Nama: " . $nama . "\n\n";
  $pesan_email .= "Email: " . $email . "\n\n";
  $pesan_email .= "Pesan: " . $pesan . "\n\n";

  if (mail($tujuan_email, $subjek, $pesan_email)) {
    echo "Pesan telah terkirim.";
  } else {
    echo "Terjadi kesalahan saat mengirim pesan.";
  }
}
?>
