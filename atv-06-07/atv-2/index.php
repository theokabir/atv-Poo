<!DOCTYPE html>
<html lang="en">
<head>
    <!-- autor: Théo Kabir Novais de Carvalho -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../res/bootstrap.css">
    <link rel="stylesheet" href="./../res/style.css">
</head>
<body>

    <div class="div-main p-4 rounded">
        <form action="./index.php" method="post">
            <fieldset>
                <legend>Notas:</legend>
                <ul>
                    <li>
                        <label for="nome1">Nome Aluno(a) 1:</label>
                        <input type="text" name="nome1" id="nome1" class="form form-control">
                    </li>
                    <li>
                        <label for="mat1">Matricula(RM) Aluno(a) 1:</label>
                        <input type="number" name="mat1" id="mat1" class="form form-control">
                    </li>
                    <li>
                        <label for="n1-1">Nota 1</label>
                        <input type="number" name="n1-1" id="n1-1" class="form form-control">
                    </li>
                    <li>
                        <label for="n1-2">Nota 2</label>
                        <input type="number" name="n1-2" id="n1-2" class="form form-control">
                    </li>
                    <li>
                        <label for="n1-3">Nota 3</label>
                        <input type="number" name="n1-3" id="n1-3" class="form form-control">
                    </li>
                    <li>
                        <label for="n1-4">Nota 4</label>
                        <input type="number" name="n1-4" id="n1-4" class="form form-control">
                    </li>

                    <br>
                    <hr>
                    <br>
                    
                    <li>
                        <label for="nome2">Nome Aluno(a) 2:</label>
                        <input type="text" name="nome2" id="nome2" class="form form-control">
                    </li>
                    <li>
                        <label for="mat2">Matricula(RM) Aluno(a) 2:</label>
                        <input type="number" name="mat2" id="mat2" class="form form-control">
                    </li>
                    <li>
                        <label for="n2-1">Nota 1</label>
                        <input type="number" name="n2-1" id="n2-1" class="form form-control">
                    </li>
                    <li>
                        <label for="n2-2">Nota 2</label>
                        <input type="number" name="n2-2" id="n2-2" class="form form-control">
                    </li>
                    <li>
                        <label for="n2-3">Nota 3</label>
                        <input type="number" name="n2-3" id="n2-3" class="form form-control">
                    </li>
                    <li>
                        <label for="n2-4">Nota 4</label>
                        <input type="number" name="n2-4" id="n2-4" class="form form-control">
                    </li>


                    <li>
                        <br>
                        <input type="submit" value="enviar" class="btn btn-outline-success">
                    </li>
                </ul>
            </fieldset>
        </form>
        <?php

            require "./aluno.php";

            $nome1 = ((isset($_POST["nome1"]))?$_POST["nome1"]:false);
            $nome2 = ((isset($_POST["nome2"]))?$_POST["nome2"]:false);
            
            $mat1 = ((isset($_POST["mat1"]))?$_POST["mat1"]:false);
            $mat2 = ((isset($_POST["mat2"]))?$_POST["mat2"]:false);

            $n1_1 = ((isset($_POST["n1-1"]))?$_POST["n1-1"]:false);
            $n1_2 = ((isset($_POST["n1-2"]))?$_POST["n1-2"]:false);
            $n1_3 = ((isset($_POST["n1-3"]))?$_POST["n1-3"]:false);
            $n1_4 = ((isset($_POST["n1-4"]))?$_POST["n1-4"]:false);

            $n2_1 = ((isset($_POST["n2-1"]))?$_POST["n2-1"]:false);
            $n2_2 = ((isset($_POST["n2-2"]))?$_POST["n2-2"]:false);
            $n2_3 = ((isset($_POST["n2-3"]))?$_POST["n2-3"]:false);
            $n2_4 = ((isset($_POST["n2-4"]))?$_POST["n2-4"]:false);

            $n1 = array((float)$n1_1, (float)$n1_2, (float)$n1_3, (float)$n1_4);
            $n2 = array((float)$n2_1, (float)$n2_2, (float)$n2_3, (float)$n2_4);

            if ($nome1 and $nome2){
                $a1 = new Aluno($nome1, $mat1, $n1);
                $a2 = new Aluno($nome2, $mat2, $n2);

                $a1->imprimir();
                echo "<hr>";
                $a2->imprimir();
            }

        ?>
    </div>

    <script src="./../res/jquery.js"></script>
    <script src="./../res/popper.js"></script>
    <script src="./../res/bootstrap.js"></script>
</body>
</html>