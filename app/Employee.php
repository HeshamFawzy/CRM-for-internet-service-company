<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property integer $contact
 * @property string $email
 * @property string $region
 * @property string $created_at
 * @property string $updated_at
 */
class Employee extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'contact', 'email', 'region', 'created_at', 'updated_at'];

}
