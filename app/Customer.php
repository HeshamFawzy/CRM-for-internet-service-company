<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $plan_id
 * @property string $name
 * @property integer $contact
 * @property string $email
 * @property integer $age
 * @property string $gender
 * @property string $business
 * @property string $region
 * @property string $expireddate
 * @property string $created_at
 * @property string $updated_at
 * @property Plan $plan
 */
class Customer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['plan_id', 'name', 'contact', 'email', 'age', 'gender', 'business', 'region', 'expireddate', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
