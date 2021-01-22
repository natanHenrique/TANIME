
<?php
session_start();
unset($_SESSION['nome']);
header('Location: ?p=login');
exit();
?>