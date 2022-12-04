<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
            require_once('ControleRemoto.php');

            $controleRemoto = new ControleRemoto;
            $controleRemoto->desligar();
            $controleRemoto->maisVolume();
            $controleRemoto->play();
            $controleRemoto->pause();
            echo "<br/><br/>";
            $controleRemoto->abrirMenu();
            $controleRemoto->fecharMenu();
        ?>
    </pre>
</body>
</html>