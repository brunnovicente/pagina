<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"><h3><?= __('Dados do Aluno') ?></h3></a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <?php
                    echo $this->Html->link(__(' Editar'), ['action' => 'edit', $aluno->id], ['class' => 'nav-link  btn btn-outline-primary btn-sm m-1 fas fa-edit']);
                ?>
            </li>
            <li class="nav-item">
                <?php
                    echo $this->Form->postLink(__(' Excluir'), ['action' => 'delete', $aluno->id], ['confirm' => __('Tem certeza que seja excluir {0}?', $aluno->nome), 'class' => 'nav-link  btn btn-outline-danger btn-sm m-1 fas fa-trash-alt']);
                ?>
            </li>

            <li class="nav-item">
                <?php
                echo $this->Form->postLink(__(' Voltar'), ['action' => 'index', $aluno->id], ['class' => 'nav-link  btn btn-outline-info btn-sm m-1 fas fa-trash-alt']);
                ?>
            </li>
        </ul>
    </nav>

</div>

<div class="container">
    <div class="shadow p-2">
        <h3 class="text-center"><?= h($aluno->nome) ?></h3>
        <table class="table">
            <tr>
                <th><?= __('MATRÍCULA') ?></th>
                <td><?= h($aluno->matricula) ?></td>
            </tr>
            <tr>
                <th><?= __('Turma') ?></th>
                <td><?= h($aluno->turma) ?></td>
            </tr>
            <tr>
                <th><?= __('TURNO') ?></th>
                <td><?= h($aluno->turno) ?></td>
            </tr>
        </table>
    </div>
</div>
