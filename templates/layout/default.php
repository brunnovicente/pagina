<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Curso Arduíno';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

      <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('estilo.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script(['jquery-3.4.1.min.js','bootstrap.js', 'bootstrap.bundle.js','menu.js']);?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="navbar navbar-expand-lg" id="barra">
        <div class="navbar-nav mr-auto imagem">
            <a class="nav-link" href="/" ><img width="135" src="/img/ifma-logo.png"><span class="sr-only mx-1">(current)</span></a>
        </div>

        <div class="dropdown float-right">
            <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> <?php //echo $user['username'];?>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="/users/index">Gerenciar Usuários</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/users/logout">Sair</a>
            </div>
        </div>

    </div>

    <div class="conteudo">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

    <!--<main class="main">
        <div class="container">
            <?//= $this->Flash->render() ?>
            <?//= $this->fetch('content') ?>
        </div>
    </main>-->
    <footer>
    </footer>
</body>
</html>
