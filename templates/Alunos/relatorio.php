<html>
    <style>
        table, td{
            border: 1px #721c24 solid;
        }
        table{
            width: 100%;
        }
        .coluna{
            width: 25%;
            text-align: center;
        }
        .nome{
            width: 50%;
        }
        h4, h5{
            text-align: center;
        }
        tr:nth-child(even){
            background: #6c757d;
        }
    </style>
    <body>
        <h4>CURSO DE ARDUÍNO</h4>
        <h5>LISTA DE ALUNOS SELECIONADOS</h5>
        <table>
            <tr>
                <td class="coluna" ><b>MATRÍCULA</b></td>
                <td class="nome" style="text-align: center"><b>ALUNO</b></td>
                <td class="coluna"><b>RESULTADO</b></td>
            </tr>
            <?php $i = 1;?>
            <?php foreach ($alunos as $aluno):?>

                <tr>
                    <td class="coluna"><?php echo $i ?></td>
                    <td class="nome"><?= h($aluno->nome) ?></td>
                    <td class="coluna">
                        <?php
                            if($i <= 20){
                                echo 'Classificado';
                            }else{
                                echo 'Espera';
                            }
                        ?>
                    </td>
                </tr>
                <?php $i++;?>
            <?php endforeach;?>
        </table>
    </body>

</html>


