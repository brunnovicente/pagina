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

<nav class="navbar navbar-light mb-2">
    <a class="navbar-brand" href="#">
        <img src="/img/logoIFMA.png" width="30" height="30" class="d-inline-block align-top" alt="">
        IFMA - Campus Coelho Neto
    </a>
</nav>
<ul class="nav bg-light mb-3">
    <li class="nav-item">
        <a class="nav-link active" href="/">Página Inicial/</a>
    </li>
</ul>

<div class="container">
    <nav class="navbar navbar-light bg-light text-center">
        <a class="navbar-brand"><h3><?= __('INSCRIÇÃO: Curso de Arduíno') ?></h3></a>
    </nav>

</div>
<br>

<div class="container">

    <div class="shadow p-3">
        <p class="text-danger">ATENÇÃO: Escolha um turno diferente do seu turno de aula, ou seja, alunos que estudam pela manhã, escolham turno da tarde, alunos que estudam a tarde escolham
            turno da manhã.</p>
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
            <?= $this->Form->button(__(' FAZER INSCRIÇÃO'), ['class'=>'btn btn-success far fa-save']) ?>
        </div>

        <?= $this->Form->end() ?>

    </div>
</div>
