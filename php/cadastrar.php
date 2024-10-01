<?php 

// Incluir a Conexão
include("conexao.php");

// Obter os dados
$obterDados = file_get_contents("php://input");

// Extrair os dados do JSON
$extrair = json_decode($obterDados);

// Separa os dados do JSON
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->curso->valorCurso;

// SQL
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', '$valorCurso')";
mysqli_query($conexao, $sql);

// Exportar os dados cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

json_encode(['curso'=>$curso]);

?>