<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> -->
    <!-- Tambahkan link CSS lainnya jika diperlukan -->
</head>

<body>
    <header>
        <h1><?php echo isset($header) ? $header : 'Selamat Datang'; ?></h1>
        <!-- Navigasi bisa ditambahkan di sini -->
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <!-- <p>&copy; <?php echo date('Y'); ?> Nama Perusahaan</p> -->
    </footer>
</body>

</html>