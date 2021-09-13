<?php 
$nomeLivro=$_POST["nomeLivro"];
$autor=$_POST["autor"];
$edicao=$_POST["edicao"];
$categoria=$_POST["categoria"];
$editora=$_POST["editora"];
$local=$_POST["local"];
$pagina=$_POST["pagina"];
$isbn=$_POST["isbn"];

echo "- nome: ".$nomeLivro."<br>- autor: ".$autor."<br>";
echo "- edicao: ".$edicao."<br>- categoria: ".$categoria."<br>";
echo "- editora: ".$editora."<br>- local: ".$local."<br>";
echo "- pagina: ".$pagina."<br>- isbn: ".$isbn."<br>";
?>