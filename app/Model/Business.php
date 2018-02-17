<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'country', 'state', 'timezone', 'currency'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Model\User');
    }
}
