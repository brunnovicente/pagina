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

$turno = array(
    '' => '',
    'MANHA'=>'MANHA',
    'TARDE'=>'TARDE',
);

?>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <h3><?=__('Alunos Inscritos')?></h3>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <?= $this->Html->link(__('Inscrever'), ['action' => 'add'], ['class' => 'nav-link btn btn-outline-success btn-sm m-1 fas fa-plus']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(__('Voltar'), ['controller'=>'welcome','action' => 'index'], ['class' => 'nav-link btn btn-outline-info btn-sm m-1 fas fa-plus']) ?>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <?= $this->Form->create(null, ['type'=>'get'])?>
        <div class="row">
            <div class="col-3">
                <?php echo $this->Form->control('turno',['options'=>$turno,'class'=>'form-control', 'label'=>'TURNO','id'=>'turno']);?>
            </div>
            <div class="col-2">
                <div class="row pt-4 mb-2 mr-1 justify-content-end">
                    <?= $this->Form->button(__(' Buscar'), ['class'=>'btn btn-success']) ?>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
    <br>
    <p><?php echo count($alunos);?> inscrições realizadas</p>
    <div class="shadow">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('matricula', 'MATRICULA') ?></th>
                    <th><?= $this->Paginator->sort('nome', 'NOME') ?></th>
                    <th><?= $this->Paginator->sort('turma', 'TURMA') ?></th>
                    <th><?= $this->Paginator->sort('turno', 'TURNO') ?></th>
                    <th><?= $this->Paginator->sort('created', 'DATA') ?></th>
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
                    <td><?= h($aluno->created) ?></td>
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
