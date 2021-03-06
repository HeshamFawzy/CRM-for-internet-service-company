<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customer_id
 * @property string $text
 * @property string $date
 * @property string $state
 * @property string $created_at
 * @property string $updated_at
 * @property Customer $customer
 */
class Complaint extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['customer_id', 'text', 'date', 'state', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
