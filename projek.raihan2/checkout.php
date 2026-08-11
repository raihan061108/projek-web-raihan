<?php

$diamond = $_GET["diamond"] ?? 86;
$userid = $_GET["userid"] ?? "";
$zoneid = $_GET["zoneid"] ?? "";

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

    <title>Checkout - RaihanTopUp</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <div class="logo">
        ML<span>TOPUP</span>
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="produk.php">Produk</a>
    </nav>

</header>

<section class="checkout">

    <div class="checkout-box">

        <div>

            <p class="small-title">
                CHECKOUT
            </p>

            <h1>
                Konfirmasi Pesanan
            </h1>

            <div class="summary">

                <div>
                    <span>Produk</span>
                    <strong><?= $diamond ?> Diamonds</strong>
                </div>

                <div>
                    <span>User ID</span>
                    <strong><?= htmlspecialchars($userid) ?></strong>
                </div>

                <div>
                    <span>Zone ID</span>
                    <strong><?= htmlspecialchars($zoneid) ?></strong>
                </div>

                <div class="total">
                    <span>Total</span>
                    <strong>
                        Rp <?= number_format($price, 0, ',', '.') ?>
                    </strong>
                </div>

            </div>

            <button onclick="paymentSuccess()">
                Bayar Sekarang
            </button>

            <a href="produk.php" class="back">
                ← Kembali ke Produk
            </a>

        </div>

    </div>

</section>

<script src="script.js"></script>

</body>

</html>