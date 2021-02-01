<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * Statement Entity
 *
 * @property int $id
 * @property string $transaction_id
 * @property string $narration
 * @property string $purpose
 * @property int $amount
 * @property int $deliver_to
 * @property FrozenTime $created
 */
class Statement extends Entity
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
        'transaction_id' => true,
        'narration' => true,
        'purpose' => true,
        'amount' => true,
        'deliver_to' => true,
        'created' => true,
    ];
}
