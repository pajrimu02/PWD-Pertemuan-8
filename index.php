<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Pajri</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Bagian teks sudah Indonesia -->
<header>
  <div class="left-menu">
    <div class="dropdown">
      <span>Semua Produk <i class="arrow-down"></i></span>
    </div>

    <a href="#" class="has-arrow">
      Perabot Rumah <i class="arrow-down"></i>
    </a>

    <a href="#">Blog</a>
    <a href="#">Kontak</a>
  </div>

  <div class="right-menu">
    <a href="#">FAQ</a>
    <a href="#">Tentang Kami</a>
  </div>
</header>

<section class="hero">
  <img src="img/bg.JPG" alt="Background Gadget" />
  <div class="hero-text">
    <h1>Tetap Terdepan Dengan Prabotan baru</h1>
    <p>Temukan prabotan terbaru dan inovatif.</p>

    <div class="buttons">
      <button class="buy">Beli Sekarang</button>
      <button class="see">Lihat Selengkapnya</button>
    </div>
  </div>
</section>

<section class="collection">
  <h2>Koleksi</h2>
  <p>4 Produk Terlaris Minggu Ini. Pengiriman Besok.</p>


       <!-- tabel -->
      <div class="table-home">

        <?php
        require_once "prabotan.php";

        $prabot = new Prabotan();
        $data = $prabot->getAll();
        ?>

        <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse:collapse;">
        <tr style="background:#ddd;">
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>

        <?php 
        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td><?= $row['stok']; ?></td>
                </tr>
            <?php }
        } else { ?>
            <tr>
                <td colspan="4" style="text-align:center;">Belum ada data</td>
            </tr>
        <?php } ?>
        </table>

        </div>


      </div>
    </section>
  </body>
</html>
