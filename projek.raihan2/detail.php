<?php

$diamond = $_GET["diamond"] ?? 86;

$prices = [
    86 => 20000,
    172 => 40000,
    257 => 58000,
    344 => 75000,
    429 => 92000,
    514 => 110000
];

$price = $prices[$diamond] ?? 20000;

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Produk - MLTopUp</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <div class="logo">
        ML<span>TOPUP</span>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="produk.php" class="active">Produk</a>
        <a href="index.php#tentang">Tentang</a>
    </nav>

</header>

<section class="detail-page">

    <div class="detail-box">

        <div class="detail-icon">
            💎
        </div>

        <div class="detail-info">

            <p class="small-title">
                MOBILE LEGENDS
            </p>

            <h1>
                <?= $diamond ?> Diamonds
            </h1>

            <p>
                Diamond Mobile Legends untuk akun kamu.
            </p>

            <h2>
                Rp <?= number_format($price, 0, ',', '.') ?>
            </h2>

            <form action="checkout.php" method="GET">

                <input
                    type="hidden"
                    name="diamond"
                    value="<?= $diamond ?>"
                >

                <label>
                    User ID
                </label>

                <input
                    type="text"
                    name="userid"
                    placeholder="Masukkan User ID"
                    required
                >

                <label>
                    Zone ID
                </label>

                <input
                    type="text"
                    name="zoneid"
                    placeholder="Masukkan Zone ID"
                    required
                >

                <button type="submit">
                    Lanjut Pembayaran →
                </button>

            </form>

        </div>

    </div>

</section>

<script src="script.js"></script>

</body>

</html>