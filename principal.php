<?php
session_start();
$invest_email = $_SESSION['invest_nome'];
echo ('Email: '.$invest_email);
?>