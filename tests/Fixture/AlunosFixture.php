<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlunosFixture
 */
class AlunosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'matricula' => 'Lorem ipsum dolor ',
                'nome' => 'Lorem ipsum dolor sit amet',
                'turma' => 'Lorem ipsum dolor ',
                'turno' => 'Lorem ipsum dolor ',
                'created' => '2022-01-10 19:40:06',
                'modified' => '2022-01-10 19:40:06',
                'users_id' => 1,
            ],
        ];
        parent::init();
    }
}
