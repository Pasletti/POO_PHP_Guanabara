<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício 09</title>
</head>
<body>
    <pre>
        <?php
            require_once("Pessoa.php");
            require_once("Livro.php");

            $pessoa[0] = new Pessoa("Pedro", 22, "M");
            $pessoa[1] = new Pessoa("Maria", 25, "F");

            $livro[0] = new Livro("PHP Básico", "José da Silva", 300, $pessoa[0]);
            $livro[1] = new Livro("POO com PHP", "Maria de Souza", 500, $pessoa[1]);
            $livro[2] = new Livro("PHP Avançado", "Ana Paula", 800, $pessoa[0]);

            $livro[0]->abrir();
            $livro[0]->folhear(200);
            $livro[0]->avancarPagina();
            echo($livro[0]->detalhes());
        ?>
    </pre>    
</body>
</html>