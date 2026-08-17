<?php
// ============================================================
// LOGOUT.PHP - CORRIGIDO
// ============================================================

session_start();

// Limpar todas as variáveis de sessão
$_SESSION = array();

// Destruir a sessão
session_destroy();

// Limpar localStorage via JavaScript
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='refresh' content='0;url=login.php'>";
echo "<title>Logout</title>";
echo "</head>";
echo "<body>";
echo "<script>";
echo "localStorage.removeItem('userLoggedIn');";
echo "localStorage.removeItem('userType');";
echo "localStorage.removeItem('userName');";
echo "localStorage.removeItem('userId');";
echo "console.log('✅ Logout realizado com sucesso!');";
echo "</script>";
echo "<p style='font-family: Arial; text-align: center; margin-top: 50px;'>";
echo "✅ Deslogado com sucesso! Redirecionando...";
echo "</p>";
echo "</body>";
echo "</html>";
exit;
?>
