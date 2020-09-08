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
      'cid', 'dob', 'name', 'surname', 'tel', 'party_name', 'province',
      'amphoe', 'district', 'comment', 'image_profile', 'image_cid'
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
