<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= heading('title') ?> | <?= $data['numero'] ?></title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>@page { size: A4 }</style>

    <style>
        .text-center{text-align: center}
        .text-right{text-align: right}
        .footer span{display: inline-block;}
        .col-45{width: 45%}
        .space-top{margin-top: 7%}
        .text-lowercase {text-transform: lowercase;}
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">

<!-- Each sheet element should have the class "sheet" -->
<!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
<section class="sheet padding-20mm">

    <!-- Write HTML just like a web page -->
    <article>
        <div class="container">
            <div class="col-lg-10">
                <h1 class="text-center">CERTIFICAT D'ACCOUCHEMENT</h1>
                <p class="text-center" style="font-size: 1.5em">Numéro <b><?= $data['numero'] ?></b> HIA A</p>
                <div class="space-top" style="font-size: 1.5em">
                    <p>Je soussignée, Sage-femme <b><?= $data['user'] ?></b>
                    certifie avoir fait accoucher, Mlle <b><?= $data['mere'] ?></b>
                    le <b><?= change_format($data['date']) ?></b> à <b><?= $data['heure'] ?></b>
                    d'un enfant <span class="text-lowercase"><b><?= $data['nature'] ?></b></span> de sexe
                        <b><?= $data['sexe'] ?></b>.</p>
                <p class="space-top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;En foi de quoi, nous lui délivrons le présent certificat pour servir et valoir ce que de droit. /.</p>
                    <div class="footer space-top">
                        <span class="col-45">Le Chef de Service</span>
                        <span class="col-45 text-right">La Major</span>
                    </div>
                </div>
            </div>
        </div>

    </article>
</section>

</body>

</html>
