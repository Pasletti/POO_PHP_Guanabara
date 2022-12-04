<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            ini_set('display_errors', 1);

            require_once("Mamifero.php");
            require_once("Lobo.php");
            require_once("Cachorro.php");

            // $animal1 = new Animal();
            $mamifero1 = new Mamifero();
            $lobo1 = new Lobo();
            $cachorro1 = new Cachorro();

            $lobo1->emitirSom();
            $cachorro1->emitirSom();

            $cachorro1->reagirFrase("Olá");
            $cachorro1->reagirFrase("Vai Apanhar!");
            $cachorro1->reagirHora(11, 45);
            $cachorro1->reagirHora(21, 00);
            $cachorro1->reagirDono(true);
            $cachorro1->reagirDono(false);
            $cachorro1->reagirIdadePeso(2, 12.5);
            $cachorro1->reagirIdadePeso(17, 4.5);
        ?>
    </pre>    
</body>
</html>