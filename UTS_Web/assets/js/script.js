$(document).ready(function () {
    const katalogLayanan = [ //bagian katalog 
        { nama: 'Paket Silver Social Media', harga: 2500000, deskripsi: '25 Feed, 25 Story, Copywriting, Analisis Insight, dan Riset kompetitor.' },
        { nama: 'Content Strategy Consultation', harga: 300000, deskripsi: 'Sesi konsultasi strategi konten, analisis target audiens, dan rekomendasi.' },
        { nama: 'Ads Management (Meta/TikTok)', harga: 500000, deskripsi: 'Pengelolaan iklan berbayar, optimasi targeting, dan laporan performa.' },
        { nama: 'Video Editing for Social Media', harga: 200000, deskripsi: 'Editing reels/tiktok pendek (≤60 detik) dengan musik bebas lisensi.' },
        { nama: 'Brand Identity Starter Kit', harga: 750000, deskripsi: 'Logo sederhana, palet warna, dan tone visual untuk bisnis baru.' },
        { nama: 'Caption Copywriting Only', harga: 20000, deskripsi: 'Penulisan caption engaging & SEO friendly (tanpa desain).' }
    ];

    function tampilkanKatalog() {
        const container = $('.grid-layanan');
        katalogLayanan.forEach(layanan => {
            const kartuHTML = `
                <div class="kartu-layanan">
                    <h4>${layanan.nama}</h4>
                    <p class="harga">Mulai dari Rp ${layanan.harga.toLocaleString('id-ID')}</p>
                    <p class="deskripsi">${layanan.deskripsi}</p>
                    <button class="tombol tombol-tambah" data-nama="${layanan.nama}" data-harga="${layanan.harga}">
                        <i class="fas fa-shopping-cart"></i> Tambah
                    </button>
                </div>`;
            container.append(kartuHTML);
        });
    }
    tampilkanKatalog();

    // PENAMBAHAN 1: Memuat keranjang dari Local Storage saat halaman dibuka
    // JSON.parse() mengubah string dari local storage kembali menjadi array
    let keranjang = JSON.parse(localStorage.getItem('keranjangBelanja')) || [];

    $('.kartu-layanan').hide().each(function (i) {
        $(this).delay(i * 100).fadeIn(500);
    });

    function perbaruiTampilanKeranjang() {
        $('#keranjang-item').empty();
        if (keranjang.length === 0) {
            $('#keranjang-kosong').show();
        } else {
            $('#keranjang-kosong').hide();
            keranjang.forEach(function (item, index) {
                $('#keranjang-item').append(
                    `<tr>
                        <td>${item.nama}</td>
                        <td>Rp ${item.harga.toLocaleString('id-ID')}</td>
                        <td><button type="button" class="tombol-hapus" data-index="${index}"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>`
                );
            });
        }

        // PENAMBAHAN 2: Simpan keranjang ke Local Storage setiap kali di-update
        // JSON.stringify() mengubah array menjadi format string agar bisa disimpan
        localStorage.setItem('keranjangBelanja', JSON.stringify(keranjang));
    }

    $('.grid-layanan').on('click', '.tombol-tambah', function () { //menambah keranjang
        const nama = $(this).data('nama');
        const harga = $(this).data('harga');
        keranjang.push({ nama, harga });
        perbaruiTampilanKeranjang();
        $('html, body').animate({ scrollTop: $("#keranjang").offset().top }, 500);
    });

    $('#keranjang-item').on('click', '.tombol-hapus', function () {
        const index = $(this).data('index');
        keranjang.splice(index, 1);
        perbaruiTampilanKeranjang();
    });

    $('#form-pemesanan').on('submit', function (event) { //validasi form sebelum dikirim
        event.preventDefault();//menghentikan default browser mengirim otomatis 

        $('.grup-form input, .grup-form textarea').removeClass('input-error');
        $('#pesan-error').slideUp(); //jquery animasi

        let nama = $('#nama').val().trim();
        let email = $('#email').val().trim();
        let kota = $('#kota').val().trim();
        let komentar = $('#pesan').val().trim();
        console.log(kota, "kota")
        let pesanError = [];
        const emailPattern = /^\S+@\S+\.\S+$/;

        if (nama === '') { pesanError.push('Nama lengkap harus diisi.'); $('#nama').addClass('input-error'); }
        if (email === '') { pesanError.push('Email harus diisi.'); $('#email').addClass('input-error'); }
        if (kota === '') { pesanError.push('pilih kota dulu'); $('#kota').addClass('input-error'); }
        else if (!emailPattern.test(email)) { pesanError.push('Format email tidak valid.'); $('#email').addClass('input-error'); }
        if (komentar.length > 0 && komentar.length <= 10) { pesanError.push('Komentar harus lebih dari 10 karakter.'); $('#pesan').addClass('input-error'); }
        if (keranjang.length === 0) { pesanError.push('Keranjang Anda masih kosong.'); }

        if (pesanError.length > 0) {
            $('#pesan-error').html(pesanError.join('<br>')).slideDown();
        } else {
            $('#keranjang_data_hidden').val(JSON.stringify(keranjang));

            // PENAMBAHAN 3: Hapus data Local Storage setelah form berhasil dikirim
            localStorage.removeItem('keranjangBelanja');

            $('.section-background').slideUp(500, function () {
                event.target.submit();
            });
        }
    });

    perbaruiTampilanKeranjang();
});