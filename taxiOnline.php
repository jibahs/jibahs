

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="style5.css">
        
    <title>Pemesanan Tiket Online</title>
<style>
</style>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="image/skytixlogo.jpg" width="57" height="47" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Taxi Tersedia</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                </div>
            </div>
       
    </nav>

    <div class="jumbotron jumbotron-fluid" >
        <div class="container ">
            <h1 class="display-4 text-light">Pemesanan Taxi Online</h1>
            <p class="lead text-light">Selamat datang di Pemesanan Taxi Online.</p>
            <hr class="my-4">
  <p class=" text-light">Pemesanan Taxi Online adalah platform yang bertujuan untuk pemesanan taxi secara digital sehingga mempermudah pengguna untuk memesan taxi melalui ponsel mereka dan mengatur perjalanan mereka dengan nyaman.</p>
        </div>
    </div>
    <div class="container">
    <h3>Pemesanan Taxi Online</h3>
    <form action="process.php" method="post">
    <label for="Npelanggan">Nama Pelanggan:</label>
    <input type="text" id="Npelanggan" name="Npelanggan" placeholder="Masukkan Nama" required><br><br>

    <label for="Jkendara">Jenis Kendaraan :</label>
    <select id="Jkendara" name="Jkendara" required>
        <?php
        $opsiKendaraan = array(
            "Sedan",
            "Minivan",
            "Mini Bus",
            "Sepeda Motor",
            "Pick Up"
        );

        sort($opsiKendaraan);

        foreach ($opsiKendaraan as $opsi) {
            echo '<option value="' . $opsi . '">' . $opsi . '</option>';
        }
        ?>
    </select><br><br>

    <label for="jarak">Jarak (km):</label>
    <input type="text" id="jarak" name="jarak" pattern="[0-9]+" title="Hanya angka yang diperbolehkan" placeholder="Masukkan Jarak Tempuh" required><br><br>

    <label for="noHp">Nomer HP:</label>
    <input type="text" id="noHp" name="noHp" pattern="[0-9]+" title="Hanya angka yang diperbolehkan" placeholder="Masukkan Nomer HP" required><br><br>

    <div class="container mx-auto text-center ">
        <button type="submit" class="btn text-light btn-warning mb-2">Submit</button>
    </div>
</form>


    <div class="container">
        <hr class="mt-5 my-4">
                <h3 class="text-center">About</h3>

        <div class="row">
            <div class="col mr-3">
                <p>Selamat datang di Pemesanan Taxi Online Kami dengan bangga mempersembahkan penyedia layanan Taxi Online yang aman, dan berkualitas tinggi kepada Anda. Situs web ini merupakan wujud dari komitmen kami untuk memberikan wadah bagi masyarakat untuk memiliki kenyamanan dalam berkendara dengan ymurah dan efisien.</p>
            </div>
            <div class="col ml-3">
                <p>Visi kami adalah menjadi penyedia layanan Taxi Online pilihan utama di seluruh dunia, yang dikenal karena kualitas layanan unggul, responsif, dan inovatif dalam teknologi penerbangan.</p> <p>Misi kami adalah memberikan solusi bagi pemilik Masyarakat untuk memiliki kenyamanan berkendara, dan kami berkomitmen untuk terus meningkatkan layanan kami dengan mendengarkan umpan balik dari pelanggan dan mengadopsi teknologi terbaru dalam industri teknologi taxi online.</p>
            </div>
        </div>
</div>

     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>