<?php 

$senha = $_POST['senha'];
$login = $_POST['login'];

// echo "{$senha}";//debugar
// echo "{$login}";

// echo "{$senha}";//debugar
// echo "{$login};

while(($senha != 123) && ($login != 'contalivre543210@gmail.com')){
    header('Location: login.php');
}

echo "Bem vindo ao sistema";

?>