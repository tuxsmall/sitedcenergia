<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property int $idade
 * @property string $telefone
 * @property string $empresa
 * @property string $genero
 * @property string $deficiencia
 * @property string $setor
 * @property string $escolaridade
 * @property string $uploadfile
 * @property \Cake\I18n\FrozenTime $created
 */
class Document extends Entity
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
        'nome' => true,
        'email' => true,
        'idade' => true,
        'telefone' => true,
        'empresa' => true,
        'genero' => true,
        'deficiencia' => true,
        'setor' => true,
        'escolaridade' => true,
        'uploadfile' => true,
        'created' => true
    ];
}
