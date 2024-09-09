<?php
session_start(); ?>
<main>
        <table border="5px">
            <tr>
                <td>
                    Email
                </td>
                <td>
                    Dia
                </td>
                <td>
                    Hora
                </td>
                <td>
                    Descrição
                </td>
            </tr>

<?php
$dataAtual = date("Y-m-d");
include "conexao.php";
include "includes/cabecalho.inc";
$sql = "SELECT * FROM agendamentos WHERE dia >= '$dataAtual' ORDER BY 'dia','hora'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {	
        echo "
        <tr> 
        <td>" . $row["email"]. "</td> 
        <td>" . date("d/m/Y", strtotime($row["dia"])). "</td>
        <td>" . $row["hora"]. "</td>
        <td>" . $row["descrição"]. "</td>
        </tr>";
    }
}
else {
    echo "0 resultados";
}
?>
</table>
</main>

<?php
include "includes/rodape.inc"
?>