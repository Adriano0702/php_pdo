<?php
 //vincular o arquivo do conexão 
 include('database.php');

 //get
 // var_dump($_GET);
 $nome = $_GET["nome"];
 $email = $_GET["email"];
// var_dump($_GET);

 //variavel que simular comando 
 $sqlInsert = " INSERT INTO TB_USUARIO(NOME_US, EMAIL_US)
                VALUE(\"$nome\", '$email'); ";

// if($con->query(statement: $sqlInsert)){
//     echo "Inserido !!!" ;
//     echo "<br>";
//     echo  "id =". $con->lastInsertID();
// }else{
//     echo " Estudar mais !!!";
// }

//------------------

$sqlInsert = "  INSERT INTO TB_USUARIO(NOME_US, EMAIL_US)
                VALUES( ? ,? ); ";

            $stmt = $con->prepare($sqlInsert);
                $bool = $stmt->execute([$nome, $email]);
            if($bool){
                echo "Inserido !!!" ;
            }
            else{
                echo " Estudar mais !!!" ;
            }
?>