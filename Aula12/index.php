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
            require_once("Reptil.php");
            require_once("Peixe.php");
            require_once("Ave.php");

            require_once("Canguru.php");
            require_once("Cachorro.php");
            require_once("Cobra.php");
            require_once("Tartaruga.php");
            require_once("GoldFish.php");
            require_once("Arara.php");

            // Classe Pessoa não pode ser instanciada porque a classe foi declarada como abstract
            // $animal1 = new Animal();

            $mamifero1 = new Mamifero();
            $reptil1 = new Reptil();
            $peixe1 = new Peixe();
            $ave1 = new Ave();

            $canguru1 = new Canguru();
            $cachorro1 = new Cachorro();
            $cobra1 = new Cobra();
            $tartaruga1 = new Tartaruga();
            $goldFish = new GoldFish();
            $arara = new Arara();

            $mamifero1->setPeso(85.3);
            $mamifero1->setIdade(2);
            $mamifero1->setMembros(4);
            $mamifero1->locomover();
            $mamifero1->alimentar();
            $mamifero1->emitirSom();
            print_r($mamifero1);

            $canguru1->setPeso(55.30);
            $canguru1->setIdade(3);
            $canguru1->setMembros(4);
            $canguru1->locomover();
            $canguru1->alimentar();
            $canguru1->emitirSom();
            $canguru1->usarBolsa();
            print_r($canguru1);

            $cachorro1->setPeso(3.94);
            $cachorro1->setIdade(5);
            $cachorro1->setMembros(4);
            $cachorro1->locomover();
            $cachorro1->alimentar();
            $cachorro1->emitirSom();
            $cachorro1->abanarRabo();
            print_r($cachorro1);

            $peixe1->setPeso(0.35);
            $peixe1->setIdade(1);
            $peixe1->setMembros(0);
            $peixe1->locomover();
            $peixe1->alimentar();
            $peixe1->emitirSom();
            print_r($peixe1);

            $ave1->setPeso(0.89);
            $ave1->setIdade(2);
            $ave1->setMembros(2);
            $ave1->locomover();
            $ave1->alimentar();
            $ave1->emitirSom();
            print_r($ave1);
        ?>
    </pre>
</body>
</html>