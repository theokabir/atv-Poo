<!DOCTYPE html>
<html lang="en">
<head>
    <!-- autor: Théo Kabir Novais de Carvalho 
    obs: Tive diversos problemas com essa atividade em especifico então a forma que usei para n recriar a variavel varias vezes foi usar cookies-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../res/bootstrap.css">
    <link rel="stylesheet" href="./../res/style.css">
    <?php
        require ("conta.php");
        $conta = new Conta("Usuario");
        if(isset($_COOKIE["saldo"])){
            setcookie("saldo", $conta->getSaldo(), time()+60*60*24);
        }
        if(isset($_COOKIE["user"])){
            setcookie("user", "Usuario", time()+60*60*24);
        }
    ?>
</head>
<body>
    <div class="div-main p-4 rounded">
        <form action="option.php" method="get">
            <select name="op" id="op" class="form form-control">
                <option value="1">status conta</option>
                <option value="2">saque</option>
                <option value="3">deposito</option>
            </select>
            <br><br>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
    </div>
    <script src="./../res/jquery.js"></script>
    <script src="./../res/popper.js"></script>
    <script src="./../res/bootstrap.js"></script>
</body>
</html>