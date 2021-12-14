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
                'nome' => 'Lorem ipsum dolor sit amet',
                'turma' => 'Lorem ipsum dolor ',
                'turno' => 'Lorem ipsum dolor ',
                'created' => '2021-12-10 14:30:29',
                'modified' => '2021-12-10 14:30:29',
            ],
        ];
        parent::init();
    }
}
