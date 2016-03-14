<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HenkiloFixture
 *
 */
class HenkiloFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'henkilo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Avain' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Tunniste' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Etunimet' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Sukunimi' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Sahkoposti' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Ika' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Puhelinnumero' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Avain'], 'length' => []],
            'UQ_henkilo_Tunniste' => ['type' => 'unique', 'columns' => ['Tunniste'], 'length' => []],
            'UQ_henkilo_Sahkoposti' => ['type' => 'unique', 'columns' => ['Sahkoposti'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'Avain' => 1,
            'Tunniste' => 'Lorem ipsum dolor ',
            'Etunimet' => 'Lorem ipsum dolor sit amet',
            'Sukunimi' => 'Lorem ipsum dolor sit amet',
            'Sahkoposti' => 'Lorem ipsum dolor sit amet',
            'Ika' => 1,
            'Puhelinnumero' => 'Lorem ipsum dolor '
        ],
    ];
}
