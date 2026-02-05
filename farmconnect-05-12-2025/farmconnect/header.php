<?php
// header.php - includes meta, styles and top header
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FarmConnect</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header class="site-header d-flex align-items-center justify-content-between px-3">
        <div class="d-flex align-items-center">
                <a href="index.php" class="d-flex align-items-center text-decoration-none">
                <!-- Updated to use provided PNG logo (save your uploaded logo as assets/img/logo.png) -->
                <img src="assets/img/logo.png" alt="FarmConnect" class="logo me-2">
                <span class="site-title">FarmConnect</span>
            </a>
        </div>

        <div class="d-flex align-items-center">
            <button id="sidebarToggle" class="btn btn-light d-lg-none me-2" aria-label="Toggle menu"><i class="fa fa-bars"></i></button>
            <?php // Desktop nav rendered by sidebar.php which is positioned at top-right and vertically centered. ?>
            <?php include 'sidebar.php'; ?>
        </div>
    </header>
    <?php // header end - pages will include sidebar and main content after this ?>
