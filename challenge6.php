<html>
<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jumlah Kaki</th>
            <th>Cari di Google</th>
        </tr>
        <?php
        $data = array(
            "Ayam" =>2,
            "Angsa"=>2,
            "Bebek"=>2,
            "Domba"=>4,
            "Kalkun"=>2,
            "Kambing"=>4,
            "Kelinci"=>4,
            "Kerbau"=>4, 
            "Kuda"=>4,
            "Sapi"=>4
        );

        ksort($data);

        $i = 1;
        foreach ($data as $item => $kaki) {
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $item ?></td>
                <td><img src="img-20250329T022919Z-001/img/<?php echo $item ?>.jpg" width="50" height="50"></td>
                <td><?php echo $kaki ?></td>
                <td><a href="https://google.com/search?tbm=isch&q=<?php echo $item ?>"target="blank">Cari</a></td>
            </tr>
            <?php
            $i++;
            }
            ?>
        // Lengkapi disini baris untuk masing masing hewan (Ayam, angsa, bebek, domba, kalkun, kambing, kelinci, kerbau, kuda, dan sapi )
       
    </table>
</body>
</html>