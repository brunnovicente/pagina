<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */

$this->Paginator->setTemplates([
    'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
]);

?>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <h3><?=__('Alunos Inscritos')?></h3>
        <a class="btn btn-sm btn-info" href="/welcome/index">Voltar</a>
    </nav>

    <ul class="nav">
        <li class="nav-item">
                <?= $this->Html->link(__('Inscrever'), ['action' => 'add'], ['class' => 'nav-link btn btn-outline-success btn-sm m-1 fas fa-plus']) ?>
        </li>
    </ul>

    <div class="shadow">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('matricula', 'MATRICULA') ?></th>
                    <th><?= $this->Paginator->sort('nome', 'NOME') ?></th>
                    <th><?= $this->Paginator->sort('turma', 'TURMA') ?></th>
                    <th><?= $this->Paginator->sort('turno', 'TURNO') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?= h($aluno->matricula) ?></td>
                    <td><?= $this->Html->link(__($aluno->nome), ['action' => 'view', $aluno->id]) ?></td>
                    <td><?= h($aluno->turma) ?></td>
                    <td><?= h($aluno->turno) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $aluno->id], ['class' => 'btn btn-outline-primary btn-sm fas fa-edit']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $aluno->id], ['class' => 'btn btn-outline-danger btn-sm far fa-trash-alt','confirm' => __('Tem certeza que deseja excluir a inscrição de # {0}?', $aluno->nome)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->prev('< ' . ('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(('Próxima') . ' >') ?>
        </ul>
    </nav>

</div>
