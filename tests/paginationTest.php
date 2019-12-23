<?php
//inclusão da conexão com banco de dados
$dbCredencialJson = file_get_contents("credencial_database.json");
$dbCredencialArray = json_decode($dbCredencialJson, true);
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=bookstore',
    $dbCredencialArray['db']['user'],
    $dbCredencialArray['db']['password']
    );

//A quantidade de valor a ser exibida
$quantidade = 3;
//a pagina atual
$pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
//Calcula a pagina de qual valor será exibido
$inicio     = ($quantidade * $pagina) - $quantidade;

//Monta o SQL com LIMIT para exibição dos dados  
$query = "SELECT * FROM book ORDER BY id ASC LIMIT $inicio, $quantidade";
//Executa o SQL
$stmt  = $db->prepare($query);
$stmt ->execute();

//Percorre os campos da tabela
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){


    echo "<p>ID: ".$row["id"]." Author: ".$row["author"]." Title: ".$row["title"]."<p>";


}


if($pagina == 1){
    
    echo "<form action='#' method='get'>
    <label>Page $pagina </label>";
    $pagina++;
    echo"<input type='submit' name='pagina' value='$pagina'></form>";

}else{

    $nextPage = $pagina + 1;
    $previewPage = $pagina - 1;
    echo "<form action='#' method='get'>
    <input type='submit' name='pagina' value='$previewPage '>
    <label>Page $pagina </label>
    <input type='submit' name='pagina' value='$nextPage '></form>";

}

