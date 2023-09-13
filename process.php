<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <title>Daftar Pemesanan Taxi</title>
    <style>
        table tr:nth-child(even) {
            background-color: #CDDEFF;
        }

        table th {
            border-width: 2px;
            border-color: #A2D2FF;
        }

        table td {
            border-width: 2px;
            border-color: #A2D2FF;
        }
    </style>
</head>
<body>
    <div class="container mx-auto text-center">
        <h2 class="my-4">Daftar Pemesanan Taxi</h2>
        <?php
        $data = file_get_contents('data.json');
        $pemesanan = json_decode($data, true);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data dari formulir
            $Npelanggan = $_POST['Npelanggan'];
            $Jkendara = $_POST['Jkendara'];
            $jarak = $_POST['jarak'];
            $NoHp = $_POST['noHp'];

            // Daftar biaya platform dan biaya sewa per kilometer
            $biaya_platform = array(
                "Sedan" => 10000,
                "Minivan" => 12000,
                "Minibus" => 15000,
                "Sepeda Motor" => 5000,
                "Pickup" => 15000
            );

            $biaya_sewa = array(
                "Sedan" => 5000,
                "Minivan" => 6000,
                "Minibus" => 10000,
                "Sepeda Motor" => 3000,
                "Pickup" => 8000
            );

            $biaya_platform_amount = isset($biaya_platform[$Jkendara]) ? $biaya_platform[$Jkendara] :0;
            $biaya_sewa_amount = isset($biaya_sewa[$Jkendara]) ? $biaya_sewa[$Jkendara] :0;

            $total_biaya = $biaya_platform_amount + ($jarak * $biaya_sewa_amount);

            // Menambahkan data pemesanan ke dalam array
            $pemesanan[] = array(
                "Nama Pelanggan" => $Npelanggan,
                "Jenis Kendaraan" => $Jkendara,
                "Jarak (km)" => $jarak,
                "Nomer HP" => $NoHp,
                "Total Biaya" => $total_biaya
            );

            // Menyimpan data pemesanan ke dalam file JSON
            $data_baru = json_encode($pemesanan, JSON_PRETTY_PRINT);
            file_put_contents('data.json', $data_baru);
        }
        ?>
        <div class="mb-4">
            <table class="table table-bordered" style="margin-left:auto;margin-right:auto">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Jarak (km)</th>
                        <th>Nomor HP</th>
                        <th>Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pemesanan as $pemesan) { ?>
                        <tr>
                            <td><?php echo $pemesan['Nama Pelanggan']; ?></td>
                            <td><?php echo $pemesan['Jenis Kendaraan']; ?></td>
                            <td><?php echo $pemesan['Jarak (km)']; ?></td>
                            <td><?php echo $pemesan['Nomer HP']; ?></td>
                            <td><?php echo $pemesan['Total Biaya']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
