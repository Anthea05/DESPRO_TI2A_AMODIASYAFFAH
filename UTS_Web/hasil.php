<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesanan - Sorot.in</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        
        <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'sukses'): ?>
            <div class="hasil-container">
                <h1><i class="fas fa-check-circle"></i> Pesanan Berhasil Terkirim</h1>
                <p>Terima kasih! Berikut adalah daftar semua pesanan yang telah kami terima.</p>
                <div class="daftar-pesanan">
                    <?php foreach (array_reverse($_SESSION['semua_pesanan']) as $index => $pesanan): ?> 
                        <!-- menampilkan semua data dibaca dari session di proses pesanan -->
                        <div class="kartu-pesanan">
                            <h3>Pesanan #<?php echo count($_SESSION['semua_pesanan']) - $index; ?></h3>
                            <ul>
                                <li><strong>Nama:</strong> <?php echo $pesanan['nama']; ?></li>
                                <li><strong>Email:</strong> <?php echo $pesanan['email']; ?></li>
                                <?php if (!empty($pesanan['pesan'])): ?>
                                    <li><strong>Komentar:</strong> <?php echo $pesanan['pesan']; ?></li>
                                    <li><strong>Kota:</strong> <?php echo $pesanan['kota']; ?></li>
                                <?php endif; ?> <!--  -->
                                <li> <!--  -->
                                    <strong>Layanan Dipesan:</strong>
                                    <ul>
                                        <?php foreach($pesanan['keranjang'] as $item): ?>
                                            <li>- <?php echo $item['nama']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="index.html" class="tombol tombol-utama">Kembali ke Formulir</a>
            </div>

        <?php elseif(isset($_SESSION['status']) && $_SESSION['status'] == 'error'): ?>
            <div class="kartu-hasil">
                <div class="hasil-header error">
                    <i class="fas fa-times-circle"></i>
                    <h3>Terjadi Kesalahan!</h3>
                </div>
                <div class="hasil-body">
                    <p>Validasi server gagal. Pastikan semua data wajib terisi dengan benar.</p>
                </div>
                <a href="index.html" class="tombol tombol-utama tombol-kembali">Kembali ke Formulir</a>
            </div>

        <?php else: ?>
             <div class="hasil-container">
                <h1>Tidak Ada Data</h1>
                <p>Silakan isi formulir terlebih dahulu untuk melihat hasil pesanan.</p>
                <a href="index.html" class="tombol tombol-utama">Kembali ke Formulir</a>
             </div>
        <?php endif; ?>

        <?php 
            // Hapus status setelah ditampilkan agar tidak muncul lagi saat refresh
            unset($_SESSION['status']);
        ?>

    </div>

    <script src="assets/js/jquery-3.7.1.js"></script>
    <script>
        // Animasi fadeIn untuk setiap kartu pesanan
        $(document).ready(function() {
            $('.kartu-pesanan').hide().each(function(i) {
                $(this).delay(i * 150).fadeIn(600);
            });
        });
    </script>
</body>
