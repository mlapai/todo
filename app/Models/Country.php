<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * @package App\Models
 */
final class Country extends Model
{
    protected $fillable = array(
        'name'
    );

    public function users()
    {
        return $this->hasMany('App\User');
    }
}