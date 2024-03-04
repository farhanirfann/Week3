<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Pemrograman Web</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }

        table {
            width: 40%;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-bold {
            font-weight: bold;
        }
    </style>
</head>

<body class="container">
    <table class="center">
        <tr>
            <th>No</th>
            <th class="text-left">Kode</th>
            <th class="text-left">Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sub Total</th>
        </tr>
        <?php
        function subtotal($harga, $jumlah)
        {
            $hasil = $harga * $jumlah;
            return $hasil;
        }

        $totalsemua = 0;

        $databarang = array(
            array("No" => "1", "Kode" => "B001", "Nama Barang" => "Laptop Asus", "Harga" => 9000000, "Jumlah" => 3),
            array("No" => "2", "Kode" => "B002", "Nama Barang" => "Keyboard Logitech", "Harga" => 850000, "Jumlah" => 4),
            array("No" => "3", "Kode" => "B003", "Nama Barang" => "Speaker", "Harga" => 500000, "Jumlah" => 6),
            array("No" => "4", "Kode" => "B004", "Nama Barang" => "Printer Epson", "Harga" => 3000000, "Jumlah" => 7),
        );

        foreach ($databarang as $subAray) {
            ?>
            <tr>
                <td>
                    <?php echo $subAray["No"]; ?>
                </td>
                <td>
                    <?php echo $subAray["Kode"]; ?>
                </td>
                <td>
                    <?php echo $subAray["Nama Barang"]; ?>
                </td>
                <td class="text-right">
                    <?php echo $subAray["Harga"]; ?>
                </td>
                <td class="text-center">
                    <?php echo $subAray["Jumlah"]; ?>
                </td>
                <td class="text-right">
                    <?php echo number_format(subtotal($subAray["Harga"], $subAray["Jumlah"]), 0, ",", "."); ?>
                </td>
            </tr>

            <?php
            $totalsemua += subtotal($subAray["Harga"], $subAray["Jumlah"]);
            ;
        }
        ?>
        <tr>
            <td colspan="5" class="text-bold text-right">
                Total
            </td>
            <td class="text-bold text-right">
                <?php echo number_format($totalsemua, 0, ",", "."); ?>
            </td>
        </tr>
    </table>
</body>

</html>