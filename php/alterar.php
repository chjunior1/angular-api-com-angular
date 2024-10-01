<?php 

// Incluir a Conexão
include("conexao.php");

// Obter os dados
$obterDados = file_get_contents("php://input");

// Extrair os dados do JSON
$extrair = json_decode($obterDados);

// Separa os dados do JSON
$idCurso = $extrair->cursos->$idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->curso->valorCurso;

// SQL
$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso='$valorCurso' WHERE idCurso='$idCurso'";
mysqli_query($conexao, $sql);

// Exportar os dados cadastrados
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

json_encode(['curso'=>$curso]);

?>