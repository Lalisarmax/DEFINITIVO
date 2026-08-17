<?php
session_start();

echo "<script>
    localStorage.removeItem('userLoggedIn');
    localStorage.removeItem('userType');
    localStorage.removeItem('userName');
    localStorage.removeItem('userId');
</script>";

session_destroy();

header('Location: login.php');
exit;
?>