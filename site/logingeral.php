<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php

$nome = $_POST["uname"];
$senha = $_POST["psw"];

if (($nome =="admin")&&($senha == "123")) {
	echo "Logado";
}else{
	echo "Não Logado";
}
?>

<body>

</body>
</html>