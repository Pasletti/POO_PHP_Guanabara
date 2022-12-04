<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once('Caneta.php');

                // Utilizando construct
                $c1 = new Caneta("Bic", "Azul", 0.5);
                $c1->destampar();
                print_r($c1);

                $c2 = new Caneta("KKK", "Verde", 1.0);
                print_r($c2);

                // Utilizando Getters e Setters
                
                $c3 = new Caneta;
                $c3->setModelo("Bic Cristal");
                $c3->setCor("Cinza");
                $c3->setPonta(0.75);
                $c3->setCarga(15);
                $c3->tampar();

                print_r($c3);
                print("<br/>");
                print("Eu tenho uma caneta {$c3->getModelo()} de ponta {$c3->getPonta()}");
                
            ?>
        </pre>
    </body>
</html>