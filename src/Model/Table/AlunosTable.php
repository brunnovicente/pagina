<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @method \App\Model\Entity\Aluno newEmptyEntity()
 * @method \App\Model\Entity\Aluno newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AlunosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('alunos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('matricula')
            ->maxLength('matricula', 20)
            ->allowEmptyString('matricula');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->allowEmptyString('nome');

        $validator
            ->scalar('turma')
            ->maxLength('turma', 20)
            ->allowEmptyString('turma');

        $validator
            ->scalar('turno')
            ->maxLength('turno', 20)
            ->allowEmptyString('turno');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('users_id', 'Users'), ['errorField' => 'users_id']);

        return $rules;
    }
}
