<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exercise Entity.
 *
 * @property int $id
 * @property string $title
 * @property int $maxweight
 * @property \App\Model\Entity\Exerciseinformation[] $exerciseinformations
 * @property \App\Model\Entity\Training[] $trainings
 */
class Exercise extends Entity
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
