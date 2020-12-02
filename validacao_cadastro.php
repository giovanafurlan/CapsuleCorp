<?php
$invest_email=$_POST['invest_email'];
$invest_cnpj=$_POST['invest_cnpj'];
$invest_senha=$_POST['invest_senha'];

include_once('conexao.php');

$sql="INSERT INTO cad_invest (invest_email, invest_cnpj, invest_senha) VALUES ('$invest_email','$invest_cnpj','$invest_senha')";

$resultado=mysqli_query($conn,$sql) or die('Erro na inserção do registro');
echo ('<script>
alert("Registro inserido com sucesso!");
</script>');

mysqli_close($conn);

echo ('<script>window.location.href="login.html";</script>');
?>