<?php
    include_once("conexaoDeDados.php");

    $query = "SELECT * FROM cargos ORDER BY cargo ASC";
    $result = mysqli_query($conn, $query);

    $tableCargo = '<table>';
    
    while ($row =mysqli_fetch_assoc($result)) {
        echo '<div class="card">';

        echo '<div class="info">';
        echo '<div class="title">' . $row['cargo'] . '</div>';
        echo '<div class="title">' . $row['descricao'] . '</div>';
        echo '</div>';

        echo '<div class="actions_buttons">';
        echo '<button class="edit_button" data-id="' . $row['id'] . '" style="background-color: #13a538;">Editar</button>';
        echo '<button class="edit_button" data-id="' . $row['id'] . '" style="background-color: #ce8414;">Excluir</button>';
        echo '</div>';
        echo '</div>';
    }
?>