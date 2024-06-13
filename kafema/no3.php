<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tahun kabisat</title>
</head>
<body>
    <?php
    $data = [
        [
            'nama' => 'Andi',
            'tahun' => 2008,
        ],
        [
            'nama' => 'Beni',
            'tahun' => 2001,
        ],
        [
            'nama' => 'Dani',
            'tahun' => 2004,
        ],
        [
            'nama' => 'Eko',
            'tahun' => 2006,
        ]
    ];
    
    foreach($data as $key => $value) {
        echo $value ['nama'] . " :";
        if ($value['tahun'] % 4 ==0) {
        echo "lahir pada tahun kabisat (".$value['tahun'] . ")" . "<br>";
    } else {
        echo "lahir BUKAN tahun kabisat (".$value['tahun'].")" . "<br>";
    }
    }
    ?>
</body>
</html>