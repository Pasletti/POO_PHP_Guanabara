<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
            require_once("Professor.php");
            require_once("Funcionario.php");
            require_once("Visitante.php");
            require_once("Bolsista.php");

            // Classe Pessoa não pode ser instanciada porque a classe foi declarada como abstract
            // $pessoa1 = new Pessoa();
            $aluno1 = new Aluno();
            $professor1 = new Professor();
            $funcionario1 = new Funcionario();
            $visitante1 = new Visitante();
            $bolsista1 = new Bolsista();
            
            $aluno1->setNome("Pedro");
            $aluno1->setMatricula(11111);
            $aluno1->setIdade(16);
            $aluno1->setSexo("M");
            $aluno1->setCurso("Informática");
            $aluno1->cancelarMatricula();
            $aluno1->pagarMensalidade();
            
            $professor1->setNome("Cláudio");
            $professor1->setSalario(2500.75);
            $professor1->receberAumento(500.20);

            $funcionario1->setNome("Fabiana");
            $funcionario1->setSetor("Estoque");
            $funcionario1->mudarTrabalho();

            $visitante1->setNome("Juvenal");
            $visitante1->setIdade(33);
            $visitante1->setSexo("M");

            $bolsista1->setMatricula(1112);
            $bolsista1->setNome("Jubileu");
            $bolsista1->setBolsa(12.5);
            $bolsista1->setCurso("Administração");
            $bolsista1->setIdade(17);
            $bolsista1->pagarMensalidade();

            print_r($aluno1);
            print_r($professor1);
            print_r($funcionario1);
            print_r($visitante1);
            print_r($bolsista1);
        ?>
    </pre>    
</body>
</html>