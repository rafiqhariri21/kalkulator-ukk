<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: grey;
            color: green;
            padding: 10px;
            font-family: "ALGERIAN";
            margin: 5px;
        }
        .calculator-buttons input{
            background-color: #776B5D;
            color: light blue;
            padding: 5px;
            margin: 5px;
            width: 100px;
            height: 50px;
            font-size: 20px;
            font-style: thick;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <div class="calculator">
        <center><h1>KALKULATOR SEDERHANA</h1>
    <form action="{{route('proses.store')}}" method="post">
        @csrf
        <label for="a">Masukkan Angka Pertama</label><br>
        <input type="number" name="a" id="a"><br><br>
        <label for="b">Masukkan Angka Kedua</label><br>
        <input type="number" name="b" id="b"><br><br>

        <div class="calculator-buttons input">
        <input type="submit" value="Kali" name="op">        
        <input type="submit" value="Bagi" name="op">        
        <input type="submit" value="Tambah" name="op">
        <input type="submit" value="Kurang" name="op">
        <input type="submit" value="Reset" name="op">

        <h1>Hasil : {{$hasil}}</h1></center>
        </div>
    </form>
    </div>
</body>
</html>