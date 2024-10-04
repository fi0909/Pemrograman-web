<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">home</a>
                </li>
                <li>
                    <a class="nav-link" href="kontak.php">kontak</a>
                </li>
                <li>
                    <a class="nav-link active" href="about.php">about</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 class="h1 mb-3 mt-5 ms-2">
        <ins>ABOUT US :</ins>
    </h1>
    <p class="ms-4">
        <?php    
           if(isset($_POST['nama'])){
            echo 'Perkenalankan nama saya '.$_POST['nama'].'Saya merupakan Waraga negara '. htmlspecialchars ($_POST['Kwni']).' Saya Mengisi menggunakan layanan';
           }
        ?>
        <?php
             if (isset($_POST['layanan'])) {
                foreach ($_POST['layanan'] as $layanan) {
                    echo  htmlspecialchars($layanan);
                }
            } else {
                echo 'Tidak ada layanan yang dipilih';
            }
        ?>
    </p>
</body>
</html>