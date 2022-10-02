<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 05 - PHP Objects</title>

    <style>
        * {
            margin: 0;
            border: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            padding: 30px;
            line-height: 20px;
        }

        .container {
            max-width: 875px;
        }

       header {
        font-size: 24px;
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: 40px;
        padding-left: 20px;
       }

       span {
        color: red;
        font-weight: 600;
       }

       li {
        word-spacing: 2px;
       }

       footer {
        text-align: center;
        margin-top: 50px;
       }

    </style>

</head>

<body>

<?php

class Lingkaran{
    //props
    private $jari;

    //getter & setter
    function getJari(){
        return $this->jari;
    }

    function setJari($jari){
        $this->jari = $jari;
    }

    //methods
    function luasLingkaran(){
        $luasLing = pi() * $this->jari ** 2;
        return number_format($luasLing,2,",");
    }

    function kelilingLingkaran(){
        $kelilingLing = 2 * pi() * $this->jari;
        return number_format($kelilingLing,2,",");
    }

}

class Segitiga{
    //props
    private $alas;
    private $tinggi;

    //getter & setter
    function getAlas(){
        return $this->alas;
    }

    function setAlas($alas){
        $this->alas = $alas;
    }

    function getTinggi(){
        return $this->tinggi;
    }

    function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    //methods
    function luasSegitiga(){
        $luasSeg = 0.5 * $this->alas * $this->tinggi;
        return number_format($luasSeg,2,",");
    }

    function kelilingSegitiga(){
        $sudutmiring = sqrt($this->alas ** 2 + $this->tinggi ** 2);
        return number_format($sudutmiring + $this->alas + $this->tinggi,2,",");
    }
}

//membuat objek baru
$segitiga = new Segitiga();
$lingkaran = new Lingkaran();

?>
    <div class="container">
    <header>Praktikum 05 - PHP Objects</header>

    <ol>
        <li>Jika ada lingkaran dengan nilai jari-jari <?php $lingkaran->setJari(13); echo $lingkaran->getJari() ?>, maka luas-nya adalah <span><?php echo $lingkaran->luasLingkaran() ?></span> dan keliling-nya adalah <span><?php echo $lingkaran->kelilingLingkaran() ?></span>.</li>
        <li>Jika ada lingkaran dengan nilai jari-jari <?php $lingkaran->setJari(15); echo $lingkaran->getJari() ?>, maka luas-nya adalah <span><?php echo $lingkaran->luasLingkaran() ?></span> dan keliling-nya adalah <span><?php echo $lingkaran->kelilingLingkaran() ?></span>.</li>
        <li>Jika ada lingkaran dengan nilai jari-jari <?php $lingkaran->setJari(17); echo $lingkaran->getJari() ?>, maka luas-nya adalah <span><?php echo $lingkaran->luasLingkaran() ?></span> dan keliling-nya adalah <span><?php echo $lingkaran->kelilingLingkaran() ?></span>.</li>
        <li>Jika ada segitiga dengan nilai alas <?php $segitiga->setAlas(13); echo $segitiga->getAlas() ?> dan tinggi <?php $segitiga->setTinggi(17); echo $segitiga->getTinggi() ?>, maka luas-nya adalah <span><?php echo $segitiga->luasSegitiga() ?></span> dan keliling-nya adalah <span><?php echo $segitiga->kelilingSegitiga() ?></span>.</li>
        <li>Jika ada segitiga dengan nilai alas <?php $segitiga->setAlas(15); echo $segitiga->getAlas() ?> dan tinggi <?php $segitiga->setTinggi(19); echo $segitiga->getTinggi() ?>, maka luas-nya adalah <span><?php echo $segitiga->luasSegitiga() ?></span> dan keliling-nya adalah <span><?php echo $segitiga->kelilingSegitiga() ?></span>.</li>
    </ol>

    <footer>
        {212410102030} - {Muhamad Faisal Fachrul Ulum}
    </footer>
    </div>

</body>

</html>