<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once("Video.php");
            require_once("Gafanhoto.php");
            require_once("Visualizacao.php");
            
            $video[0] = new Video("Aula 1 de POO");
            $video[1] = new Video("Aula 12 de PHP");
            $video[2] = new Video("Aula 15 de HTML5");
            
            $gafanhoto[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $gafanhoto[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");


            $visualizacao[0] = new Visualizacao($gafanhoto[0], $video[2]);
            $visualizacao[1] = new Visualizacao($gafanhoto[0], $video[1]);

            $visualizacao[0]->avaliar();
            $visualizacao[1]->avaliarPorcentagem(85);

            print_r($visualizacao);
        ?>
    </pre>
</body>
</html>