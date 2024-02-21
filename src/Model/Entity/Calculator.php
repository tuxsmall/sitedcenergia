<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calculator Entity
 *
 * @property int $id
 * @property string $projeto
 * @property string $estado
 * @property string $cidade
 * @property string $consumo
 * @property string $nome
 * @property string $whats
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $investimento
 * @property string|null $payback
 */
class Calculator extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'projeto' => true,
        'estado' => true,
        'cidade' => true,
        'consumo' => true,
        'nome' => true,
        'whats' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'investimento' => true,
        'payback' => true
    ];
}
