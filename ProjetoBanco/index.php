<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conta Banco</title>
    </head>
    <body>
        <pre>
            <?php
                require_once('ContaBanco.php');

                $cliente1 = new ContaBanco(); // Jubileu
                $cliente1->abrirConta("CC");
                $cliente1->setNumConta(1111);
                $cliente1->setDono("Jubileu");
                print_r($cliente1);
                
                $cliente1->depositar(300);
                print_r($cliente1);
                
                $cliente1->pagarMensal();
                print_r($cliente1);

                $cliente1->sacar(338);
                print_r($cliente1);

                $cliente1->fecharConta();
                print_r($cliente1);

                print_r("<p>##############################################################</p>");

                $cliente2 = new ContaBanco(); // Creuza
                $cliente2->abrirConta("CP");
                $cliente2->setNumConta(2222);
                $cliente2->setDono("Creuza");
                print_r($cliente2);

                $cliente2->depositar(500);
                print_r($cliente2);

                $cliente2->sacar(100);
                print_r($cliente2);

                $cliente2->pagarMensal();
                print_r($cliente2);

                $cliente2->sacar(530);
                print_r($cliente2);

                $cliente2->fecharConta();
                print_r($cliente2);
            ?>
        </pre>
    </body>
</html>