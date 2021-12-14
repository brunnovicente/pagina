<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */

$turnos = array(
    'MANHA'=>'MANHA',
    'TARDE'=>'TARDE'
);

$turma = array(
    '1 TI - Matutino'=>'1 TI - Matutino',
    '1 TI - Vespertino'=>'1 TI - Vespertino',
    '2 TI - Matutino'=>'2 TI - Matutino',
    '2 TI - Vespertino'=>'2 TI - Vespertino',
    '3 TI - Vespertino'=>'3 TI - Vespertino',

);

?>

<div class="container">

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"><h3><?= __('ALTERAR INSCRIÇÃO') ?></h3></a>
        <ul class="nav justify-content-end">

            <li class="nav-item">
                <?php
                echo $this->Form->postLink(__(' Voltar'), ['action' => 'index', $aluno->id], ['class' => 'nav-link  btn btn-outline-info btn-sm m-1 fas fa-trash-alt']);
                ?>
            </li>
        </ul>
    </nav>
</div>
<br>

<div class="container">

    <div class="shadow p-3">

        <?= $this->Form->create($aluno) ?>

        <div class="row">
            <div class="col-6 form-group">
                <?php echo $this->Form->control('matricula',['class'=>'form-control','label'=>'MATRÍCULA', 'id'=>'matricula'])?>
            </div>

        </div>

        <div class="row">

            <div class="col-12 form-group">
                <?php echo $this->Form->control('nome',['class'=>'form-control','label'=>'NOME', 'id'=>'nome'])?>
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <?php echo $this->Form->control('turno',['options'=>$turnos, 'class'=>'form-control','label'=>'TURNO QUE DESEJA FAZER O CURSO', 'id'=>'turno'])?>
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <?php echo $this->Form->control('turma',['options'=>$turma, 'class'=>'form-control','label'=>'TURMA', 'id'=>'turma'])?>
            </div>

        </div>

        <div class="row pt-3 mb-2 mr-1 justify-content-end">
            <?= $this->Form->button(__(' SALVAR'), ['class'=>'btn btn-success far fa-save']) ?>
        </div>

        <?= $this->Form->end() ?>

    </div>
</div>
