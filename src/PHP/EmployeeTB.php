<?php
    include_once("conexaoDeDados.php");

    /*união da tabela funcionários com a coluna cargos para ajustar o problema que estava emfrentando
    do cargo ser inserido na tabela como id ao invés do nome do cargo*/
    $query = "SELECT f.*, c.cargo AS cargo FROM funcionarios f
    LEFT JOIN cargos c ON f.cargo = c.id ORDER BY f.nome ASC";
    $result = mysqli_query($conn, $query);

    
    while ($row =mysqli_fetch_assoc($result)) {
        echo '<div class="card">';

        echo '<div class="info">';
        echo '<a href="http://localhost/Projetos/3LM_TablePHP/src/pages/cadastro/Employee_view.php?id=' . $row['id'] . '"class="title">';
        echo '<div class="title">' . $row['nome'] ." ". $row['sobrenome'] . '</div>';
        echo '</a>';
        echo '<div class="text" <label>Cargo:  </label>'. $row['cargo'] . '</div>';
        echo '</div>';

        
        echo '<div class="actions_buttons">';
        echo '<a href="http://localhost/Projetos/3LM_TablePHP/src/pages/cadastro/Employee_edit.php?id=' . $row['id'] . '" class="edit_button" style="background-color: #13a538;">Editar</a>';
        echo '<a href="http://localhost/Projetos/3LM_TablePHP/src/PHP/Delete_Employee.php?id=' . $row['id'] . '" class="edit_button" style="background-color: #ce8414;">Excluir</a>';
        echo '</div>';
        echo '</div>';
    }
?>