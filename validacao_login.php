<?php
    $invest_email= $_POST['invest_email'];
    $invest_senha= $_POST['invest_senha'];

    include('conexao.php');

    $sql= "SELECT* FROM cad_invest WHERE invest_email= '$invest_email' AND invest_senha= '$invest_senha'";

    $resultado= mysqli_query($conn,$sql);
    $linha= mysqli_fetch_array($resultado);

    mysqli_close($conn);

    if ($linha){
        session_start();
        $_SESSION['invest_email']=$linha['invest_email'];

        echo ("<script>
            alert('Login efetuado');
            window.location.href=principal.php;
        </script>");
    }
    else{
        echo("<script>
            alert('Usuário não encontrado, cadastre-se');
        </script>");
    }
?>