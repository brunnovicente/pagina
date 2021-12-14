<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'roles' => 'Lorem ipsum dolor ',
                'created' => '2021-12-10 16:10:38',
                'modified' => '2021-12-10 16:10:38',
            ],
        ];
        parent::init();
    }
}
