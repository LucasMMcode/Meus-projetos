<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"; ?>
<main>
        <table border="5px" style="display:flex; justify-content: center;">
            <tr>
                <td>
                    Nome
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
$sql = "SELECT * FROM agendamentos WHERE dia >= '$dataAtual' ORDER BY 'dia','hora'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {	
        echo "
        <tr> 
        <td>" . $row["nome"]. "</td> 
        <td>" . date("d/m/Y", strtotime($row["dia"])). "</td>
        <td>" . $row["hora"]. "</td>
        <td>" . $row["cortes"]. "</td>
        </tr>";
    }
}
else {
    echo '<tr>
        <td colspan="4">Nenhuma consulta marcada</td>
        </tr>';
}
?>
</table>
</main>

<?php
include "includes/rodape.inc"
?>