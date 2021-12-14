<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto shadow p-3 mt-3 rounded">
            <?= $this->Form->create()?>
            <div class="container mb-4">
                <a href="/"><img src="/img/batman.png" class="d-block mx-auto w-25"/></a>
            </div>
            <div class="logo mb-3">
                <div class="col-md-12 text-center">
                    <h3>Camara dos Vereadores<br>Coelho Neto - MA</h3>
                </div>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('username', ['class'=>'form-control', 'label'=>'LOGIN']);?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('password', ['class'=>'form-control', 'label'=>'SENHA']);?>
            </div>
            <div>
                <?= $this->Form->button('Entrar', ['class'=>'btn btn-success btn-block'])?>
            </div>
            <?= $this->Form->end()?>
            <div class="row">
                <div class="col">
                    <a class="btn btn-light btn-block mt-2" href="/">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<br>
<div class="container shadow col-4 p-2">
    <div class="row mb-5 justify-content-center">
        <div class="col-9">
            <?php echo $this->Html->image('batman.png', ['class'=>'img-fluid'])?>
        </div>
    </div>
    <?= $this->Form->create()?>

    <div class="row mb-2">
        <div class="col-12 h4 text-center">
            Acesso ao Sistema
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <?php echo $this->Form->control('username', ['class' =>'form-control h3','label'=>'LOGIN']);?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <?php echo $this->Form->control('password', ['class' =>'form-control h3','label'=>'SENHA']);?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <?= $this->Form->button(__('Entrar'), ['class'=>'btn btn-success btn-block']);?>
        </div>
        <?= $this->Form->end() ?>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-light btn-block mt-2" href="/">Voltar</a>
        </div>
    </div>
</div>
-->
