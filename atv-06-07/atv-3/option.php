<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../res/bootstrap.css">
    <link rel="stylesheet" href="./../res/style.css">
    <?php
        session_start();
        require ("conta.php");
        $op = $_GET["op"];
        $saque = (isset($_POST['saque']))?$_POST['saque']:false;
        $deposito = (isset($_POST['deposito']))?$_POST['deposito']:false;

        
        if($saque){
            $control_saque = $_COOKIE["saldo"] - $saque;
            if($control_saque < 0){
                $_SESSION['type_msg'] = 'danger';
                $_SESSION['msg'] = 'Seu saldo não pode ser negativo';
            }else{
                $_COOKIE['saldo'] = $control_saque;
                $_SESSION['type_msg'] = 'success';
                $_SESSION['msg'] = 'valor sacado com sucesso. Saldo atual:' . $_COOKIE["saldo"];
            }
        }
        
        if($deposito){
            $_COOKIE['saldo'] += $deposito;
            $_SESSION['type_msg'] = 'success';
            $_SESSION['msg'] = 'valor depositado com sucesso. Saldo atual:' . $_COOKIE["saldo"];
        }
    ?>
</head>
<body>
    <div class="div-main p-4 rounded">
        <?php if((isset($_SESSION['type_msg'])) and (isset($_SESSION['msg']))): ?>

        <div class="alert alert-<?php echo $_SESSION['type_msg']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['msg']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php endif; ?>
        <?php if($op == 1): ?>

            <h3><strong>Nome do usuario: </strong><?php echo $_COOKIE["user"] ?></h3>
            <h3><strong>Saldo atual: </strong><?php echo $_COOKIE["saldo"] ?></h3>

        <?php elseif($op == 2):?>

            <form action="option.php?op=1" method="post">
                <label for="saque">Valor de Saque:</label>
                <input type="number" name="saque" id="saque" class="form form-control">
                <br><br>
                <input type="submit" value="sacar" class="btn btn-success">
            </form>

        <?php elseif($op == 3): ?>

            <form action="option.php?op=1" method="post">
                <label for="deposito">Valor de deposito:</label>
                <input type="number" name="deposito" id="deposito" class="form form-control">
                <br><br>
                <input type="submit" value="sacar" class="btn btn-success">
            </form>

        <?php else: ?>

            <h3 style="color: red">Erro</h3>

        <?php endif; ?>
    </div>
    <script src="./../res/jquery.js"></script>
    <script src="./../res/popper.js"></script>
    <script src="./../res/bootstrap.js"></script>
    <?php session_destroy(); ?>
</body>
</html>