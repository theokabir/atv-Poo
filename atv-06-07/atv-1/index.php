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
            <legend>Triangulo</legend>
            <ul>
                <li>
                    <label for="base">Base:</label>
                    <input type="number" name="base" id="base" class="form form-control">
                </li>
                <li>
                    <label for="alt">Altura:</label>
                    <input type="number" name="alt" id="alt" class="form form-control"><br>
                </li>
                <li>
                    <input type="submit" value="Criar triangulo" class="btn btn-outline-success">
                </li>
            </ul>
        </form>
        <?php
            require "./triangulo.php";

            $base = ((isset($_POST["base"]))?$_POST["base"]:false);
            $alt = ((isset($_POST["alt"]))?$_POST["alt"]:false);

            if ($base and $alt){
                echo "<hr>";
                $triang = new Triangulo($base, $alt);
                $triang->imprimir();
            }
        ?>
    </div>
    <script src="./../res/jquery.js"></script>
    <script src="./../res/popper.js"></script>
    <script src="./../res/bootstrap.js"></script>
</body>
</html>