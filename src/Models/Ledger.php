<?php

declare(strict_types=1);

namespace Altek\Accountant\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int|string $id
 * @property string $user_type
 * @property int|string $user_id
 * @property string $recordable_type
 * @property int|string $recordable_id
 * @property string $context
 * @property string $event
 * @property array $properties
 * @property array $modified
 * @property array $pivot
 * @property array $extra
 * @property string $url
 * @property string $ip_address
 * @property string $user_agent
 * @property string $signature
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ledger extends Model implements \Altek\Accountant\Contracts\Ledger
{
    use \Altek\Accountant\Ledger;

    /**
     * {@inheritdoc}
     */
    protected $table = 'ledgers';

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'properties' => 'json',
        'modified'   => 'json',
        'pivot'      => 'json',
        'extra'      => 'json',
    ];
}
