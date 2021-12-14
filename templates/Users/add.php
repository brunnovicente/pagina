<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container">
    <nav class="navbar navbar-light bg-light text-center">
        <a class="navbar-brand"><h3><?= __('Criar Usuário') ?></h3></a>
        <a class="btn btn-sm btn-info" href="/users/index">Voltar</a>
    </nav>

</div>
<br>

<div class="container">

    <div class="shadow p-2">
        <?= $this->Form->create($user) ?>

        <div class="row">
            <div class="col-12 form-group">
                <?php echo $this->Form->control('username',['class'=>'form-control','label'=>'NOME DE USUÁRIO', 'id'=>'username'])?>
            </div>
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <?php echo $this->Form->control('password',['class'=>'form-control','label'=>'SENHA', 'id'=>'senha'])?>
            </div>
            <div class="col-6 form-group">
                <?php echo $this->Form->control('roles',['class'=>'form-control','label'=>'CATEGORIA', 'id'=>'roles'])?>
            </div>

        </div>

        <div class="row pt-3 mb-2 mr-1 justify-content-end">
            <?= $this->Form->button(__(' SALVAR'), ['class'=>'btn btn-success far fa-save']) ?>
        </div>
        <?= $this->Form->end() ?>

    </div>
</div>
