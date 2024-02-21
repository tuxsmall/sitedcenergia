<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * City Entity
 *
 * @property int $id
 * @property string|null $cidade
 * @property int|null $state_id
 * @property string|null $cep
 *
 * @property \App\Model\Entity\State $state
 */
class City extends Entity
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
        'cidade' => true,
        'state_id' => true,
        'cep' => true,
        'state' => true
    ];
}
