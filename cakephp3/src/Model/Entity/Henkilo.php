<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Henkilo Entity.
 *
 * @property int $Avain
 * @property string $Tunniste
 * @property string $Etunimet
 * @property string $Sukunimi
 * @property string $Sahkoposti
 * @property int $Ika
 * @property string $Puhelinnumero
 */
class Henkilo extends Entity
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
        'Avain' => false,
    ];
}
