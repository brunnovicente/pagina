

<table>
    <?php foreach ($alunos as $aluno):?>
    <tr>
        <td><?= h($aluno->matricula) ?></td>
        <td><?= h($aluno->nome) ?></td>
    </tr>
    <?php endforeach;?>
</table>

