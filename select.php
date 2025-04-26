<?php
include('database.php');

$sql = " Select * From tb_usuario ";

$stmt = $con->prepare($sql);
$resultado = $stmt->execute();
$linha = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($linha);

while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<br>" . $linha["ID_US"] .  "&nbsp&nbsp" .$linha["NOME_US"] . "&nbsp&nbsp" . $linha["EMAIL_US"] . "<BR>";
}
?>