<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'firstname',
        'surname',
        'email',
        'phone',
        'address',
        'gender',
        'street',
        'state',
        'lga',
        'branch',
        'bet9ja_id',
        'bet9ja_code',
        'user_id',	
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    /**
     * A Customer can have many interests.
     * Get interests associated with the customer.
     *
     * @return \Illuminate\Database\Eloquent\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToOne('App\User');
    }
	
}
