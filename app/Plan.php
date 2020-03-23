<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $speed
 * @property int $cost
 * @property int $duration
 * @property string $created_at
 * @property string $updated_at
 */
class Plan extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'speed', 'cost', 'duration', 'created_at', 'updated_at'];

}
