<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exerciseinformation Entity.
 *
 * @property int $id
 * @property string $title
 * @property int $weight
 * @property string $breakduration
 * @property int $repetition
 * @property int $setAmount
 * @property \App\Model\Entity\Exercise[] $exercises
 */
class Exerciseinformation extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
