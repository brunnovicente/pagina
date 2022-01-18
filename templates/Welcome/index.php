
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/welcome/index"><i class="fas fa-home"></i> Início</a>
        <?php if($user['roles']=='ADMINISTRADOR'):?>
            <a class="navbar-brand" href="/alunos/index"><i class="fas fa-user-tag"></i> Inscritos</a>
        <?php endif;?>
        <?php if($user['roles']=='ALUNO'):?>
            <a class="navbar-brand" href="/alunos/inscricao/<?php echo $aluno->id;?>"><i class="fas fa-address-card"></i> Inscrição</a>
        <?php endif;?>
    </nav>

    <h3>Bem Vindo
        <?php
            if($aluno == null) {
                echo $user['username'];
            }else{
                echo $aluno->nome;
            }
        ?>
    </h3>

</div>
