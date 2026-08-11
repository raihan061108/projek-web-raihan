<?php

$products = [
    [
        "diamond" => 86,
        "price" => 20000
    ],
    [
        "diamond" => 172,
        "price" => 40000
    ],
    [
        "diamond" => 257,
        "price" => 58000
    ],
    [
        "diamond" => 344,
        "price" => 75000
    ],
    [
        "diamond" => 429,
        "price" => 92000
    ],
    [
        "diamond" => 514,
        "price" => 110000
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk - MLTopUp</title>

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

    <a href="produk.php" class="nav-btn">
        Top Up
    </a>

</header>

<section class="product-page">

    <div class="section-title">

        <p>STORE</p>

        <h1>Pilih Diamond</h1>

        <span>
            Pilih nominal diamond Mobile Legends yang kamu inginkan.
        </span>

    </div>

    <div class="product-grid">

        <?php foreach ($products as $product): ?>

            <div class="product-card">

                <div class="diamond">💎</div>

                <h3>
                    <?= $product["diamond"] ?> Diamonds
                </h3>

                <p>
                    Mobile Legends
                </p>

                <strong>
                    Rp <?= number_format($product["price"], 0, ',', '.') ?>
                </strong>

                <a href="detail.php?diamond=<?= $product["diamond"] ?>">
                    Pilih Produk →
                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<footer>

    <div class="logo">
        ML<span>TOPUP</span>
    </div>

    <p>© 2026 MLTopUp</p>

</footer>

<script src="script.js"></script>

</body>
</html>