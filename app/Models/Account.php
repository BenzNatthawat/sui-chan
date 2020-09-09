<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id', 'cid', 'dob', 'name', 'surname', 'tel', 'party_name', 'province',
      'amphoe', 'district', 'comment', 'image_profile', 'image_cid', 'zipcode',
      'user_create_id'
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';


}
