<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $fillable = ['id', 'username', 'password', 'email', 'guthaben', 'drop_name', 'drop_strasse_hausnr', 'drop_plz_ort', 'drop_land', 'ps_name', 'ps_postnr', 'ps_psnr', 'ps_plz_ort', 'ps_land', 'created_at', 'updated_at'];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
